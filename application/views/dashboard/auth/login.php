<div class="login-title">
    <h2 class="text-center text-secondary">LOGIN ADMIN <b>PST.CO.ID</b></h2>
</div>
<form method="post" action="<?= base_url('admin/authentication')?>">
    <div class="input-group custom">
        <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
        <div class="input-group-append custom">
            <span class="input-group-text"><i class="icon-copy dw dw-user"></i></span>
        </div>
    </div>
    <div class="input-group custom">
        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
        <div class="input-group-append custom">
            <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
        </div>
    </div>
    <div class="row pb-30 align-items-end">
        <div class="col">
            <div class="forgot-password"><a href="#">Lupa Password?</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="input-group mb-0">
                <button type="submit" class="btn btn-info btn-lg btn-block">MASUK</button>
            </div>
        </div>
    </div>
</form>