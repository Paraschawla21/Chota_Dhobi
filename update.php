<?php
if (isset($_POST['signinButton'])) {
    // Creating connection
    $conn = mysqli_connect('localhost','root','', 'test');

    $name = $_POST['userName'];
    $pwd = $_POST['password'];
    // echo "button Clicked";
    $sql_id = "SELECT mobile FROM registration WHERE uname = '$name' AND passwordd = '$pwd'";
    $result = mysqli_query($conn, $sql_id);

    if (mysqli_num_rows($result) > 0) {
        die("<script>
                window.location.href = 'index.php'
                </script>");
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            die("<script>
                window.location.href = 'index.php'
                </script>");
        }
    } else {
        echo "<script>
			alert('Wrong Data Entered...Please Try Again!');
            </script>";

        die("<script>
                window.location.href = 'signIn.html'
                </script>");
    }
}

mysqli_close($conn);
?>