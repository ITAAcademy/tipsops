/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */

function PressEnter(your_text, your_event) {
    if(your_text != "" && your_event.keyCode == 13) {
        var emty = "Результати пошуку";
        $('h2#language').text(emty);
        $.get('content/controllers/con_route_search.php', {key: your_text}, function (data) {
            $('div.main_content').html(data);
        });
    }
};


$(document).ready(function(){
   $('button#button_search').click(function(){
       var text = $('input#search').val();
       var emty = "Результати пошуку";
       $('h2#language').text(emty);
       $.get('content/controllers/con_route_search.php', {key: text}, function(data){
           $('div.main_content').html(data);
       });
   });
});
