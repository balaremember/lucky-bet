<template>
    <aside id="left_sidebar">
        <div id="line">
            <p>Линия</p>
        </div>
        <!--ВСЕ ВИДЫ СТАВОК-->
        <ul>
            <li v-for="categoryName in currentLevelOfCategoriesTree" v-on:click="goToTree"
                v-model="currentLevelOfCategoriesTree">
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
                currentLevelOfCategoriesTree: [],
                currentPath: '', //текущий путь в дереве категорий
                firstLevelOfCategoriesTree: []
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
                        //console.log('Получаем дерево категорий:');
                        //console.log(this.categoriesTree);
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
                //console.log('Категории первого уровня');
                //console.log(currentLevelOfTree);
                this.currentLevelOfCategoriesTree = currentLevelOfTree;
                this.firstLevelOfCategoriesTree = currentLevelOfTree;
            },

            goToTree: function (event)
            {
                let categoryName = this.getCategoryNameByClick(event);
                this.buildCurrentPath(categoryName);
                this.moveToNextLevel(categoryName);
            },

            getCategoryNameByClick: function (_event)
            {
                let el = _event.currentTarget;
                let categoryName = el.textContent.trim();
                console.log(categoryName);
                return categoryName;
            },

            buildCurrentPath: function (categoryName)
            {
                if (this.currentPath.length > 0)
                {
                    this.currentPath += ('/' + categoryName);
                }
                else
                {
                    this.currentPath = categoryName;
                }
            },

            moveToNextLevel: function (categoryName)
            {
                console.log(this.currentLevelOfCategoriesTree);
                if (this.currentLevelOfCategoriesTree !== [])
                {
                    //TODO: need do transition in tree
                    //this.currentLevelOfCategoriesTree = this.categoriesTree[categoryName];
                    console.log('categoryName:');
                    console.log(categoryName);
                    let pathAsArray = this.getPathFromTreeAsArray();
                    let keys = pathAsArray.slice(0);
                    console.log('KEYS:');
                    console.log(keys);
                    let key;
                    let temp = this.categoriesTree;
                    while (keys.length > 0)
                    {
                        key = keys.shift();
                        temp = temp[key];
                        /*console.log('current temp:');
                        console.log(temp);*/
                    }
                    console.log('categories of new lvl:');
                    console.log(Object.keys(temp));
                    this.currentLevelOfCategoriesTree = Object.keys(temp);
                }
                else
                {
                      //last category. need post request
                    console.log('current Level = [] (else block)');
                }
            },

            getPathFromTreeAsArray: function ()
            {
                return this.currentPath.split('/');
            }
        }
    }
</script>