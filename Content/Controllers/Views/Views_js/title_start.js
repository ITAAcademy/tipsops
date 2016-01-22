$.get('Content/Controllers/controller_title.php?', {id: null}, function(data){
    $('h2#language').html(data);
});

