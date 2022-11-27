<?php 
session_start();
if(empty($_SESSION["email"])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password']; //111

        $myfile = fopen("user.json", "r") or die("Unable to open file!");
        $dataJson = json_decode(fread($myfile,filesize("user.json")));
        // var_dump($dataJson);
        if($data["email"] == $dataJson -> email && md5($data['password'] == $dataJson -> password)){
            $_SESSION['email'] = $data['email'];
            // echo "Berhasil Login ". $_SESSION["email"];
            header("Location: act_login.php"); 
        }else{
            echo "Login Gagal";
        }
        fclose($myfile);
    }else{
        echo "Kosong";
    }
}else{
    echo "Selamat Datang di Dashboard ". $_SESSION["email"]. "<br> <a href = 'login.php'>Logout</a>";
}
?>