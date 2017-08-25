<?php


class MyBbConnect
{

private $db_host     = 'localhost';
private $db_user     = 'root';
private $db_pass     = '';
private $db_database = 'db_shop';
private $mysqli;
private $query;
private $arr = array();

    public function __construct() {
         $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass,$this->db_database);
    }

    public function query($str){
        $this->query =$this->mysqli->query($str);
        return $this->query;
    }
    public function Get_All_Products_as_DIV(){
        $this->query = $this->mysqli->query("SELECT * FROM `products`");


        foreach( $this->query as $k=>$v)
        {

            echo ('

                 <div class="product">




                    <img src="'.$v['image'].'" alt="">
                    <br>
                    <div>
                     <samp> '."Color ".$v['title'].' </samp><br>
                    <button id="addCart"><img src="images/icon/cart.png" alt="">

                    '." $".$v['price'].'
                    </div>


                 </div>


            ');

        }
        return $this->query;
    }

    public function Check_users($str){
        $this->query = $this->mysqli->query("SELECT * FROM `users`");
         $i =0;

        foreach( $this->query as $k=>$v)
        {
            if($v["email"] == $str)
            {
              $i++;
            }
        }
        if($i==0)
        {
            return true;
        }
         else return false;

    }

    public function set_new_price($id, $price){
        $this->mysqli->query("UPDATE `products` SET `price` = $price WHERE `products`.`product_id` = $id;");
    }

    public function set_new_product($title,$price,$imgName){
        $this->mysqli->query("INSERT INTO `products` (`product_id`, `title`, `price`, `image`)
                                          VALUES (NULL, $title,$price, 'images/'+$imgName+'.png')");
    }

   public function add_user($email,$pass,$address,$full_name){
       $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
        $this->mysqli->query("INSERT INTO `users` (`id`, `email`, `pass`, `address`, `full_name`) VALUES (NULL, '$email', '$hash_pass', '$address', '$full_name');");//NULL, $email, $pass,$pass, $full_name
    }
}





?>



