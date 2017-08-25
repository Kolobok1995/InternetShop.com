<?php
include_once("../My_PHP_Classes.php");


$bd = new MyBbConnect();
if( $_POST[reg_email]!= '') {


    if($bd->Check_users($_POST[reg_email])  )
    {
        if(mb_strlen($_POST[reg_email])>4 &&  mb_strlen($_POST[reg_email])<10){//проверяем количество символов в e-mail
            $bd->add_user($_POST[reg_email],$_POST[reg_password],$_POST[reg_address],$_POST[reg_FullName]);
            echo "ok";
        }
        else{
            echo "Ошибка в количестве символов";
        }

    }
    else{
        echo "имя занято";
    }


}
else{
    echo "имя не должно быть пустым";
}



?>
