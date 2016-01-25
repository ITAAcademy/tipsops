$(document).ready(function(){

   $('button#button_search').click(function(){
       var text = $('input#search').text();
       console.log(text);
       //$.get('Content/Controllers/con_route_search.php', {key: text} )
   });
});