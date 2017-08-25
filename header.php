<div class="header">
   <div class="reg-block">

       <form class="enter" action="">
           <label for="">E-mail:</label>
           <input type="text">
           <label for="">Password(<a href="">remember</a>):</label>
           <input type="password">
           <button>logIn</button>
           <button id="ButtonEnter" onclick="return false;">Registration</button>

       </form>

       <form class="register" method="post" action="reg/add_user.php" >
           <h3>Redistration</h3>
           <div class="reg_error">

           </div>

           <label  for="">E-mail:</label>
           <input id="reg_email" name="reg_email" placeholder="E-mail" type="text"><samp>не должно быть пустым</samp><br>
           <label for="">Password:</label>
           <input name="reg_password" placeholder="Password" type="password"><samp>от 3 до 14 символов</samp><br>
           <label for="">Password repeat:</label>
           <input name="reg_password_repeat" placeholder="Password repeat" type="password"><samp>не совпадают</samp><br>
           <label for="">Full Name:</label>
           <input name="reg_FullName" placeholder="FullName" type="text"><samp>на чье имя отправить</samp><br>
           <label for="">Address:</label>
           <input name="reg_address" placeholder="Address" type="text"><samp>адрес получателя</samp><br>



           <button id="Button_submit_userREG" onclick="return false;">Registration</button>
           <button id="CloseButton" onclick="return false;">logIn</button>

           <p class="reg_message"></p>


       </form>


   </div>
    <div class="info">

    </div>

    <div class="cart">
        <img src="images/icon/cart.png">
    </div>
</div>
