<?php require("regis.php")?>
<?php 
    if (isset($_POST['submit']))
    {
        $user = new RegisterUser($_POST['username'], $_POST['password']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="bg-all">
    <div class="form-container" style="padding-top:-0px">
        <div class="form">
             <form action="" method="post" autocomplete="off"> 
                <h1 style="text-align:center;">Registration Section</h1>
                <h3 style="color: black;font-weight: 700;text-align:center;">Both Field are <span style="color: orange;">Required<span><h3>

                <label> username </label>
                <input type="text" name="username" >
                <br>
                <label> password </label>
                <input type="text" name="password">
                <br><br>
                <button type="submit" name="submit" class="">Register</button><br><br>

                <a class="gotologin" href="./login.php">Go to Login?</a>
                <p class="errorinput"><?php echo @$user->errorinput?></p>
                <p class="successinput"><?php echo @$user->successinput?></p>
                <p style="text-align: center; font-size: 12px;">Made by Adrian</p>
             </form>
        </div>    
    </div>
</body>
</html>