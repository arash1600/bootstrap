<?php include("header.html"); ?>

<div class="col">
  <section class="vh-100" style="background-color: #f4f4f4;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-10">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">ورود به حساب</p>

                  <form action="login_action.php" method="post" class="mx-1 mx-md-4">

                    <!-- ایمیل -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">ایمیل</label>
                        <input type="email" name="email" id="form3Example3c" class="form-control" required />
                      </div>
                    </div>

                    <!-- رمز عبور -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">رمز عبور</label>
                        <input type="password" name="password" id="form3Example4c" class="form-control" required />
                      </div>
                    </div>

                    <!-- دکمه ورود -->
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" class="btn btn-primary btn-lg" value="ورود" />
                    </div>

                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="login-image.jpg" class="img-fluid" alt="Login Image"> <!-- تصویر برای زیبایی فرم -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include("footer.html"); ?>
