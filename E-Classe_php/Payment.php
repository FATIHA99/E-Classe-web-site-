<?php 
$payment=[
    $arr=['name'=>'karthi','payment Schedule'=>'First','Bill Number'=>'0001234','Amount Paid'=>'1000,00 DHS','Balance Amount'=> '499,00 DHS','Date'=> '05-Jan,2022'],
    $arr=['name'=>'alex','payment Schedule'=>'Second','Bill Number'=>'000123','Amount Paid'=>'1001,00 DHS','Balance Amount'=> '499,01 DHS','Date'=> '06-Jan,2022'],
    $arr=['name'=>'david','payment Schedule'=>'third','Bill Number'=>'00012','Amount Paid'=>'1002,00 DHS','Balance Amount'=> '499,02 DHS','Date'=> '07-Jan,2022'],
    $arr=['name'=>'flower','payment Schedule'=>'First','Bill Number'=>'0001','Amount Paid'=>'1003,00 DHS','Balance Amount'=> '499,03 DHS','Date'=> '08-Jan,2022'],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <meta name="description"
        content=" E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/DashStyle.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-light">
    <main class="container-fluid position-sticky ">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php' ; ?>
            <div class="col p-0 ">
                <?php include 'navbar.php'; ?>
                <!-- title and icon  -->
                <div class=" d-flex   container bg-light  justify-content-sm-between  py-3">
                    <div>
                        <p class="fw-bold  ps-3"> Payment Details </p>
                    </div>

                    <div class="ps-5">
                        <i class="far fa-sort text-info"></i>

                    </div>
                </div>

                <div class="d-flex table-responsive ">
                    <table class="table tableau table-borderless  mx-5 ">
                     <thead  class="bg-light  table-head">
                     <?php
                      foreach($arr as $key=> $value)
                       {
                           echo  "<th>         $key          </th>";
                       }
                      ?>
                      </thead>

                      <?php
                     foreach($payment as $arr)
                     {
                         echo "<tr class='py-3'>
                         <td>  {$arr['name']}                                  </td>
                         <td>  {$arr['payment Schedule']}                      </td>
                         <td>  {$arr['Bill Number']}                           </td>
                         <td>  {$arr['Amount Paid']}                           </td>
                         <td>  {$arr['Balance Amount']}                          </td>
                         <td>  {$arr['Date']}                                  </td>
                         <td>  <i class='far fa-eye pe-3 text-info'</i>        </td>
                         </tr>";
                     }
                     ?>



                    </table>
               </div>

            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>