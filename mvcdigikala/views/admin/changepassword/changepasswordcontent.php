<!--<div class="justify-content-center">-->

<div class="col-sm-8">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">تغییر پسورد مدیریت</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
            <div class="card-body">
                <?php if ($zicco['messageErrorChangePasswordAdmin'] != null){ ?>
                <div class="alert alert-danger">
                    <!--                <p>متن مورد نظر ما</p>-->
                    <?php echo $zicco['messageErrorChangePasswordAdmin']; ?>
                </div>
                <?php }?>

                <?php if ($zicco['messageSuccessChangePasswordAdmin'] != null){ ?>
                    <div class="alert alert-success">
                        <!--                <p>متن مورد نظر ما</p>-->
                        <?php echo $zicco['messageSuccessChangePasswordAdmin']; ?>
                    </div>
                <?php }?>
                <div class="form-group">
                    <input type="password" name="passwordoldadmin" class="form-control" id="exampleInputEmail1"
                           placeholder="پسورد قبلی خود را وارد نمایید">
                </div>
                <div class="form-group">
                    <input type="password" name="passwordnewadmin1" class="form-control" id="exampleInputPassword1"
                           placeholder="پسورد جدید خود را وارد نمایید">
                </div>
                <div class="form-group">
                    <input type="password" name="passwordnewadmin2" class="form-control" id="exampleInputPassword1"
                           placeholder="پسورد جدید خود را مجددا وارد نمایید">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="btnchangepasswordadmin" class="btn btn-info btn-block">اعمال تغییرات
                </button>
            </div>
        </form>
    </div>

</div>

<!--</div>-->