/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
$.get('content/controllers/controller_title.php?', {id: null}, function(data){
    $('h2#language').html(data);
});

