
<?php   
    session_start();
    include("connection.php");
    $conn = connection();

    $user_name = $_GET['user_name'];
    $pwd = $_GET['password'];

    $sql = "SElECT * FROM user_tbl WHERE user = '$user_name'";
    $result = mysqli_query($conn, $sql);


    while($row=mysqli_fetch_assoc($result)){
    if(!empty($row['id'])){
        $user = $row['user'];
        $db_pwd = $row['pwd'];
        $chk = password_verify($pwd, $db_pwd);
        if($chk){
            $_SESSION['logedin'] = true;
            header('location:home.php');
        }
    }else{
        echo "User name or password doesn't matched";
        echo "<a href='register.php'>Register here</a>";
    }

}
?>