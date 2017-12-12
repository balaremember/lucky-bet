<template>
    <aside id="right_sidebar">
        <!--Купон-->
        <div id="coupon">
            <div>
                <p>Купон</p>
            </div>
            <div id="#containerClearCoupon">
                <md-button id="buttonClearCoupon" class="md-icon-button" v-on:click="clearCoupon">
                    <md-icon>clear</md-icon>
                </md-button>
            </div>
            <br><hr>
            <div v-if="showCoupon">
                <form id="couponForm">
                    <div id="betTypeContainer">
                        <md-radio v-model="betType" id="single" name="betType" mdValue="single">Одиночные</md-radio>
                        <md-radio v-model="betType" id="express" name="betType" mdValue="express">Экспресс</md-radio>
                        <div v-if="betType === 'express'">
                            <label for="amount">Сумма ставки</label>
                            <input id="expressAmount" type="number" title="min сумма ставки 50 RUR, max - 1000000 RUR"
                                   min="50" max="1000000" step="1" maxlength="6" v-model="expressAmount">
                        </div>
                        <md-button v-if="events.length > 0">Заключить пари</md-button>
                        <!--TODO: need calc totalPayment-->
                        <!--<div>
                            <p>Общая сумма возможного выигрыша</p>
                            <span>{{totalPayment}} руб.</span>
                        </div>-->
                    </div>
                    <div id="eventsContainer">
                        <ul v-for="event in events">
                            <li id="eventInList" v-on:click="deleteEventFromCoupon">
                                <div class="eventAddContainer">
                                    <md-button>
                                        <md-icon>clear</md-icon>
                                    </md-button>
                                </div>
                                <p>Номер события: #{{event.id}}</p>
                                <h5>Дата: {{event.date}}</h5>
                                <h5>Турнир: {{event.tournamentName}}</h5>
                                <h5>Событие: {{event.eventName}}</h5>
                                <h4>Коэффициент: {{event.coefficient}}</h4>
                                <div v-if="betType === 'single'">
                                    <label for="amount">Сумма ставки</label>
                                    <input id="amount" type="number"
                                           title="min сумма ставки 50 RUR, max - 1000000 RUR."
                                           min="50" max="1000000" step="1" maxlength="6" v-model="event.amount">
                                    <div>
                                        <p>Возможный выигрыш</p>
                                        <span>{{(event.coefficient * event.amount).toFixed(2)}} руб.</span>
                                    </div>
                                </div>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
        <!--HELP-->
        <div id="help">
            <p>Онлайн поддержка</p>
            <p id="help_tel"><a id="tel" href="tel:88005553535">8 (800) 555-35-35</a></p>
            <p>Звонок бесплатный</p>
            <p>Электронная почта</p>
            <p id="help_email"><a id="mail" href="mailto:info@lucky-bet.com">info@lucky-bet.com</a></p>
        </div>
    </aside>
</template>

<script>
    export default
    {
        data() {
            return {
                showCoupon: true,
                betType: 'single',
                expressAmount: 0,
                totalPayment: 0,
                events: [
                    {
                        id: 0,
                        eventName: 'eventName #1',
                        tournamentName: 'tournamentName #1',
                        coefficient: 777,
                        date: '01/01/2017',
                        amount: 0
                    },
                    {
                        id: 1,
                        eventName: 'eventName #2',
                        tournamentName: 'tournamentName #2',
                        coefficient: 177,
                        date: '01/01/2014',
                        amount: 0
                    },
                    {
                        id: 2,
                        eventName: 'eventName #3',
                        tournamentName: 'tournamentName #3',
                        coefficient: 7,
                        date: '01/03/2017',
                        amount: 0
                    },
                    {
                        id: 3,
                        eventName: 'eventName #4',
                        tournamentName: 'tournamentName #4',
                        coefficient: 5,
                        date: '23/01/2017',
                        amount: 0
                    },
                    {
                        id: 4,
                        eventName: 'eventName #5',
                        tournamentName: 'tournamentName #5',
                        coefficient: 2,
                        date: '30/05/2017',
                        amount: 0
                    },
                    {
                        id: 5,
                        eventName: 'eventName #6',
                        tournamentName: 'tournamentName #6',
                        coefficient: 12.4,
                        date: '01/12/2016',
                        amount: 0
                    },
                    {
                        id: 6,
                        eventName: 'eventName #7',
                        tournamentName: 'tournamentName #7',
                        coefficient: 5.34,
                        date: '11/08/2017',
                        amount: 0
                    },
                    {
                        id: 7,
                        eventName: 'eventName #8',
                        tournamentName: 'tournamentName #8',
                        coefficient: 3.34,
                        date: '31/01/2017',
                        amount: 0
                    },
                    {
                        id: 8,
                        eventName: 'eventName #9',
                        tournamentName: 'tournamentName #9',
                        coefficient: 2.43,
                        date: '04/07/2017',
                        amount: 0
                    }]
            };
        },

        methods: {
            deleteEventFromCoupon: function (event) {
                let element = event.currentTarget;
                let stringWithEventId = element.firstChild.textContent;
                console.log(stringWithEventId);
                let pattern = /#\d+/;
                let id = pattern.exec(stringWithEventId);
                console.log('Кликнули по событию с id:');
                console.log(id[0]);
            },

            clearCoupon: function () {
                this.events = [];
            },


            calcTotalPayment: function(){
                console.log('method calcTotalPayment start');
                let totalPayment = 0;
                switch (this.betType)
                {
                    case 'single':
                    {
                        for(key in this.events)
                        {
                            totalPayment += (this.events[key].coefficient * this.events[key].amount);
                            console.log(totalPayment);
                        }
                        break;
                    }
                    case 'express':
                    {
                        let totalCoefficient = 1;
                        for(key in this.events)
                        {
                            totalCoefficient *= this.events[key].coefficient;
                            console.log(totalPayment);
                        }
                        totalPayment = totalCoefficient * this.expressAmount;
                        break;
                    }
                }
                console.log(totalPayment);
                return totalPayment;
            }
        }
    }
</script>