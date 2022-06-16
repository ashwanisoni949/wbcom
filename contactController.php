<?php
include 'conn.php';
if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($coon,$_POST['name']);
    $email = mysqli_real_escape_string($coon,$_POST['email']);
    $mobile = mysqli_real_escape_string($coon,$_POST['mobile']);
    $msg = mysqli_real_escape_string($coon,$_POST['message']);
    $emailquery = "SELECT * FROM tbl_contact where email = '$email'";
    $query = mysqli_query($conn,$emailquery);
    $emailcount = mysqli_num_rows($query);
    if($emailcount>0)
    {
        ?>
        <script>
        window.alert('email alrady exits');
        </script>
        <?php
    }else{
       $insert = "INSERT INTO tbl_contact(name,email,mobile,message) VALUES('$name','$email','$mobile','$msg')";
       $iquery = mysqli_query($conn,$insert);
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
}


?>