<?php
session_start();
$id = next($_SESSION);
$id = current($_SESSION);
$id_admin = (integer)$id;

include '../content/controllers/models/connect/connect.php';
$result_id = "SELECT id FROM user WHERE id='$id'";
$id_students = mysqli_query($conn, $result_id);

$result = "SELECT id_user FROM user_admin WHERE id_user='$id_admin'";
$id_admin = mysqli_query($conn, $result);

$homeURL = mysqli_query($conn, "SELECT value FROM config WHERE param='baseUrl'");
$homeURL = mysqli_fetch_assoc($homeURL);

$fontStyle = $homeURL['value'] . '/font/myriadpro/regular';
?>

<style>
    @font-face {
        font-family: "MyriadPro";
        font-style: normal;
        font-weight: normal;
        src: url("<?=$fontStyle; ?>.eot?#iefix") format("embedded-opentype"), url("<?=$fontStyle; ?>.woff") format("woff"), url("<?=$fontStyle; ?>.ttf") format("truetype"), url("<?=$fontStyle; ?>.otf#helveticaneuecyrbold") format("svg");
    }
</style>

<nav class="mainHeader">
    <div class="container">
        <div id="logo_img">
            <a href="<?= $homeURL['value']; ?>/tips/">
                <img id="logo" src="template/images/Logo_bigUA.png" alt="logo"/>
            </a>
        </div>
        <button style="float: right" type="button" class="navbar-toggle" data-toggle="dropdown">
            <img src="http://qa.intita.com/images/mainpage/hamburger.png">
        </button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li>
                <?php
//                if (mysqli_num_rows($id_students) > 0) {
                    print_r('<a href="text_editor.php" >Добавити нову статтю</a>');
//                }
                ?>
            </li>
            <li>
                <a href="<?= $homeURL['value'] ?>/aboutus">Про нас</a>
            </li>
            <li>
                <a href="contact.html">Контакти</a>
            </li>
            <li>
                <?php
//                if ((mysqli_num_rows($id_admin) > 0)) {
                    print_r('<a href="admin/index.php">Панель адміністратора</a>');
//                }
                ?>
            </li>
        </ul>
<!--        <button style="float: right" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuList">-->
<!--            <img src="http://qa.intita.com/images/mainpage/hamburger.png">-->
<!--        </button>-->
        <div id="menuList" class="collapse navbar-collapse">
            <ul class="navigation">
                <li>
                    <?php
//                    if(mysqli_num_rows($id_students)>0){
                    print_r('<a href="text_editor.php" >Добавити нову статтю</a>');
//                    }
                    ?>
                </li>
                <li>
                    <a href="<?= $homeURL['value'] ?>/aboutus">Про нас</a>
                </li>
                <li>
                    <a href="contact.html">Контакти</a>
                </li>
                <li>
                    <?php
//                    if((mysqli_num_rows($id_admin) > 0)){
                    print_r('<a href="admin/index.php">Панель адміністратора</a>');
//                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div style="height: 5px; width: auto"></div>