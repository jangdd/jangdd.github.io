
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "kkbww86";
    $dbname = "myuser";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully"."<br>";


    // form태그에서 받은 값 변수 처리하기.
    $user_id=$_POST['id'];
    $user_pwd=$_POST['pwd'];
    $user_mail=$_POST['email_1']."@".$_POST['email_2'];


    $sql = "INSERT INTO UserInfo (id, pwd, email)"."
    VALUES ('".$user_id."','".$user_pwd."','".$user_mail."')";

    if ($conn->query($sql) === TRUE) {
        echo "성공";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

     Header("location:loginpage.html");
    ?>
