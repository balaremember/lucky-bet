<template>
    <aside id="left_sidebar">
        <div id="line">
            <p>Линия</p>
        </div>
        <!--ВСЕ ВИДЫ СТАВОК-->
        <ul>
            <li>Футбол</li>
            <li>Хоккей</li>
            <li>Теннис</li>
            <li>Бокс</li>
            <li>Баскетбол</li>
            <li>Авто-мото спорт</li>
            <li>Бадминтон</li>
            <li>Биатлон</li>
            <li>Гандбол</li>
            <li>Регби</li>
            <li>Хоккей с мячом</li>
            <li>Шахматы</li>
        </ul>
    </aside>
</template>

<script>
    import axios from 'axios';

    export default
    {
        data() {
            return {};
        },

        mounted() {
            if (typeof sessionStorage['categoriesTree'] === "undefined")
            {
                axios.get('http://lucky-bet.com/api/categories_tree')
                    .then(function (response)
                    {
                        //console.log(response);
                        console.log(response.data);
                        sessionStorage['categoriesTree'] = JSON.stringify(response.data);
                    })
                    .catch(function (error)
                    {
                        console.log(error);
                    });
            }
        }
    }
</script>