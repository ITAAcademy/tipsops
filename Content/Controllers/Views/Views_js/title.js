$(document).ready(function(){
    $('button#button').click(function(){
        var title = this.name;
        $('h2#language').text(title);
        var call_url = 'Content/Controllers/controller_get_articles.php?action=' + title;
        //$.ajax({
        //    type: 'POST',
        //    url: call_url,
        //    success: function(DataResponse){
        //        $('div.main_content').html(DataResponse);
        //    }
        //})
        $.get('Content/Controllers/controller_get_articles.php?', {id: title}, function(data){
                $('div.main_content').html(data);
                });

    });
});


