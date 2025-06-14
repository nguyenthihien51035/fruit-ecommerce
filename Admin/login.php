<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include('head.php');
?>

<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div class="panel-body">
                    <form role="form" action="../Controller/admin_controller.php" method="POST" enctype="multipart/form-data">
                        <hr />
                        <h5>Enter Details to Login</h5>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="text" class="form-control" placeholder="Your Username " name="txtFullname" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Your Password" name="txtPassword" />
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" /> Remember me
                            </label>
                            <span class="pull-right">
                                <a href="#">Forget password ? </a>
                            </span>
                        </div>

                        <button type="submit" name="btnadmin">Login Now</button>
                        <hr />
                        Not register ? <a href="register.php">click here </a> or go to <a href="index.php">Home</a>
                    </form>
                </div>

            </div>


        </div>
    </div>

</body>

</html>