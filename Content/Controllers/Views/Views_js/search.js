$(document).ready(function(){

   $('button#button_search').click(function(){
       var text = $('input#search').val();
       var emty = "Результати пошуку";
       $('h2#language').text(emty);
       $.get('Content/Controllers/con_route_search.php', {key: text}, function(data){
           $('div.main_content').html(data);
       });
   });
});