<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1>
                        Oops!</h1>
                    <h2>
                        Ошибка 404 </h2>
                    <div>
                        Извините, страница не найдена!
                    </div>
                    <div class="error-actions">
                        <router-link id="error" to="/"> Take Me Home </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>
    .error-template {
        padding: 40px 15px;
        text-align: center;
    }

    .error-actions {
        margin-top:15px;
        margin-bottom:15px;
        margin-right:10px;
    }

</style>