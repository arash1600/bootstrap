<?php
include("header.html");
?>
<div class="col">
    <form action="login_action.php" method="post">
    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">ایمیل</label>
                      <input type="email" name="email" id="form3Example3c" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">رمز عبور</label>
                      <input type="password" name="password" id="form3Example4c" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" value="ورود"/>
                  </div>
    </form>
</div>
<?php
include("footer.html");
?>
