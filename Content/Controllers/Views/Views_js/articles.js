$(document).ready(function(){
    $('button#detailed_articles').click(function(){
        var title = this.name;
        $.get('Content/Controllers/con_lang_select_article.php?', {id: title}, function(data){
            $('div.main_content').html(data);
        });
    });
    $('button#all_arlicles').click(function(){
        var languege =$('h2#language').text();
<<<<<<< HEAD
console.log(languege);
=======
>>>>>>> master
           // console.log(languege);
        $.get('Content/Controllers/cont_lang_select_previews.php?', {id: languege}, function(data){
            $('div.main_content').html(data);
        });
    })
<<<<<<< HEAD
});
=======
});
>>>>>>> master
