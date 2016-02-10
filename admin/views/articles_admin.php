<?php
/**
 * User: Khupchenko Oleksander
 */
require_once("../../Content/Controllers/Models/connect/connect.php");
require_once("../models/articles.php");
$articles = articles_all($conn);
?>
<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Tipsops</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h1>Tipsops</h1>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>№</th>
                    <th>Назва</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                $i = 1;
                foreach($articles as $a):?>
    <tr>
        <th><?= $i; ?></th>
        <th><a><?=$a['title']?></a></th>
        <th>
            <a href="index.php?action=edit&id=<?=$a['id']?>">Редагувати</a>
        </th>
        <th>
            <a href="../controllers_admin.php?action=delete_article&id=<?=$a['id']?>">Видалити</a>
        </th>
    </tr>
<?php $i++; endforeach ?>
</table>
</div>
<div><a href="../index.php">Назад</a></div>
<footer>
    <p>Tipsops<br>Copyright &copy; 2016</p>
</footer>
</div>
</body>
</html>