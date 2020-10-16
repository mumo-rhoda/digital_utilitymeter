
<?php
    // header.php
    include ('header.php');
?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('register-process.php');
        }
    ?>

    <!-- registration area -->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Register</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                    <span class="font-ubuntu text-black-50">I already have <a href="login.php">Login</a></span>
                </div>
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                        </div>
                        <img src="./assets/profile/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                        <small class="form-text text-black-50">Choose Image</small>
                        <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName'];  ?>" name="LastName" id="LastName" class="form-control" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" required name="email" id="email" class="form-control" placeholder="Email*">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="password" id="password" class="form-control" placeholder="password*">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password*">
                                <small id="confirm_error" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['Electric_MeterNo'])) echo $_POST['Electric_MeterNo'];  ?>" name="Electric_MeterNo" id="Electric_MeterNo" class="form-control" placeholder="Electric_MeterNo">
                            </div>
                            <div class="col">
                                <input type="number" value="<?php if(isset($_POST['Current_Electricity_Reading'])) echo $_POST['Current_Electricity_Reading'];  ?>" name="Current_Electricity_Reading" id="Current_Electricity_Reading" class="form-control" placeholder="Current_Electricity_Reading">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['Gas_MeterNo'])) echo $_POST['Gas_MeterNo'];  ?>" name="Gas_MeterNo" id="Gas_MeterNo" class="form-control" placeholder="Gas_MeterNo">
                            </div>
                            <div class="col">
                                <input type="number" value="<?php if(isset($_POST['Current_Gas_Reading'])) echo $_POST['Current_Gas_Reading'];  ?>" name="Current_Electricity_Reading" id="Current_Electricity_Reading" class="form-control" placeholder="Current_Gas_Reading">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['Water_MeterNo'])) echo $_POST['Water_MeterNo'];  ?>" name="Water_MeterNo" id="Water_MeterNo" class="form-control" placeholder="Water_MeterNo">
                            </div>
                            <div class="col">
                                <input type="number" value="<?php if(isset($_POST['Current_Water_Reading'])) echo $_POST['Current_Water_Reading'];  ?>" name="Current_Water_Reading" id="Current_Water_Reading" class="form-control" placeholder="Current_Water_Reading">
                            </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                        </div>

                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #registration area -->


<?php
    // footer.php
    include ('footer.php');
?>