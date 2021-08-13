<?php
require_once './includes/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 m-auto p-3 mt-2">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Log in to continue</h3>
                    <?php require_once "./controllers/login.php" ?>

                    <div id="alert">
                        <?php 
    if(isset($_POST['submit'])) {
        try{
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // execute query
            $STH = $DBH->prepare("SELECT * FROM user WHERE email=?");
            $data = array($email);
            $STH->execute($data);

            //check if email exists
            $rows_affected = $STH->rowCount();
            if ($rows_affected == 1){
                $row = $STH->fetch();
                $pass = $row['password'];
                
                //Check if password is correct
                if(password_verify($password,$pass))
                {
                    $_SESSION['success'] = "Login Successfull";
                    $_SESSION['user'] = $row['id'];

                    unset($email);
                    unset($password);

                    //check if the logged in user is a staff
                    $row['is_staff'] == 1?
                    header("location: dashboard.php"):header("location: home.php");                
                }
                else 
                $_SESSION['error'] = "Incorrect Password";
            }
            else 
            $_SESSION['error'] = "Email does not exist";            
        }

        catch(PDOException $e){
            $_SESSION['error'] = "I'm afraid I can't Log you in at the moment.";
            file_put_contents('PDOErrors.txt',"\n". date('Y-m-d H:i:s').'] - '.$e->getMessage(), FILE_APPEND); # log errors to afile
        }
    }
?>
                    </div>
                    <form action="" method="post">
                        <div class="from-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo $email ?? ""; ?>" id="email" name="email" class="form-control">
                        </div>
                        <div class="from-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" value="<?php echo $password ?? ""; ?>" id="password" name="password" class="form-control">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
 require_once './includes/footer.php';

 ?>