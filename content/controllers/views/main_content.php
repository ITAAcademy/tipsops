<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
function show__content($title, $date, $author, $revisions, $articles)
{

//    foreach($articles as $art_){
    echo"<button  type='button' id='all_arlicles' name='$title' class='btn btn-default btm-sm'>Показати всі статті</button>
    <h3 class='title'>$title</h3>
     <div class='data_article'>
        <span class='glyphicon glyphicon-time'></span><font-text>&nbsp; Дата: $date &nbsp;</font-text>
        <span class='glyphicon glyphicon-user'></span><font-text>&nbsp; Автор: $author &nbsp;</font-text>
        <span class='glyphicon glyphicon-eye-open'></span><font-text>&nbsp; Переглядів: $revisions &nbsp;</font-text>
        <button id='CopyURL' name='CopyURL' class='btn btn-default btm-sm'
        data-clipboard-text='";echo"http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];echo"'>Копіювання URL</button>
     </div>
   <div class='article'>$articles</div>
   <button  type='button' id='all_arlicles' name='$title' class='btn btn-default btm-sm'>Показати всі статті</button>
   <hr/>
   ";
//    }

}

function show_new_article($title, $date, $author, $articles)
{

//    foreach($articles as $art_){
    echo"<h3 class='title'>$title</h3>
     <div class='data_article'>
        <span class='glyphicon glyphicon-time'></span><font-text>&nbsp; Дата: $date &nbsp;</font-text>
        <span class='glyphicon glyphicon-user'></span><font-text>&nbsp; Автор: $author &nbsp;</font-text>
     </div>
   <div class='article'>$articles</div>
   <hr/>";
//    }

}
function ShowPreviewArticle($title, $preview_article, $id)
{
    $preview_article .= "...";
    echo"<h3 class='title' id='title_articles'>$title</h3>
         <div class='preview_article'>$preview_article</div>
         <button type='button' name='$id' class='btn btn-default btn-sm' id='detailed_articles'>Детальніше</button>
         <hr>
    ";
}

function ShowContentSearch($title, $date, $author, $revisions, $articles)
{
    echo"
    <h3 class='title'>$title</h3>
     <div class='data_article'>
        <span class='glyphicon glyphicon-time'></span><font-text>&nbsp; Дата: $date &nbsp;</font-text>
        <span class='glyphicon glyphicon-user'></span><font-text>&nbsp; Автор: $author &nbsp;</font-text>
        <span class='glyphicon glyphicon-eye-open'></span><font-text>&nbsp; Переглядів: $revisions &nbsp;</font-text>
        <button  id='CopyURL' name='CopyURL' class='btn btn-default btm-sm'
        data-clipboard-text='";echo"http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];echo"'>Копіювання URL</button>
     </div>
   <div class='article'>$articles</div>
   <hr/>
   ";
}
function PrepareContentSearch($title, $date, $author, $articles) {
    $result = "
    <h3 class='title'>$title</h3>
     <div class='data_article'>
        <span class='glyphicon glyphicon-time'></span><font-text>&nbsp; Дата: $date &nbsp;</font-text>
        <span class='glyphicon glyphicon-user'></span><font-text>&nbsp; Автор: $author &nbsp;</font-text>
	</div>
   <div class='article'>$articles</div>
   <hr/>
   ";
    return $result;
}

?>