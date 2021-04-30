<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>ورود به پنل مدیریت</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <?php
                if ($zicco['message_error_loginadmin'] != null) {

                    // از انجایی که این خونه از ارایه zicco مقدار اولیه ان برابر null میباشد و زمانی مقدار میگیرد که وارد else شود یعنی کاربر ایمیل یا پسورد را اشتباه وارد نماید
                     echo "<p style='color: red'>".$zicco['message_error_loginadmin']."</p>";
                }
                ?>
                <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="emailloginadmin" class="form-control" placeholder="ایمیل">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="passwordloginadmin" class="form-control" placeholder="رمز عبور">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> یاد آوری من
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button name="btnloginadmin" type="submit" class="btn btn-primary btn-block btn-flat">ورود
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!--                <div class="social-auth-links text-center mb-3">-->
                <!--                    <p>- OR -</p>-->
                <!--                    <a href="#" class="btn btn-block btn-primary">-->
                <!--                        <i class="fa fa-facebook mr-2"></i> ورود با اکانت فیسوبک-->
                <!--                    </a>-->
                <!--                    <a href="#" class="btn btn-block btn-danger">-->
                <!--                        <i class="fa fa-google-plus mr-2"></i> ورود با اکانت گوگل-->
                <!--                    </a>-->
                <!--                </div>-->
                <!-- /.social-auth-links -->

                <!--                <p class="mb-1">-->
                <!--                    <a href="#">رمز عبورم را فراموش کرده ام.</a>-->
                <!--                </p>-->
                <!--                <p class="mb-0">-->
                <!--                    <a href="register.html" class="text-center">ثبت نام</a>-->
                <!--                </p>-->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>