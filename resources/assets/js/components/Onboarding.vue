<template>
    <div id="sliderImg"></div>
</template>
<style>
    #sliderImg
    {
        margin-left: 20vw;
        height: 50vh;
        width: 60vw;
        box-shadow: 1px 2px 5px #444;
        animation: slider-animation 36s infinite;
    }
    @-webkit-keyframes slider-animation
    {
        0%   {background: url('/images/skrudzh.jpg') no-repeat; background-size: 100% 100%;}
        10%  {background: url('/images/skrudzh.jpg') no-repeat; background-size: 100% 100%;}
        20%  {background: url('/images/skrudzh.jpg') no-repeat; background-size: 100% 100%;}
        30%  {background: url('/images/skrudzh.jpg') no-repeat; background-size: 100% 100%;}
        40%  {background: url('/images/mnogo_deneg.jpg') no-repeat; background-size: 100% 100%;}
        50%  {background: url('/images/mnogo_deneg.jpg') no-repeat; background-size: 100% 100%;}
        60%  {background: url('/images/mnogo_deneg.jpg') no-repeat; background-size: 100% 100%;}
        70%  {background: url('/images/devushka_v_krasnom.jpg') no-repeat; background-size: 100% 100%;}
        80%  {background: url('/images/devushka_v_krasnom.jpg') no-repeat; background-size: 100% 100%;}
        90%  {background: url('/images/devushka_v_krasnom.jpg') no-repeat; background-size: 100% 100%;}
        100% {background: url('/images/devushka_v_krasnom.jpg') no-repeat; background-size: 100% 100%;}
    }
</style>