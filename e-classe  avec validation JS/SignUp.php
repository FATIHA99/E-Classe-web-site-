<?php  
include 'header.php';
include 'operation.php';
?>

<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                
<!-- onsubmit = "return validation()" -->
                <form   name = "RegisterForm"  class="mx-1 mx-md-4 "  id="form"   method="POST">
                                    
                
            
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0 ">
                      <input type="text" id="name" class="form-control "  name ="Name" />
                      <label class="form-label" for="form3Example1c">Your Name : </label>
                      <p class="text-danger" id="nameMsg"></p>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4 ">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="Email" class="form-control " name ="Email"  />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                      <p class="text-danger" id="nameMsg"></p>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="Password" class="form-control" name="Password" />
                      <label class="form-label" for="form3Example4c">Password</label>
                      <p class="text-danger" id="nameMsg"></p>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="PasswordAgain" class="form-control" name= "PasswordAgain"/>
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      <p class="text-danger" id="nameMsg"></p>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button id="submit" type="submit" class="btn btn-primary btn-lg" name = "register" >Register</button>
                   
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="ressources/su.jpg" class=" ms-5 img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src = "Validate.js"></script>
</body>
</html>

