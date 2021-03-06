<?php   

include 'operation.php';
if(isset($_SESSION["name"]))
{
    $NAME= $_SESSION["name"];
}



?>


<div class="col-auto col-md-3  col-lg-2 col-xl-2 px-sm-2 px-0 side-nav" >

                <div class="d-flex flex-column align-items-center  px-3 pt-2  min-vh-100">

                    <div class="logo">
                        <h2 class="border-start border-info border-5 fw-bold ">
                            E-C<span class="d-none d-md-inline ">lasse </span>
                        </h2>
                    </div>

                    <div class="d-inline-flex flex-column  justify-content-center row">
                        <img src="ressources/Image1.png" class=" mt-5  rounded-circle image  d-none  d-md-inline" alt="image">
                        <p class="text-center fw-bold">   <?php  echo   $NAME ; ?></p>
                        <p class="text-center text-info"> Admin</p>
                    </div>

                    <!--  SIDE BAR  -->
                    <ul class=" nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start gap-3 mt-5"
                        id="menu">

                        <li class="nav-item ">
                            <a href="dashbord.php" class="nav-link <?php  echo   $home ; ?>    align-middle  text-dark">
                                <i class="fas fa-home me-3 "></i> <span class="fw-bolder d-none d-sm-inline">Home</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link <?php  echo   $course ; ?>  align-middle text-dark">
                                <i class="far fa-bookmark  me-3"></i> <span class="fw-bolder  d-none d-sm-inline">Course</span>
                            </a>
                        </li>


                        <li class="nav-item ">
                            <a href="Students.php" class="nav-link <?php  echo   $students ; ?>    align-middle text-dark">
                                <i class="far fa-graduation-cap me-3 "></i><span
                                    class="fw-bolder d-none d-sm-inline">Students</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="Payment.php" class="nav-link <?php  echo  $payment ; ?>   align-middle text-dark">
                            <i class="far fa-usd-square me-3 "></i><span
                                    class="fw-bolder d-none d-sm-inline">Payment</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link <?php  echo   $reports ; ?> align-middle text-dark">
                                <i class="far fa-file-chart-line  me-3"></i> <span
                                    class="fw-bolder  d-none d-sm-inline">Reports</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="#" class=" fw-bolder nav-link <?php echo   $settings ; ?>   align-middle text-dark">
                                <i class="fal fa-sliders-v-square me-3 "></i>
                                 <span class="d-none d-sm-inline">Settings</span>
                            </a>
                        </li>
                        <li class="mt-5">
            
                    
                        <a href="operation.php?logout" class=" nav-link  align-middle text-dark ">
                        <span class="  d-none d-sm-inline">logout</span>
                        <i class="fal fa-sign-out-alt  text-dark  icon-out  "></i>
                        </a>

                    </li>


                    </ul>
                 
                </div>
            </div>