<?php
session_start();
$id = next($_SESSION);
$id = current($_SESSION);
$id_admin = (integer) $id;

include '../Content/Controllers/Models/connect/connect.php';

$result = "SELECT id_user FROM user_admin WHERE id_user='$id_admin'";
$id_admin = mysqli_query($conn, $result);

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu_backround">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="template/images/Logo_bigUA.png" style="width:150px;height:45px;"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li style="top: 15px;">
                    <?php
                    if(($id)){
                        print_r ('<a href="text_editor.html" >Добавити нову статтю</a>');
                    }
                    ?>
                </li>
                <li style="top: 15px;">
                    <a href="about.html">Про нас</a>
                </li>
                <li style="top: 15px;">
                    <a href="contact.html">Контакти</a>
                </li>
                <li style="top: 15px;">
                    <?php
                    if((mysqli_num_rows($id_admin) > 0)){
                        print_r ('<a href="admin/index.php">Панель адміністратора</a>');
                    }
                    ?>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>