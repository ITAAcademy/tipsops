<?php
function show__content($title, $date, $author, $revisions, $articles)
{

//    foreach($articles as $art_){
    echo"<button  type='button' id='all_arlicles' name='$title' class='btn btn-default btm-sm'>Показати всі статті</button>
    <h3 class='title'>$title</h3>
     <div class='data_article'>
        <span class='glyphicon glyphicon-time'></span><font-text>&nbsp; Дата: $date &nbsp;</font-text>
        <span class='glyphicon glyphicon-user'></span><font-text>&nbsp; Автор: $author &nbsp;</font-text>
        <span class='glyphicon glyphicon-eye-open'></span><font-text>&nbsp; Переглядів: $revisions &nbsp;</font-text>
     </div>
   <div class='article'>$articles</div>
   <button  type='button' id='all_arlicles' name='$title' class='btn btn-default btm-sm'>Показати всі статті</button>";
//    }

}

function ShowPreviewArticle($title, $preview_article, $id)
{
    echo"<h3 class='title' id='title_articles'>$title</h3>
         <div class='preview_article'>$preview_article</div>
         <button type='button' name='$id' class='btn btn-default btn-sm' id='detailed_articles'>Детальніше</button>
         <hr>
    ";
}
?>