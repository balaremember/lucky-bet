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
    </aside>
</template>

<script>
    import axios from 'axios';

    export default
    {
        data()
        {
            return {
                categoriesTree: null,
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
                    });
            },

            initLine: function()
            {
                console.log('method initLine start:');
                console.log(this.categoriesTree);
                let currentLevelOfTree = [];
                for(let categoryName in this.categoriesTree)
                {
                    //console.log(categoryName);
                    currentLevelOfTree.push(categoryName);
                }
                console.log(currentLevelOfTree);
                this.currentLevelOfCategoriesTree = currentLevelOfTree;
            }
        }
    }
</script>