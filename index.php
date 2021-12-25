<form action="signuphelp.php" method="post" class="body">
            <style>
        h2{
            font-family:Arial, sans-serif; 
            font-size: 30px;
            text-align: center;
            padding: 20px;
            padding-top: 50px;            
            color: rgb(22, 62, 192);
        }
        .box{
            background-color: rgb(255, 255, 255);
            width: 45%;
            margin-left: 30%;
            height: 700px;
            box-shadow: 1px 1px 8px 1px;
            margin-bottom: 30px;
        }
        .box:hover{
            box-shadow: 1px 1px 15px 1px;
        }
        h5{
            text-align: left;
            padding: 7px 5px 10px;
            font-size: 20px;
            font-family:serif;
        }
        .first_name{
            border:solid 1.75px;
            border-color: rgb(24, 73, 179);
            border-radius: 4px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align:center;
            width: 40%;
        }
        .last_name{
            border:solid 1.75px;
            border-color: rgb(24, 73, 179);
            border-radius: 4px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align:center;
            width: 40%;
        }
        .first_name_last_name{
            padding-left: 10%;
            padding-right: 5%;
            margin-top: 50px;
        }
        .body{
            background-color: rgb(196, 196, 196);
        }
        .email{
            border:solid 1.75px;
            border-color: rgb(24, 73, 179);
            border-radius: 4px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align:center;
            width: 80%;
        }
        .password{
            border:solid 1.75px;
            border-color: rgb(24, 73, 179);
            border-radius: 4px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align:center;
            width: 80%;
        }
        .confirm_password{
            border:solid 1.75px;
            border-color: rgb(24, 73, 179);
            border-radius: 4px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align:center;
            width: 80%;
            outline: none;
        }
        .email_div{
            padding-top: 50px;
            padding-left: 13%;
        }
        .password_div{
            padding-top: 50px;
            padding-left: 13%;
        }
        .confirm_password_div{
            padding-top: 50px;
            padding-left: 13%;
            
        }
        
        .sign_up_button{
            border-color: rgb(13, 51, 173);
            color:white;
            background-color: rgb(13, 51, 173);
            font-family: serif;
            font-size: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            padding-right: 5%;
            padding-left: 5%;
            border-radius: 3px;
            position: relative;
        }
        .sign_up_button:hover{
            border:solid 0.5px;
            background-color: rgb(255, 255, 255);
            border-color: rgb(13, 51, 173) ;
            color:rgb(13, 51, 173);
            cursor: pointer;
        }
        .sign_up_div{
            padding-top: 30px;
            padding-left: 40%;
        }
        .last_line{
            font-family:sans-serif;
            text-align: center;
            font-size: 15px;
        }
        .sign_in{
            color: blue;

        }
        .sign_in::after{
            color: blueviolet;
        }
    </style>
 <div class="box">
     <h2><b>Sign Up</b></h2>
     <div class="first_name_last_name">
        &nbsp;&nbsp;&nbsp;<input type="text" class="first_name" name="first_name" placeholder="First Name" min="1" max="10" required>  
        <input type="text" class="last_name" placeholder="Last Name" name="last_name"min="1" max="10"required>
     </div>
     <div class="email_div">
         <input type="email" class="email" placeholder="Email Address" name="email" min="1" max="30"required>
     </div>       
     <div class="password_div">
         <input type="password" class="password" placeholder="Password" name="password" min="1" max="30"required>
     </div>
     <div class="confirm_password_div"> 
         <input type="password" class="password" placeholder="Confirm Password" name="password" min="1" max="30"required >
     </div>
     <div class="sign_up_div">
     <button type="submit" class="sign_up_button">Sign up</button>
    </div>
     <p class="last_line">If already signed up.Click<a href="/signin.php" class="sign_in"> Sign in</a></p>
 </div>
</form>