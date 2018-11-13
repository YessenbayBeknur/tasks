<?php
$usernames = ["billgates","johndoe","stevejobs"];



				if(in_array($_POST["login"],$usernames)){
					?> <div class="error">Username <?php echo $value ?> is already reserved!</div>
					<?php
				}
				if($_POST["password"] == null && $_POST["password2"] == null){
					?> <div class="error">Password and Confirm Password should not be empty!</div>
					<?php
				}
				if ($_POST["password"] != $_POST["password2"]) {
					?> <div class="error">Password and Confirm Password doesnt equal to each other!</div>
					<?php
				}
				if ($_POST["login"] == null){
						?> <div class="error">Username should not be empty!</div>
						<?php
					}



?>
<html>
<head><style>
.error{
	border:1px solid red;
	font-weight:bold;
	padding:5px;
	width:400px;
	margin:4px;
}
</style></head>
<body>
<form action="task9_1.php" method="post">

Login<input type="text" name="login"/><br>
Password<input type="password" name="password"/><br>
Confirm Password<input type="password" name="password2"/><br>
<input type="submit"/>
</form>
</body>
</html>
