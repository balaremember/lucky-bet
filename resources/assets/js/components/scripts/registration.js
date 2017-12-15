/**
 * Created by ruslantagirov on 18.11.2017.
 */
import axios from 'axios';

export default {

    data() {
        return {
            email: '',
            password: '',
            password_repeat: '',
            surname: '',
            name: '',
            patronymic: '',
            sex: '',
            birthday: '',
            country: '',
            city: '',
            telephone: '',
            consent: '',
            mailValid: false,
            passwordValid: false,
            passwordRepeatValid: false,
            passwordsMatch: false,
            invalidMessage_1: 'Необходимо заполнить обязательные поля перед тем как продолжить.',
            surnameValid: false,
            nameValid: false,
            birthdayValid: false,
            invalidMessage_2: 'Необходимо заполнить обязательные поля перед тем как продолжить.',
            countryValid: false,
            cityValid: false,
            telephoneValid: false,
            invalidMessage_3: 'Необходимо заполнить обязательные поля перед тем как продолжить.',
            consentValid: false,
            invalidMessage_4: 'Необходимо изучить текст соглашения и принять его условия.'
        };
    },

    watch:
        {
            /*  TODO Проверить не используется ли эта почта уже*/
            email()
            {
                var emailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
                this.mailValid = emailRegex.test(this.email);
                /*Делаем проверку на соответствие шаблону регулярного выражения*/
                if (this.mailValid)
                {
                    this.invalidMessage_1 = '';
                }
                else
                {
                    this.invalidMessage_1 = 'Введен некорректный адресс электронной почты.';
                }
            },

            password()
            {
                var passwordRegex = /(?=^.{8,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                /*Пароль должен содержать хотя бы цифру, букву в верхнем и нижнем регистре. Длина пароля не может
                 быть меньше 8 и больше 32 символов.*/
                this.passwordValid = passwordRegex.test(this.password);
                /*Делаем проверку на соответствие шаблону регулярного выражения*/
                if (this.passwordValid)
                {
                    this.invalidMessage_1 = '';
                }
                else
                {
                    this.invalidMessage_1 = 'Пароль должен содержать хотя бы 1 цифру, букву в верхнем и нижнем ' +
                        'регистре. Длина пароля не может быть меньше 8 и больше 32 символов.';
                }
                /*Проверяем совпадают ли пароли*/
                if(this.password !== this.password_repeat)
                {
                    this.invalidMessage_1 += ' Пароли не совпадают.';
                    this.passwordsMatch = false;
                }
                else
                {
                    this.invalidMessage_1 = '';
                    this.passwordsMatch = true;
                }
            },

            password_repeat()
            {
                var passwordRegex = /(?=^.{8,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                /*Пароль должен содержать хотя бы цифру, букву в верхнем и нижнем регистре. Длина пароля не может
                 быть меньше 8 и больше 32 символов.*/
                this.passwordRepeatValid = passwordRegex.test(this.password_repeat);
                /*Делаем проверку на соответствие шаблону регулярного выражения*/
                if (this.passwordRepeatValid)
                {
                    this.invalidMessage_1 = '';
                }
                else
                {
                    this.invalidMessage_1 = 'Пароль должен содержать хотя бы 1 цифру, букву в верхнем и нижнем ' +
                        'регистре. Длина пароля не может быть меньше 8 и больше 32 символов.';
                }
                /*Проверяем совпадают ли пароли*/
                if(this.password !== this.password_repeat)
                {
                    this.invalidMessage_1 += ' Пароли не совпадают.';
                    this.passwordsMatch = false;
                }
                else
                {
                    this.invalidMessage_1 = '';
                    this.passwordsMatch = true;
                }
            },

            surname()
            {
                var Regex = /[A-Za-zА-Яа-я]+[A-Za-zА-Яа-я ]*/;
                /*Фамилия может содержать только буквы русского и английского алфавитов в любом регистре и пробелы*/
                this.surnameValid = Regex.test(this.surname);
                /*Делаем проверку на соответствие шаблону регулярного выражения*/
                if (this.surnameValid)
                {
                    this.invalidMessage_2 = '';
                }
                else
                {
                    this.invalidMessage_2 = 'Фамилия может содержать только буквы русского и английского ' +
                        'алфавитов в любом регистре и пробелы.';
                }
            },

            name()
            {
                var Regex = /[A-Za-zА-Яа-я]+[A-Za-zА-Яа-я ]*/;
                /*Имя может содержать только буквы русского и английского алфавитов в любом регистре и пробелы*/
                this.nameValid = Regex.test(this.name);
                /*Делаем проверку на соответствие шаблону регулярного выражения*/
                if (this.nameValid)
                {
                    this.invalidMessage_2 = '';
                }
                else
                {
                    this.invalidMessage_2 = 'Имя может содержать только буквы русского и английского алфавитов ' +
                        'в любом регистре и пробелы.';
                }
            },

            birthday()
            {
                var now = new Date(); /*Дата сейчас*/
                var date = new Date(now.getFullYear() - 18, now.getMonth(), now.getDate()); /*Дата сейчас - 18 лет*/
                var birthdayAsDate = new Date(this.birthday); /*Сделали датой переменную полученную из формы*/
                /*Проверям что регистрирующийся 18+*/
                console.log(birthdayAsDate, date);
                var minDate = new Date(1920, 0, 1);
                if(birthdayAsDate <= date && birthdayAsDate >= minDate)
                {
                    this.invalidMessage_2 = '';
                    this.birthdayValid = true;
                }
                else
                {
                    this.invalidMessage_2 = 'Регистрация доступна только для совершенолетних.' +
                                            minDate.toDateString() + ' - ' + date.toDateString();
                    this.birthdayValid = false;
                }
            },

            country()
            {
                /*Проверяем что значение было выбрано*/
                if(this.country.length > 0)
                {
                    this.invalidMessage_3 = '';
                    this.countryValid = true;
                }
                else
                {
                    this.invalidMessage_3 = 'Выберите страну проживания.';
                    this.countryValid = false;
                }
            },

            city()
            {
                /*Проверяем что значение было введено*/
                if(this.city.length > 0)
                {
                    this.invalidMessage_3 = '';
                    this.cityValid = true;
                }
                else
                {
                    this.invalidMessage_3 = 'Введите город проживания.';
                    this.cityValid = false;
                }
            },

            telephone()
            {
                var telephoneRegex = /\d [(](\d){3}[)] (\d){3}[-](\d){2}[-](\d){2}/;
                this.telephoneValid = telephoneRegex.test(this.telephone);
                /*Проверяем что пользователь ввел номер до конца*/
                if(this.telephoneValid)
                {
                    this.invalidMessage_3 = '';
                    this.telephoneValid = true;
                }
                else
                {
                    this.invalidMessage_3 = 'Некорректный номер сотового телефона.';
                    this.telephoneValid = false;
                }
            },

            consent()
            {
                /*Проверяем галочку в чекбоксе*/
                if(this.consent)
                {
                    this.invalidMessage_4 = '';
                    this.consentValid = true;
                }
                else
                {
                    this.invalidMessage_4 = 'Необходимо изучить текст соглашения и принять его условия.';
                    this.consentValid = false;
                }
            }

        },

    methods: {
        signup() {
            axios.post('http://lucky-bet.com/api/user',
                {
                    email: this.email,
                    password: this.password,
                    surname: this.surname,
                    name: this.name,
                    patronymic: this.patronymic,
                    sex: this.sex,
                    birthday: this.birthday,
                    country: this.country,
                    city: this.city,
                    telephone: this.telephone
                },
                {
                    headers: {'X-Requested-With': 'XMLHttpRequest'}
                })
                .then(
                    (response) => {
                        console.log(response);

                        if(response.data.message === 'Successfully') {
                            this.$router.push('/login');
                        } else {
                            this.$router.push('/reg');
                        }
                    }
                )
                .catch(
                    (error) => console.log(error)
                );
        }
    }
}
