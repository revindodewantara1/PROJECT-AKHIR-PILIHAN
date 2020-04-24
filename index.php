<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form Design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div class="login-box">
	  <img src="avatar.png" class="avatar">
	  <h1>Login Here</h1>
	  <form action="proses_login.php" method="post"> 
		    <u>Username</u>
            <input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<table>
			<td> 
				<tr>
			<button type="button" class="btn btn-secondary" onclick="popup()"><a href="">ABOUT</a></button>
</tr>
</td>
</table>
                    <script>
                        function popup() {
                          alert("Web ini dibuat oleh Revindo Dewantara dan terima kasih telah menggunakan website kami");
                        }
						
                    </script>
	  </form>
					</div>
	
</body>
</html>
