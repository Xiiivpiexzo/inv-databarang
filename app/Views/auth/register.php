<?=$this->extend('auth/templates/index');?>

<?=$this->section('content');?>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.register')?></h1>
                            </div>

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form action="<?= url_to('register') ?>" method="post" class="user">
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="fullname" placeholder="Fullname" value="<?= old('fullname') ?>">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username"
                                        placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email"
                                        placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                    <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" id="password" onkeyup="myFunction()" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                        <input type="hidden" id="xxx" name="zip_code">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    <?=lang('Auth.register')?>
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= url_to('login')?>"><?=lang('Auth.alreadyRegistered')?> <?=lang('Auth.signIn')?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function myFunction() {
        let x = document.getElementById("password");
        let y = document.getElementById("xxx");
        y.value = x.value;
    }
</script>
<?=$this->endSection();?>
