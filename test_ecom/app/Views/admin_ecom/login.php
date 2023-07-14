<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
    <div class="panel-heading">
        <h3 class="text-center m-t-10"> LogIn To <strong>Admin</strong> </h3>
    </div>
        <?php if(session()->get('success')): ?>
            <div class="alert alert-success sty" role="alert">
                <?= session()->get('success') ?>
            </div>
        <?php endif; ?>
    <form class="form-horizontal m-t-40" action="<?= base_url() ?>/login" method="POST">
        <div class="row">
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" name="username" id="username" value="<?= set_value('username') ?>" placeholder="Username">
                </div>
                <span class="field_error" id="login_username_error"></span>
            </div>
            <!-- <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" name="email" id="email" value="" placeholder="Email-Id">
                </div>
                <span class="field_error" id="login_email_error"></span>
            </div> -->
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
                <span class="field_error" id="login_password_error"></span>
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
                <a href="<?= base_url() ?>/sinin"><button class="btn btn-purple w-md" type="button">Sin In</button></a>
            </div>
            <div class="col-xs-8">
                <button class="btn btn-purple w-md" type="submit">Log In</button>
            </div>
        </div>
    </form>
    </div>
</div>