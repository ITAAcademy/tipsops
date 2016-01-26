<?php
include('registration_logic.php');   //logic registration and insert data


//if($_SESSION['username'] != '')
//{
//       echo
//        "
//          <meta http-equiv='Refresh' content='0; URL=/'>
//        ";
//
//}
//else{
    echo '

                  <form class="form-horizontal" role="form" id="reg_form" style="display:none">
                  <h5 align="center"><b>Зареєструватися</b></h5>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="reg_login">Логін:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="reg_login" name="reg_login" placeholder="Введіть логін">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="reg_email">Email:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="Введіть email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="reg_pwd">Пароль:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="reg_pwd" name="reg_pwd" placeholder="Введіть пароль">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="reg_pwd2">Пароль:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="reg_pwd2" name="reg_pwd2" placeholder="Повторно введіть пароль">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="button" class="btn btn-success">Зареєструватися</button>
                     <button type="button" class="btn btn-link" id="reg_to_log">Вводимо логін</button>
                    </div>
                  </div>
                </form>
    ';

//}
       
    

   

?>