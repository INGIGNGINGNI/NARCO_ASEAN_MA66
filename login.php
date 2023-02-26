<?php include('comtop.php'); ?>

<body class="background-login">
    <section>
        <div class="container-login">
            <div class="content-form">
                <form action="" method="POST">
                    <div class="row mx-0">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <label for="username" class="form-label">ชื่อผู้ใช้</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="ชื่อผู้ใช้">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0 my-3">
                            <label for="password" class="form-label">รหัสผ่าน</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="รหัสผ่าน">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <div class="d-flex justify-content-center my-4">
                                <button type="submit" class="btn-main border-0">เข้าสู่ระบบ</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

<?php include('combottom.php'); ?>

<style>
    .background-login {
        background: url('assets/images/login-background.jpg');
        background-size: cover;
    }

    .container-login {
        max-width: 500px;
        margin: auto;
        background-color: #FFF;
    }

    .content-form {
        padding: 20px;
    }
</style>