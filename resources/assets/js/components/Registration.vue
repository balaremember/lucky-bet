<template>
    <div class="registration_box">
        <router-view name="header"></router-view>
        <form>
            <md-stepper md-vertical @completed="signup">
                <!--1. Данные для инициализации-->
                <md-step md-label="Данные для инициализации в системе" md-button-back="Назад"
                         md-button-continue="Далее" :md-editable="true"
                         :md-error="!mailValid && !passwordValid && !passwordRepeatValid"
                         :md-continue="mailValid && passwordValid && passwordRepeatValid && passwordsMatch"
                         :md-message="invalidMessage_1">
                    <!--E-MAIL-->
                    <md-input-container md-clearable :class="{'md-input-invalid': !mailValid}">
                        <label>E-mail</label>
                        <md-input name="e-mail" type="email" v-model.trim="email" required autofocus></md-input>
                    </md-input-container>
                    <!--PASSWORD-->
                    <md-input-container md-clearable :class="{'md-input-invalid': !passwordValid}">
                        <label>Пароль</label>
                        <md-input name="password" type="password" required v-model.trim="password"></md-input>
                    </md-input-container>
                    <!--PASSWORD REPEAT-->
                    <md-input-container md-clearable :class="{'md-input-invalid': !passwordRepeatValid}">
                        <label>Повторите ваш пароль</label>
                        <md-input name="password_repeat" type="password" required
                                  v-model.trim="password_repeat"></md-input>
                    </md-input-container>
                </md-step>
                <!--2. Персональные данные-->
                <md-step md-label="Персональные данные" md-button-back="Назад" md-button-continue="Далее"
                         :md-editable="true"
                         :md-error="!surnameValid && !nameValid && !birthdayValid"
                         :md-continue="surnameValid && nameValid && birthdayValid" :md-message="invalidMessage_2">
                    <!--SURNAME-->
                    <md-input-container md-clearable :class="{'md-input-invalid': !surnameValid}">
                        <label>Фамилия</label>
                        <md-input name="surname" type="text" maxlength="40" v-model.trim="surname" required></md-input>
                    </md-input-container>
                    <!--NAME-->
                    <md-input-container md-clearable :class="{'md-input-invalid': !nameValid}">
                        <label>Имя</label>
                        <md-input name="surname" type="text" maxlength="40" v-model.trim="name" required></md-input>
                    </md-input-container>
                    <!--PATRONYMIC-->
                    <md-input-container md-clearable>
                        <label>Отчество</label>
                        <md-input name="patronymic" type="text" maxlength="40" v-model.trim="patronymic"></md-input>
                    </md-input-container>
                    <!--SEX-->
                    <div>
                        <md-radio v-model="sex" id="man" name="sex" md-value="man">Мужчина</md-radio>
                        <md-radio v-model="sex" id="woman" name="sex" md-value="woman">Женщина</md-radio>
                    </div>
                    <!--BIRTHDAY-->
                    <md-input-container :class="{'md-input-invalid': !birthdayValid}">
                        <label>Дата рождения</label>
                        <md-input id="birthday" name="birthday" type="date" min="1920-01-01"
                                  required v-model="birthday"></md-input>
                    </md-input-container>
                </md-step>
                <!--3. Контактные данные-->
                <md-step md-label="Контактные данные" md-button-back="Назад" md-button-continue="Далее"
                         :md-editable="true"
                         :md-error="!countryValid && !cityValid && !telephoneValid"
                         :md-continue="countryValid && cityValid && telephoneValid" :md-message="invalidMessage_3">
                    <!--COUNTRY-->
                    <div class="field-group">
                        <md-input-container>
                            <label for="country">Страна</label>
                            <md-select name="country" id="country" v-model="country"
                                       :class="{'md-input-invalid': !countryValid}" required>
                                <!--COUNTRY LIST-->
                                <md-option value="Russia">Россия</md-option>
                                <md-option value="Belarus">Беларусь</md-option>
                                <md-option value="Kazakhstan">Казахстан</md-option>
                                <md-option value="Georgia">Грузия</md-option>
                                <md-option value="Ukraine">Украина</md-option>
                                <md-option value="Azerbaidjan">Азербайджан</md-option>
                                <md-option value="Armenia">Армения</md-option>
                            </md-select>
                        </md-input-container>
                    </div>
                    <!--CITY-->
                    <md-input-container md-clearable :class="{'md-input-invalid': !cityValid}">
                        <label>Город</label>
                        <md-input name="city" type="text" maxlength="40" v-model="city" required></md-input>
                    </md-input-container>
                    <!--TELEPHONE-->
                    <md-input-container md-clearable :class="{'md-input-invalid': !telephoneValid}">
                        <label>Телефон</label>
                        <md-input name="text" type="tel" v-mask="'# (###) ###-##-##'" v-model="telephone"
                                  required></md-input>
                    </md-input-container>
                </md-step>
                <!--4. Ознакомление с правилами участия-->
                <md-step md-label="Правила участия" md-button-back="Назад" md-button-continue="Завершить"
                         :md-editable="true" :md-error="!consentValid" :md-continue="consentValid"
                         :md-message="invalidMessage_4">
                    <div>
                        <md-checkbox id="consent" name="consent" v-model="consent" required
                                     :class="{'md-input-invalid': !consentValid}">
                            Настоящим я подтверждаю и даю своё согласие на:
                        </md-checkbox>
                        <!--RULES OF ENGAGEMENT-->
                        <div class="rules_of_engagement">
                            <ul>
                                <li>
                                    подтверждаю достоверность указанных мной персональных данных. Согласно ст. 9
                                    Федерального закона Российской Федерации от 27 июля 2006 года № 152-ФЗ «О
                                    персональных данных», подтверждаю свое согласие на обработку ООО «ПМБК» (ИНН:
                                    7729607406, 115054, город Москва, 4-й Монетчиковский переулок, дом 7, телефон: 8 800
                                    555-4455) моих персональных данных, указанных при регистрации на сайте
                                    www.lucky-bet.com, в том числе моих биометрических персональных данных, для проверки
                                    соответствия внутренним требований ООО «ПМБК» (при условии, что их обработка
                                    осуществляется уполномоченным лицом, принявшим обязательства о сохранении
                                    конфиденциальности указанных сведений), а также с целью учета переводов
                                    интерактивных ставок букмекерских контор и с иными целями, не противоречащими
                                    действующему законодательству РФ. Предоставляю ООО «ПМБК» право осуществлять все
                                    действия (операции) с моими персональными данными, указанными мной, включая передачу
                                    их третьим лицам, а также сбор, запись, накопление, систематизацию, хранение,
                                    обновление, изменение, уточнение, извлечение, использование, передачу
                                    (распространение, предоставление, доступ), обезличивание, блокирование, удаление,
                                    уничтожение. ООО «ПМБК» вправе обрабатывать мои персональные данные, указанные мной,
                                    посредством внесения их в электронную базу данных, включения в списки (реестры) и
                                    отчетные формы. Согласие дается мною ООО «ПМБК» до истечения сроков хранения
                                    соответствующей информации или документов, содержащих вышеуказанную информацию,
                                    определяемых в соответствии с законодательством Российской Федерации/достижения
                                    целей обработки данных и может быть отозвано мною путем передачи в ООО «ПМБК»
                                    подписанного мною письменного уведомления не менее чем за 3 (три) месяца до момента
                                    отзыва согласия. ООО «ПМБК» обрабатывает персональные данные физических лиц в целях
                                    выполнения функций, возложенных на оператора персональных данных законодательством
                                    Российской Федерации. ООО «ПМБК» может продолжать обрабатывать персональные данные
                                    без согласия субъекта персональных данных, при наличии обязанностей ООО «ПМБК»,
                                    установленных законодательством Российской Федерации. Срок обработки персональных
                                    данных в таком случае продлевается до момента исполнения указанных обязанностей.
                                </li>
                                <li>
                                    даю согласие получать от ООО «ПМБК» сообщения, рекламные предложения и другую
                                    информацию через любые каналы коммуникации, включая почту, электронную почту, SMS –
                                    сообщения, телефон и иные средства связи;
                                </li>
                                <li>
                                    подтверждаю свое ознакомление и согласие с правилами приема ставок и выплаты
                                    выигрышей (правила азартных игр), установленными ООО «ПМБК»;
                                </li>
                                <li>
                                    даю согласие на передачу своих персональных данных, включая все способы обработки
                                    персональных данных, перечисленные в данном согласии в ЦУПИС (ООО НКО «Мобильная
                                    карта»): адрес: 191024, г. Санкт-Петербург, 2-я Советская ул., д. 27/2, лит. А, пом.
                                    58Н, 59Н; тел.: + 7 (812) 320-36-75; ИНН: 7835905228; Лицензия № 3522-К от
                                    31.03.2014, договор №БПА-01/2016 от 01.02.2016; претензии к ЦУПИС направляются для
                                    рассмотрения в ЦУПИС по вышеуказанному адресу в письменном виде или подается по
                                    электронной почте support@1cupis.ru и рассматривается в течение 30 (тридцати) дней;
                                    адрес места осуществления идентификации: 115054, город Москва, 4-й Монетчиковский
                                    переулок, дом 7;
                                </li>
                                <li>
                                    даю согласие, что ООО «ПМБК» не несет ответственность за деятельность платежных
                                    систем, платежных агентов и любых других операторов электронных платежей;
                                </li>
                                <li>
                                    подтверждаю, что не являюсь иностранным публичным должностным лицом, должностным
                                    лицом публичных международных организаций, а также лицом, замещающим (занимающим)
                                    государственные должности Российской Федерации, должности членов Совета директоров
                                    Центрального банка Российской Федерации, должности федеральной государственной
                                    службы, назначение на которые и освобождение от которых осуществляются Президентом
                                    Российской Федерации или Правительством Российской Федерации, должности в
                                    Центральном банке Российской Федерации, государственных корпорациях и иных
                                    организациях, созданных Российской Федерацией на основании федеральных законов,
                                    включенные в перечни должностей, определяемые Президентом Российской Федерации.
                                </li>
                            </ul>
                        </div>
                        <div>
                            подтверждаю свое ознакомление и согласие с условиями соглашения о выигрыше, заключаемого с
                            ООО «ПМБК» в рамках каждой интерактивной ставки и условиями Правил приема ставок и выплаты
                            выигрышей
                        </div>
                    </div>
                </md-step>
            </md-stepper>
        </form>
    </div>
</template>

<script src="./scripts/registration.js"></script>