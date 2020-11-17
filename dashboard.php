
<?php include('session.php');?>
<?php include('functions.php') ?>
<?php confirm_login() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous"
    />
    <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
    ></script>
    
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"
    ></script>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    "
    />
    <link rel="stylesheet" href="newveiwstudent.css?v=<?php echo time(); ?>"/>
    <title>Document</title>
</head>
<body style='background: #E0EFDE; min-height:100vh;'>
    <div id = 'Header' style='margin-bottom:50px;'>
        <div style = " height: 100%; padding-top: 20px;"><h3> <span style= "color:#fff; font-family: Helvetica" >Noble</span> Tutorial Class</h3>
        <p></p>
        <p style= "color: #fff; margin-top:8px" >(We deliver result with confidence)</p>
        </div>
    </div>
    <div class= "body" style = "padding-left:50px; padding-right:50px; ">
        <div class= 'row'>
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Register Students</p>
                    <i class = "fa fa-registered"></i>
                    <a href="RegisterStudent.php"><div class="theLinkDiv">Register</div></a>
                </div>
            </div>

            <!-- Next Column -->
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Veiw Student Record</p>
                    <i class="fa fa-eye"></i>
                    <a href="viewstudents.php"><div class="theLinkDiv">Veiw</div>
                </div></a>
            </div>

            <!-- Next Column -->
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Edit Student Record</p>
                    <i class="fa fa-edit"></i>
                    <a href="editStudent.php"><div class="theLinkDiv">Edit</div>
                </div></a>
            </div>

            <!-- Next Column -->
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Insert Payment</p>
                    <i class="fa fa-edit"></i>
                    <a href="insertPayment.php"><div class="theLinkDiv">Insert</div></a>
                </div>
            </div>

            <!-- Next Column -->
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Payment Record</p>
                    <i class="fa fa-archive"></i>
                    <a href="paymentRecord.php"><div class="theLinkDiv">View</div></a>
                </div>
            </div>
            <!-- Next Column -->
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Edit Payment</p>
                    <i class="fa fa-edit"></i>
                    <a href="PaymentRecord.php"><div class="theLinkDiv">Edit</div></a>
                </div>
            </div>

            <!-- Next Column -->
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Get Payment for the Day</p>
                    <i class="fa fa-get-pocket"></i>
                    <a href="getPayment.php"><div class="theLinkDiv">Get</div></a>
                </div>
            </div>

            <!-- Next Column -->
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Manage Access</p>
                    <i class="fa fa-wheelchair"></i>
                    <a href="#"><div class="theLinkDiv">Manage</div></a>
                </div>
            </div>
            <!-- Next Column -->
            <div class="col-lg-4">
                <div class='theContent'>
                    <p>Log Out</p>
                    <i class="fa fa-sign-out"></i>
                    <a href="#"><div class="theLinkDiv">Log Out</div></a>
                </div>
            </div>


            
        </div>
        
    </div>
    
</body>
</html>