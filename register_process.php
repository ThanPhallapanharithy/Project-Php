
<?php
    include('connection.php');
    $conn = connection();

    $user = $_POST['user_name'];
    $pwd = $_POST['password'];
    $confirm_pwd = $_POST['confirm_password'];

    $sql = "SELECT * FROM user_tbl WHERE user='$user'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        if(!empty($row['id'])){
            echo "This User already exist";
            die();
        }
    }

    if($pwd == $confirm_pwd){
        $ipassword = password_hash($pwd, PASSWORD_DEFAULT);
        $sql2 = "INSERT INTO user_tbl VALUES(null, '$user', '$ipassword', 1)";
        $chk = $conn->query($sql2);
        if($chk){
            echo "Register secussful.";
            echo "<a href='sign-in.php'>Login</a>";

        }
    }else{
        echo "Password and confirm password doesn't matched.";
    }

    
?>