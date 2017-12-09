<template>
    <div id="eventsBlock">
        <!--<p>Кликните на событие чтобы добавить его в купон.</p>-->
        <div v-if="showEvents" id="eventsInMainListContainer">
            <ul id="eventsInMainList" v-for="event in events">
                <li v-on:click="addEventToCoupon" v-model="events">
                    <div class="eventAddContainer">
                        <md-button>
                            <md-icon>add</md-icon>
                        </md-button>
                    </div>
                    <p>Номер события: #{{event.id}}</p>
                    <h5>Дата: {{event.date}}</h5>
                    <h5>Турнир: {{event.tournamentName}}</h5>
                    <h5>Событие: {{event.eventName}}</h5>
                    <h4>Коэффициент: {{event.coefficient}}</h4>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default
    {
        data(){
            return{
                showEvents: true,
                events:[
                    {
                        id: 0,
                        eventName: 'eventName #1',
                        tournamentName: 'tournamentName #1',
                        coefficient: 777,
                        date: '01/01/2017'
                    },
                    {
                        id: 1,
                        eventName: 'eventName #2',
                        tournamentName: 'tournamentName #2',
                        coefficient: 177,
                        date: '01/01/2014'
                    },
                    {
                        id: 2,
                        eventName: 'eventName #3',
                        tournamentName: 'tournamentName #3',
                        coefficient: 7,
                        date: '01/03/2017'
                    },
                    {
                        id: 3,
                        eventName: 'eventName #4',
                        tournamentName: 'tournamentName #4',
                        coefficient: 5,
                        date: '23/01/2017'
                    },
                    {
                        id: 4,
                        eventName: 'eventName #5',
                        tournamentName: 'tournamentName #5',
                        coefficient: 2,
                        date: '30/05/2017'
                    },
                    {
                        id: 5,
                        eventName: 'eventName #6',
                        tournamentName: 'tournamentName #6',
                        coefficient: 12.4,
                        date: '01/12/2016'
                    },
                    {
                        id: 6,
                        eventName: 'eventName #7',
                        tournamentName: 'tournamentName #7',
                        coefficient: 5.34,
                        date: '11/08/2017'
                    },
                    {
                        id: 7,
                        eventName: 'eventName #8',
                        tournamentName: 'tournamentName #8',
                        coefficient:3.34,
                        date: '31/01/2017'
                    },
                    {
                        id: 8,
                        eventName: 'eventName #9',
                        tournamentName: 'tournamentName #9',
                        coefficient: 2.43,
                        date: '04/07/2017'
                    }]
            };
        },
        methods:
            {
                addEventToCoupon: function (event)
                {
                    let element = event.currentTarget;
                    let stringWithEventId = element.firstChild.textContent;
                    console.log(stringWithEventId);
                    let pattern = /#\d+/;
                    let id = pattern.exec(stringWithEventId);
                    console.log('Кликнули по событию с id:');
                    console.log(id[0]);
                }
            }
    }
</script>