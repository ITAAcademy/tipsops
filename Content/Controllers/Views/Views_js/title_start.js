/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
$.get('Content/Controllers/controller_title.php?', {id: null}, function(data){
    $('h2#language').html(data);
});

