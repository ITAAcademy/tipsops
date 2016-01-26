<?php
 
    function Login($username, $remember, $password)
    {
        //mane mast not will be empty string
        if($username == '' || is_numeric($username) == true)
        {
          return false;  
        }
        include('select_user.php');
        //Remember name in session
        //$_SESSION['username']=$username;
        if($username==$user_db && $password==$pawd_db)
        {
           $_SESSION['username'] = $user_db; 
        }
        
       
        
        //aslo and in cookie, if user want remember her(during week)
        if($remember)
        {
            setcookie('username', $username, time() + 3600 * 24 * 7);
        }
           echo
    "
       <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
      ";
        return true;    //autorization is successful
    }





    $enter_site =false;
   
    //IF array POST no empty, thus, procession send form's
    if( isset($_SESSION['username']))
        {
           $enter_site=true; 
        }
        else{
                    if(count($_POST)>0)
            $enter_site = Login($_POST['username'], $_POST['remeber']=='on', $_POST['password']);
                }
            
            //show users and additional information

                echo '

                <form class="form-horizontal" role="form" id="log_form" name="log_form">
                `<h5 align="center"><b>Увійти на сайт</b></h5>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="log_login">Логін:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="log_login" name="log_login" placeholder="Введіть логін">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="log_pwd">Пароль:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="log_pwd" name="log_pwd" placeholder="Введіть пароль">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label><input type="checkbox" id="log_check" name="log_check">Запам&#8217;ятати мене </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-success">Увійти</button>
                      <button type="button" class="btn btn-info" id="log_reg_button">Зареєструватися</button>
                    </div>
                  </div>
                </form>
                ';
                 




?>