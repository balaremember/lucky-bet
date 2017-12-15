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
                this.currentLevelOfCategoriesTree = [];
                this.currentPath = '';
                this.firstLevelOfCategoriesTree = [];
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
                if (this.currentLevelOfCategoriesTree === this.firstLevelOfCategoriesTree)
                {
                    this.initLine();
                }
                let categoryName = this.getCategoryNameByClick(event);
                if (categoryName === 'Назад')
                {
                    this.moveToPreviousLevel();
                }
                else
                {
                    this.buildCurrentPath(categoryName);
                    this.moveToNextLevel(categoryName);
                }
                if (this.firstLevelOfCategoriesTree !== this.currentLevelOfCategoriesTree)
                {
                    this.addBack();
                }
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
                    //console.log('categoryName:');
                    //console.log(categoryName);
                    let pathAsArray = this.getPathFromTreeAsArray();
                    let keys = pathAsArray.slice(0);
                    //console.log('KEYS:');
                    //console.log(keys);
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
            },

            addBack: function ()
            {
                if (this.currentLevelOfCategoriesTree !== this.firstLevelOfCategoriesTree
                    && this.currentLevelOfCategoriesTree[0] !== 'Назад')
                {
                    this.currentLevelOfCategoriesTree.unshift('Назад');
                }
            },

            moveToPreviousLevel: function ()
            {
                console.log('START moveToPreviousLevel:');
                this.deleteLastVertexFromPath();
                let pathAsArray = this.getPathFromTreeAsArray();
                console.log('pathAsArray: <<<');
                console.log(pathAsArray);
                let keys = pathAsArray.slice(0);
                console.log('KEYS: <<<');
                console.log(keys);
                let key;
                let temp = this.categoriesTree;
                if (keys.length !== 0)
                {
                    this.currentLevelOfCategoriesTree = this.firstLevelOfCategoriesTree;
                }
                else // поставить FALSE если по первому клику "Назад" хотим вернуться в самое начало
                {
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
            },

            deleteLastVertexFromPath: function ()
            {
                console.log('START deleteLastVertexFromPath():');
                if (/[/]/.test(this.currentPath.toString()))
                {
                    //console.log('deleteLastVertexFromPath:');
                    let currentPath = this.currentPath.toString();
                    //console.log('было:');
                    //console.log(this.currentPath);
                    currentPath = currentPath.replace(/[/][\u0400-\u04FF|\w| ]+$/, '');
                    this.currentPath = currentPath;
                    //console.log('стало:');
                    //console.log(currentPath);
                }
                else
                {
                    this.currentPath = '';
                }
            }
        }
    }
</script>