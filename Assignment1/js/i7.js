$(function(){
  $(".increment").click(function(){
    var count = parseInt($("~ .count", this).text());
    
    if($(this).hasClass("up")) {
      var count = count + 1;
        if(count>20){
            window.location = "i8.html";
        }
      
       $("~ .count", this).text(count);
    } else {
      var count = count - 1;
       $("~ .count", this).text(count);
        if(count<0){
            window.location = "http://s2.quickmeme.com/img/5c/5ced9b8639743baa448fdbd0153a182327f884e5ea2a2491e06c334a9bda078c.jpg";
        }
    }
    
    $(this).parent().addClass("bump");
    
    setTimeout(function(){
      $(this).parent().removeClass("bump");    
    }, 400);
  });
});
