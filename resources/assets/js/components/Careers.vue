<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1> Вакансии : </h1>
                    <div>
                        <b>Работа в Lucky-bet</b><br>
                        <p>Вы хотите работать в ведущей букмекерской компании России и можете предложить нам свои знания и опыт?</p>
                        <p>В связи с расширением компании и открытием новых центров обслуживания клиентов мы приглашаем на работу в Москве и регионах РФ на следующие вакансии:</p><br>
						
						<md-menu md-direction="button-1">
						<md-button md-menu-trigger>Спортивная аналитика</md-button>
						<md-menu-content>
						<md-menu-item>Комментатор спортивных событий </md-menu-item>
						<md-menu-item>Спортивный аналитик live </md-menu-item>
						</md-menu-content>
						</md-menu>
						
						<md-menu md-direction="button-2">
						<md-button md-menu-trigger>Розничный бизнес, клубы</md-button>
						<md-menu-content>
						<md-menu-item>Кассир</md-menu-item>
						<md-menu-item>Управляющий сети клубов</md-menu-item>
						<md-menu-item>Управляющий сети клубов (г. Новороссийск)</md-menu-item>
						<md-menu-item>Заместитель управ⁢ляющего сети клубов (г. Казань)</md-menu-item>
						<md-menu-item>Официант</md-menu-item>
						<md-menu-item>Заместитель управ⁢ляющего сети клубов (г.Киров)</md-menu-item>
						</md-menu-content>
						</md-menu>
						
						<md-menu md-direction="button-3">
						<md-button md-menu-trigger>Клиентская поддержка</md-button>
						<md-menu-content>
						<md-menu-item>Оператор call-центра</md-menu-item>
						</md-menu-content>
						</md-menu>
                       
					   <md-menu md-direction="button-4">
						<md-button md-menu-trigger>Бухгалтерия, управленческий учёт, финансы</md-button>
						<md-menu-content>
						<md-menu-item>Специалист отдела обработки данных (в финансовый отдел)</md-menu-item>
						<md-menu-item>Бухгалтер по расчету заработной платы</md-menu-item>
						</md-menu-content>
						</md-menu>
						
					   <md-menu md-direction="button-5">
						<md-button md-menu-trigger>Маркетинг, реклама, PR</md-button>
						<md-menu-content>
						<md-menu-item>Руководитель интернет-проектов (терминалы)</md-menu-item>
						<md-menu-item>Менеджер по монетизации</md-menu-item>
						</md-menu-content>
						</md-menu>
					
					   <md-menu md-direction="button-6">
						<md-button md-menu-trigger>Административный персонал</md-button>
						<md-menu-content>
						<md-menu-item>Помощник руководителя</md-menu-item>
						</md-menu-content>
						</md-menu>			
						
					   <md-menu md-direction="button-7">
						<md-button md-menu-trigger>Информационные технологии, интернет, телеком</md-button>
						<md-menu-content>
						<md-menu-item>Разработчик JavaScript</md-menu-item>
						<md-menu-item>Консультант SAP CRM</md-menu-item>
						<md-menu-item>Специалист по тестированию</md-menu-item>
						<md-menu-item>Системный аналитик (web)</md-menu-item>						
						<md-menu-item>Разработчик C#</md-menu-item>
						<md-menu-item>Программист 1С</md-menu-item>
						<md-menu-item>Ведущий разработчик БД (Microsoft SQL)</md-menu-item>
						</md-menu-content>
						</md-menu>
						
						<md-menu md-direction="button-8">
						<md-button md-menu-trigger>Управление персоналом, тренинги</md-button>
						<md-menu-content>
						<md-menu-item>Тренинг-⁢менеджер</md-menu-item>
						</md-menu-content>
						</md-menu>		
						

                    </div>
                    <div>
                        <router-link to="/"> Take Me Home </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    name: 'Directions'
  }
</script>

<style lang="scss" scoped>
  .md-menu {
    margin: 24px;
  }
</style>