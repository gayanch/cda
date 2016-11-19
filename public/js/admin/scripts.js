/*
* Author : Asce4s
*
* */

$(document).ready(function(){

    $(".side-menu li.has-sub a").click(function(){
        var submenu=$(this).parent().find('.sub-menu');
        submenu.slideToggle();
    })

})