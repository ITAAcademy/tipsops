<?php

include('../Content/Controllers/Models/connect/connect.php'); //include to model data base
function SendOnMail($form_user, $form_email, $form_password) // html view send registred user's on mail
    {
        $to="$form_email";
        $subject='Реєстрація';
       
        $headers .= "MIME-Version: 1.0\r\n";

        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        
        $message ='<div  style="width:600px; padding: 15px 10px 10px 10px;">';
        $message .='<div style=" background: #00589E; font-size: 16px;	font-family: Arial,sans-serif; padding: 8px;" >';
        $message .=     '<font style="color: white;" >Доброго дня,'."$form_user".'</font>';
        $message .='</div>';
        $message .='<div style="background: #00589E; font-size: 20px; font-family: Arial,sans-serif; color: white; padding: 8px;">';
        $message .=     'Вітаємо з реєстрацією на <span >
						<a style="color: white;"  href="http://www.zazy2.pe.hu" target="_blank">www.zazy2.pe.hu</a></span>';
        $message .='</div></br>';
        $message .='<table style="padding: 4px;">
							<tr>
								<td >Ваш логін:</td>
								<td>'."$form_user".'</td>
							</tr>
							<tr>
								<tr><td >Ваш пароль:</td>
								<td>'."$form_password".'</td>
							</tr>
						</table>';
        $message .='<font style="padding: 3px;  font-size: 16px;	font-family: Arial,sans-serif;">
                        Ви отримали це повідомлення тому, що ваш e-mail адресса була зареєстрована на сайті
                    </font>';
        $message .='<div style="background: #00589E; font-size: 16px;	font-family: Arial,sans-serif; padding: 8px;">
						<font style="color: white;">З найкращими побажаннями адміністрація сайта</font> 
						<a href="http://www.zazy2.pe.hu" target="_blank">www.zazy2.pe.hu</a>       
						</div>';
        $message .= '</div>';        
        
         mail($to, $subject, $message, $headers);   // html view send registred user's on mail
    }


    $form_user=$_POST["username_reg"];
    $form_email=$_POST["email"];
    $form_password=$_POST["password"];
    $form_password2=$_POST["password2"];


    
    if(empty($form_user)==false && empty($form_email)==false && empty($form_password)==false && empty($form_password2)==false )
        {
           if($form_password == $form_password2)
            {
               $_SESSION["username"]=$form_user; //if registration is saccessful , $_session == username
               include('add_new_user.php');

               SendOnMail($form_user, $form_email, $form_password);
            }
        }
    
    
?>