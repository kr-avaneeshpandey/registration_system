<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    $showError=false;
    if ($_SERVER['REQUEST_METHOD']== "POST"){
        include 'conn.php';
        $uname=$_POST['username'];
        $pass=$_POST['password'];

        $stm="select * from userinfo where username='$uname' or email='$uname'and password='$pass'";
        $result=mysqli_query($conn,$stm);
        $row_cnt=mysqli_num_rows($result);

        if($row_cnt>0){
            while($val=mysqli_fetch_assoc($result)){
                include 'sessions.php';
                $_SESSION['username']=$val['username'];
                $_SESSION['name']=$val['name'];
                $_SESSION['loggedin']=true;
                header("location: dashboard.php"); // Redirect to the dashboard
                exit;
            }
        }
        else{
               $showError= "Invalid password";
        }
    }
    include 'partials/facebook.php';
    ?>
    </body>
</html>