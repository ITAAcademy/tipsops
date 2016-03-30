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
        <a href="../index.html"><img src="../template/images/Logo_bigUA.png" style="width:150px;height:45px;"></a>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>№</th>
                    <th>Тип</th>
                    <th></th>
                </tr>
                <?php
                    $i = 1;
                    foreach($articles as $a):?>
                    <tr>
                        <th><?= $i ?></th>
                        <th><a href="../admin/views/articles_admin.php"><?=$a['title']?></a></th>
                        <th>
                            <a href="../admin/index.php?action=delete&id=<?=$a['id']?>">Видалити</a>
                        </th>
                    </tr>
                <?php $i++; endforeach ?>
            </table>
            <div><a href="../admin/index.php?action=add">Добавити новий тип</a></div>
            <div><a href="../../tipsops/index.html">Повернутись на головну сторінку</a></div>
        </div>
        <footer>
            <p>Tipsops<br>Copyright &copy; 2016</p>
        </footer>
    </div>
    </body>
    </html>