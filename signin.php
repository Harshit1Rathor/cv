<form action="signinhelp.php" method="post" class="body">
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
            height: 400px;
            box-shadow: 1px 1px 8px 1px;
            margin-bottom: 30px;
        }
        .box:hover{
            box-shadow: 1px 1px 15px 1px;
        }
        .body{
            background-color: white;
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
        .email_div{
            padding-top: 50px;
            padding-left: 13%;
        }
        .password_div{
            padding-top: 50px;
            padding-left: 13%;
        }
        
        .sign_in_button{
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
        .sign_in_button:hover{
            border:solid 0.5px;
            background-color: rgb(255, 255, 255);
            border-color: rgb(13, 51, 173) ;
            color:rgb(13, 51, 173);
            cursor: pointer;
        }
        .sign_in_div{
            padding-top: 30px;
            padding-left: 40%;
        }
        .sign_in{
            color: blue;

        }
    </style>
 <div class="box">
     <h2><b>Sign In</b></h2>
     <div class="email_div">
         <input type="email" class="Email" placeholder="Email Address" min="1" max="30"required>
     </div>       
     <div class="password_div">
         <input type="password" class="Password" placeholder="Password" name="password" min="1" max="30"required>
     </div>
     <div class="sign_in_div">
     <button type="submit" class="sign_in_button">Sign in</button>
    </div>
     
 </div>
</form>