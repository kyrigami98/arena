
$(function () {

var heure = $("#heure").val();
console.log(heure);

   
        $("body").ready(function () {
           
           setInterval(
            $("#lune").animate({right: '40px'}, 500, function () {
                $("#lune").animate({right: '-30px'}, 700);
                $("#lune").animate({right: '20px'}, 1000);
                $("#lune").animate({right: '-10px'}, 1000);

  
            }) ,2000);

        });
        
          
        $("#lune").mouseover(function () {
            $("#lune").animate({right: '40px'}, 500, function () {
                $("#lune").animate({right: '-30px'}, 700);
 

  
            });

        });
        
           $("#lune").click(function () {
            $("#lune").animate({right: '-600px'}, 500, function () {
                 $("#lune").fadeIn();
            });

        });
    
    
});
