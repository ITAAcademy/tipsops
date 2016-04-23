/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
$(document).ready(function(){
    $('button#detailed_articles').click(function(){
        var title = this.name;
        $.get('content/controllers/con_lang_select_article.php?', {id: title}, function(data){
            $('div.main_content').html(data);
        });
    });
    $('button#all_arlicles').click(function(){
        var languege =$('h2#language').text();
           // console.log(languege);
        $.get('content/controllers/cont_lang_select_previews.php?', {id: languege}, function(data){
            $('div.main_content').html(data);
        });
    })
});
