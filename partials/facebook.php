<title>facebook</title>
<link rel="icon" href="partials/icon(1).png">
<style>
   input[type=text] , input[type=password]{
   	width: 150%;
   	padding-bottom: 4px;
   	padding-block-end: 5px;
   	height: 30px;
   }

    input[type=button]{
    	background: #2074F4;
    	color: white;
    	width: 94%;
    	height:40px;
    }

	.login {
		margin-top: 150px;
		float:right;
		margin-right: 150px;
		background: white;
		padding:30px;
		border-style: round;
	}
	.loginid {
		margin-right: 100px;
	}
	.loginpwd {
		margin-right: 100px;
		margin-top: 20px;
	}
	.submit{
		margin-top: 20px;
		padding-bottom: 30px;
	}
	.logo {
		float: left;
		margin-left: 100px;
		margin-top: 180px;
		width: 300px;
	}
	.ffont {
  font-family: SFProDisplay-Regular, Helvetica, Arial, sans-serif;
  font-size: 28px;
  font-weight: normal;
  line-height: 32px;
  width: 500px;
}
.error{
	height:40px;
	width:60%;
	background:#f8d7da;
	text-align:center;
	padding:10px;
}
</style>
</head>

<body bgcolor="#F0F2F5">
	<?php
        if($showError){
        echo ' <center><div class="error">
            <strong>Error!</strong>  &nbsp; &nbsp;'.$showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> <center>';
        }?>
	<div id="wrapper">
		<div class="logo">
			<img src="partials/logo.svg" alt="logo">
			<h2 class="ffont">
			Facebook helps you connect and share with the people in your life.
		   </h2>
	   </div><form action="/registration_system/login.php" method="post">
	   <div class="login">
	   	<div class="loginid">
	   		<input type="text" placeholder="Enter your Email or Username" name="username">
	   	</div>
	   	<div class="loginpwd">
   	      <input type="password" placeholder="password" name="password">
   	   </div>
         <div class="submit">
		 <center><button type="submit" style="width:98% ; height: 40px ;color: white; background-color: #2074f4;border-radius: 12px;">Log in</button><br><br>
   	      <a href="/registration_system/partials/resetpassword.php" style="text-decoration: none;color: #2074f4;">Forget Password</a></center>
   	      <hr color="grey">
   	   </div>
         <div>
         	<center><a href="/registration_system/signup.php"><input type="button" value="Create new Account" style="border-radius: 12px;background: #48b42c;width: 98%; align-content: center;"></a></center>         </div>
         </div>
      </div> </form> 
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

