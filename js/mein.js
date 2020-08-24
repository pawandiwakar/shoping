

function faqControl(){
$('.head').on("click", function(){
var answerLi = $(this).next();
if($(this).attr('data-icon')=== "+"){

$(this).attr('data-icon',"-");
answerLi.slideDown();

}

else{
$(this).attr('data-icon',"+");
answerLi.slideToggle();

}
});
$('.head').even("click", function(){
var answerLi = $(this).next();
if($(this).attr('data-icon')=== "-"){

$(this).attr('data-icon',"+");
answerLi.slideUp();
}

else{
$(this).attr('data-icon',"-");
answerLi.slideToggle();

}


});








}





$(document).ready(function(){


faqControl()



});