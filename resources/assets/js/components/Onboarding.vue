<!--TODO: Растянуть фото внутри слайдера на все окно-->
<template>
    <div id="sliderImg"></div>
</template>

<script>

</script>

<style>
    #sliderImg
    {
        margin-left: 20vw;
        height: 40vh;
        width: 60vw;
        box-shadow: 1px 2px 5px #444;
        /*-webkit-animation:slider-animation 3s infinite;*/ /* Chrome, Safari, Opera */
        animation:slider-animation 36s infinite;
        background-size: 100%;        
    }
    @-webkit-keyframes slider-animation
    {
        0%   {background:url('/images/skrudzh.jpg') no-repeat; }
        10%  {background:url('/images/skrudzh.jpg')no-repeat; }
        20%  {background:url('/images/skrudzh.jpg')no-repeat; }
        30%  {background:url('/images/skrudzh.jpg')|no-repeat; }
        40%  {background:url('/images/mnogo_deneg.jpg')no-repeat; }
        50%  {background:url('/images/mnogo_deneg.jpg')no-repeat; }
        60%  {background:url('/images/mnogo_deneg.jpg')no-repeat; }
        70%  {background:url('/images/devushka_v_krasnom.jpg')no-repeat; }
        80%  {background:url('/images/devushka_v_krasnom.jpg')no-repeat; }
        90%  {background:url('/images/devushka_v_krasnom.jpg')no-repeat; }
        100% {background:url('/images/devushka_v_krasnom.jpg')no-repeat; }
    }
</style>