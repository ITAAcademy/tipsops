$(document).ready(function(){
    // this function change title at click button
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
        // AJAX call controller for show content and send id at click on button
        $.get('Content/Controllers/cont_lang_select_previews.php?', {id: title}, function(data){
                $('div.main_content').html(data);
                });

    });
});



