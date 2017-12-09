<template>
    <aside id="left_sidebar">
        <div id="line">
            <p>Линия</p>
        </div>
        <!--ВСЕ ВИДЫ СТАВОК-->
        <ul>
            <li v-for="categoryName in currentLevelOfCategoriesTree">
                {{categoryName}}
            </li>
        </ul>
        <!--Mobile-->
        <div id="mobile">
            <div>
                <p>Мобильные приложения</p>
            </div>
            <div>
                <ul>
                    <!--iOS-->
                    <li class="mobile">
                        <md-button id="button_ios">
                            <md-icon><i class="fa fa-apple" aria-hidden="true"></i></md-icon> iOS
                        </md-button>
                    </li>
                    <!--Android-->
                    <li class="mobile">
                        <md-button id="button_android">
                            <md-icon><i class="fa fa-android" aria-hidden="true"></i></md-icon> Anroid
                        </md-button>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</template>

<script>
    import axios from 'axios';

    export default
    {
        data()
        {
            return {
                categoriesTree: [],
                currentLevelOfCategoriesTree: []
            };
        },

        mounted()
        {
            this.getCategoriesTree();
        },

        methods: {
            getCategoriesTree: function ()
            {
                axios.get('http://lucky-bet.com/api/categories_tree')
                    .then((response) => {
                        this.categoriesTree = response.data;
                        console.log('Получаем дерево категорий:');
                        console.log(this.categoriesTree);
                        this.initLine();
                    })
                    .catch((error) => {
                        console.log(error);
                        alert('Ошибка при загрузки категорий событий.');
                    });
            },

            initLine: function()
            {
                //console.log('method initLine start:');
                //console.log(this.categoriesTree);
                let currentLevelOfTree = [];
                for(let categoryName in this.categoriesTree)
                {
                    //console.log(categoryName);
                    currentLevelOfTree.push(categoryName);
                }
                console.log('Категории первого уровня');
                console.log(currentLevelOfTree);
                this.currentLevelOfCategoriesTree = currentLevelOfTree;
            }
        }
    }
</script>