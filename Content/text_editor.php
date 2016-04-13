<?php
session_start();
$id = next($_SESSION);
$id = current($_SESSION);
$id_name = (integer) $id;

include '../Content/Controllers/Models/connect/connect.php';

$sql = "SELECT firstName, secondName FROM user WHERE id='$id_name'";
$result = mysqli_query($conn, $sql);
$name = mysqli_num_rows($result);
$author = array();
if($name>0) {
    for ($i = 0; $i < $name; $i++) {
        $author[$i] = $result->fetch_array();
    }
}
?>
<form method="POST" action="Content/add_article.php" accept-charset="utf-8"  >
    <div class="form-group">
        <div class="col-lg-12">
            <label for="sel1">Оберіть категорію статтей:</label>
            <script>getHtml('Content/Controllers/controller_block_select.php');</script>

            <label for="inp1">Введіть назву статті:</label>
            <input type="text" class="form-control" id="inp1" name="inp1">
            </br>
            <label>Автора статті:</label> <?php echo $author[0][0];?>
            </br>
            <label for="inp1">Дата:</label> <?php echo date("d-m-Y");?>
            </br>
        </div>
        <p>
            <textarea id="editor1" name="editor1"></textarea>
            <script type="text/javascript">
                CKEDITOR.replace( 'editor1' );
            </script>
        </p>
        <p>
            <button type="submit" class="btn btn-primary" name = "add_article" >Зберегти статтю</button>
        </p>
    </div>
</form>