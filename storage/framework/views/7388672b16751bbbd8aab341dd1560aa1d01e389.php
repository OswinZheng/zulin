<style>
    .row {
        margin: 0;
    }

    .col-md-12,
    .col-md-3 {
        padding: 0;
    }

    @media screen and (min-width: 1000px) and (max-width: 1150px) {
        .col-lg-3,
        .col-lg-9 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media screen and (min-width: 1151px) and (max-width: 1300px) {
        .col-lg-3 {
            flex: 0 0 40%;
            max-width: 40%;
        }

        .col-lg-9 {
            flex: 0 0 60%;
            max-width: 60%;
        }
    }

    @media screen and (min-width: 1301px) and (max-width: 1700px) {
        .col-lg-3 {
            flex: 0 0 35%;
            max-width: 35%;
        }

        .col-lg-9 {
            flex: 0 0 65%;
            max-width: 65%;
        }
    }

    .login-page {
        height: auto;
    }

    .login-main {
        position: relative;
        display: flex;
        min-height: 100vh;
        flex-direction: row;
        align-items: stretch;
        margin: 0;
    }

    .login-main .login-page {
        background-color: #fff;
    }

    .login-main .card {
        box-shadow: none;
    }

    .login-main .auth-brand {
        margin: 4rem 0 4rem;
        font-size: 26px;
        width: 325px;
    }

    @media (max-width: 576px) {
        .login-main .auth-brand {
            width: 90%;
            margin-left: 24px
        }
    }

    .login-main .login-logo {
        font-size: 2.1rem;
        font-weight: 300;
        margin-bottom: 0.9rem;
        text-align: left;
        margin-left: 20px;
    }

    .login-main .login-box-msg {
        margin: 0;
        padding: 0 0 20px;
        font-size: 0.9rem;
        font-weight: 400;
        text-align: left;
    }

    .login-main .btn {
        width: 100%;
    }

    .login-page-right {
        padding: 6rem 3rem;
        flex: 1;
        position: relative;
        color: #fff;
        text-align: center !important;
        background: rgba(0, 0, 0, 0.3) url(/images/background.jpg) center;
        background-size: cover;
    }

    .login-description {
        position: absolute;
        margin: 0 auto;
        padding: 0 1.75rem;
        bottom: 3rem;
        left: 0;
        right: 0;
    }

    .content-front {
        position: absolute;
        left: 0;
        right: 0;
        height: 100vh;
        background: rgba(0, 0, 0, .1);
        margin-top: -6rem;
    }

    body.dark-mode .content-front {
        background: rgba(0, 0, 0, .3);
    }

    body.dark-mode .auth-brand {
        color: #cacbd6
    }
</style>

<div class="row login-main">
    <div class="col-lg-3 col-12 bg-white">
        <div class="login-page">
            <div class="auth-brand text-lg-left">
                <?php echo config('admin.logo'); ?>

            </div>

            <div class="login-box">
                <div class="login-logo mb-2">
                    <h4 class="mt-0">租赁管理系统</h4>
                    <p class="login-box-msg mt-1 mb-1">欢迎回来，请登录您的账号。</p>
                </div>
                <div class="card">
                    <div class="card-body login-card-body">

                        <form id="login-form" method="POST" action="<?php echo e(admin_url('auth/login'), false); ?>">

                            <input type="hidden" name="_token" value="<?php echo e(csrf_token(), false); ?>"/>

                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                <input
                                    type="text"
                                    class="form-control <?php echo e($errors->has('username') ? 'is-invalid' : '', false); ?>"
                                    name="username"
                                    placeholder="用户名"
                                    required
                                    autofocus
                                >

                                <div class="form-control-position">
                                    <i class="feather icon-mail"></i>
                                </div>

                                <label for="username">用户名</label>

                                <div class="help-block with-errors"></div>
                                <?php if($errors->has('username')): ?>
                                    <span class="invalid-feedback text-danger" role="alert">
                                                    <?php $__currentLoopData = $errors->get('username'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="control-label" for="inputError"><i
                                                    class="feather icon-x-circle"></i> <?php echo e($message, false); ?></span><br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </span>
                                <?php endif; ?>
                            </fieldset>

                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                <input
                                    minlength="5"
                                    maxlength="20"
                                    id="password"
                                    type="password"
                                    class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : '', false); ?>"
                                    name="password"
                                    placeholder="<?php echo e(trans('admin.password'), false); ?>"
                                    required
                                    autocomplete="current-password"
                                >

                                <div class="form-control-position">
                                    <i class="feather icon-lock"></i>
                                </div>
                                <label for="password"><?php echo e(trans('admin.password'), false); ?></label>

                                <div class="help-block with-errors"></div>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback text-danger" role="alert">
                                                    <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="control-label" for="inputError"><i
                                                    class="feather icon-x-circle"></i> <?php echo e($message, false); ?></span><br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </span>
                                <?php endif; ?>

                            </fieldset>
                            <div class="form-group d-flex justify-content-between align-items-center">
                                <div class="text-left">
                                    <fieldset class="checkbox">
                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                            <input id="remember" name="remember" value="1"
                                                   type="checkbox" <?php echo e(old('remember') ? 'checked' : '', false); ?>>
                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                  <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                            <span> <?php echo e(trans('admin.remember_me'), false); ?></span>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right login-btn">

                                <?php echo e(__('admin.login'), false); ?>

                                &nbsp;
                                <i class="feather icon-arrow-right"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-9 col-12 login-page-right">
        <div class="content-front"></div>
        <div class="login-description">

        </div>
    </div>
</div>


<script>
    Dcat.ready(function () {
        // ajax表单提交
        $('#login-form').form({
            validate: true,
        });
    });
</script>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/resources/views/admin/login.blade.php ENDPATH**/ ?>