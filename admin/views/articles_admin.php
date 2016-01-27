<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Tipsops</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h1>Tipsops</h1>
        <div>
            <table class="admin-table">
                <tr>
                    <th>№</th>
                    <th>Тип</th>
                    <th>Назва</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $a):?>
                    <tr>
                        <th><?=$a['id']?></th>
                        <th><?=$a['title_id']?></th>
                        <th><?=$a['title']?></th>
                        <th>
                            <a href="index.php?action=edit&id=<?=$a['id']?>">Редагувати</a>
                        </th>
                        <th>
                            <a href="index.php?action=delete&id=<?=$a['id']?>">Видалити</a>
                        </th>
                    </tr>
                <?php endforeach ?>
            </table>

        </div>
        <footer>
            <p>Tipsops<br>Copyright &copy; 2016</p>
        </footer>
    </div>
    </body>
    </html>