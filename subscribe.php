<?php
include 'conn.php';
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email =  $_POST['email'];
        $sql = "INSERT INTO tbl_subscribe(name,email) VALUES('$username','$email')";
        $iquery = mysqli_query($conn,$sql);
        if($iquery)
        {
            ?>
            <script>
                window.alert('data insert successfully');
            </script>
            <?php
        }else
        {
            ?>
            <script>
                window.alert('data not insert successfully');
            </script>
            <?php
        }
    
}


?>