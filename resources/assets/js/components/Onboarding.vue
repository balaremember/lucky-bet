<template>
    <div id="sliderImg"></div>
</template>

<script>

</script>

<style>
    #sliderImg{
        margin: auto;         /* https://www.w3schools.com/cssref/css3_pr_animation-keyframes.asp  */
        margin-top: 5%;
        height:300px;
        width:600px;
        box-shadow: 1px 2px 5px #444;
        -webkit-animation:slider-animation 5s infinite; /* Chrome, Safari, Opera */
        animation:slider-animation 15s infinite;
    }
    @-webkit-keyframes slider-animation
    {
        0%   {background:url('https://ru.inettools.net/upload/REsgpU70jNAgaEedEAdy94y9OrTiYtcPiN71cyFE/1.Uod.jpg')}
        15%  {background:url('https://srv4.imgonline.com.ua/result_img/imgonline-com-ua-Resize-rsqj3WHxzAlfev.jpg')}
        30%  {background:url('https://srv4.imgonline.com.ua/result_img/imgonline-com-ua-Resize-GlwrQ5yZzIidHv5.jpg')}
        50%  {background:url('https://ru.inettools.net/upload/REsgpU70jNAgaEedEAdy94y9OrTiYtcPiN71cyFE/1.Uod.jpg')}
        65%   {background:url('https://ru.inettools.net/upload/REsgpU70jNAgaEedEAdy94y9OrTiYtcPiN71cyFE/1.Uod.jpg')}
        80%  {background:url('https://srv4.imgonline.com.ua/result_img/imgonline-com-ua-Resize-rsqj3WHxzAlfev.jpg')}
        100%  {background:url('https://ru.inettools.net/upload/REsgpU70jNAgaEedEAdy94y9OrTiYtcPiN71cyFE/1.Uod.jpg')}
    }
</style>