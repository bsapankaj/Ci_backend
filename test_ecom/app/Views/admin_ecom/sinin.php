<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading">
            <h3 class="text-center m-t-10"> Sign Up To <strong>Admin</strong> </h3>
        </div>
        <form class="form-horizontal m-t-40" action="<?= base_url()?>/sinin" method="POST">
            <div class="row">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="username" id="username" value="" placeholder="Username">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="mobile" id="mobile" value="" placeholder="Mobile No.">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="email" id="email" value="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" id="password" value="" placeholder="Password">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="password_confirm" id="password_confirm" value="" placeholder="Password-Confirm">
                    </div>
                </div>
                <?php if(isset($validation)): ?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="form-group text-right">
                <div class="col-xs-4">
                    <a href="login"><button class="btn btn-purple w-md" type="button">Log In</button></a>
                </div>
                <div class="col-xs-8">
                    <button class="btn btn-purple w-md" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>