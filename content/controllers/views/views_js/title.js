/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
$(document).ready(function(){
    // this function change title at click button
    $('button#button').click(function(){
        var title = this.name;
        $('h2#language').text(title);
        var call_url = 'content/controllers/controller_get_articles.php?action=' + title;
        //$.ajax({
        //    type: 'POST',
        //    url: call_url,
        //    success: function(DataResponse){
        //        $('div.main_content').html(DataResponse);
        //    }
        //})
        // AJAX call controller for show content and send id at click on button
        var empty = "";
        $('input#search').val(empty);
        $.get('content/controllers/cont_lang_select_previews.php?', {id: title}, function(data){
				window.location.hash=title;
                $('div.main_content').html(data);
                });

    });
});



