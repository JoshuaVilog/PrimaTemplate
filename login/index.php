<!DOCTYPE html>
<html lang="en">
    
    <?php include "../header.php";?>
    <body id="loginBody" class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="card shadow-lg o-hidden border-0 shadow-lg my-5">
                        <div class="col-sm-5"></div>
                        <div class="card-body p-0 col-sm-2">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="" style="background-color: white; padding: 30px; border-radius: 25px;">
                                        <div class="center">
                                            <img src="/<?php echo $pluginFolder; ?>/images/gallery/logo.png" id="imgLogo" class="img-fluid" alt="">
                                            <h3 class="" style="color:black">
                                                <span><?php echo $systemTitle; ?></span>
                                            </h3>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user input-lg" id="txtUsername" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user input-lg" id="txtPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <button  class="btn btn-primary btn-user btn-block" id="btnLogin">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mysqlfrm --server=root@localhost:3306 C:/xampp/mysql/data/1_tms/2_request_masterlist.frm > C:/xampp/mysql/data/1_tms/2_request_masterlist.txt --diagnostic --port=3307 -vvv --user=root -->
        
        <!-- JavaScript -->
        <?php include "../script.php"; ?>
        <script src="js/functions.js?v=<?php echo $generateRandomNumber; ?>"></script>
    </body>
</html>