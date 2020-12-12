<?php include('connection.php')?>
<?php
// $query ="SELECT * FROM admin WHERE email='$email' AND password = '$password' ";
//             $execute = mysqli_query($connection , $query);
//             $row = mysqli_fetch_array($execute);
//             if ($row['']){
//                 $_SESSION['User_id'] = $row['id'];
//                 header("Location:dashboard.php");
//             }
//             else{
//                 $_SESSION['ErrorMessage'] = "Wrong Details Entered" ;
//             }


// if(mail('yemisigrace334@gmail.com', 'Testing app', 'Hello my app', 'Noble Tutorial <noble@nobletutorial.com.ng>')) {
//     echo 'sendt';
// } else {
//     echo 'not sent';
// }
                // $headers="From:<support@nobletutorial.com.ng>"."\r\n";
                // $headers .= "MIME-Version: 1.0"."\r\n";
                // $headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";
                // $message = "
                // <html> 
                //     <body> 
                //         <h1>THIS IS USING THE W3 SCHOOL METHOD</h1>
                //         <p> I think the issue is coming from the fact that it does not support the use of initial Names</p>
                //     </body>
                // </html>
                // ";
                // $email_to = 'feranmijogbodo@gmail.com';
                // $email_subject = 'SuccessFul Registration';
                // if(mail($email_to , $email_subject, $message , $headers)){
                //     echo "success";
                // }
                // else{
                //     echo "Couldn't Send";
                // }
        //         $currentTime = time();
        // $dateTime = strftime("%B-%d-%Y" , $currentTime);
        // echo $dateTime;
        
        
?>

<!-- <form action="test.php" method='POST' enctype='multipart/form-data'>
    <input type="file" name = 'img'>
    <input type="submit" name= 'submit'>
</form> -->


<?php 
    // if (isset($_POST['submit'])){
    //     // echo ($_FILES['img']['name']);
    //     $NewName = 'MyImage.PNG';
    //     $target= "Upload/".$NewName;
    //     move_uploaded_file($_FILES['img']['tmp_name'] , $target );
        
    // }
        // $query = "SELECT COUNT(id) FROM?.w7 payment_record";
        // $execute = mysqli_query($connection , $query);
        // $rowPagination = mysqli_fetch_array($execute);
        // while ($RowPagination = mysqli_fetch_array($execute)){
    <div class="pagination">
              <a href="#"><i class="fa fa-chevron-left"></i></a>
              <a href="#" class="pages">1</a>
              <a href="#" class="pages">2</a>
              <a href="#" class="pages">3</a>
              <a href="#"><i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        

?>

<?php 
    // $futureTime = time()+86400;
    
    
    // $currentTime= time(); 
    // echo $currentTime . "<br>";
    // $dateTime = strtotime("3-October-2015");
    // $testTime = strftime("%d-%B-%Y" , $currentTime);
    // $Monday = strtotime("23-November-2020");
    // echo $testTime. "<br>";
    // echo $Monday;
    
    // $newTime = strtotime($dateTime);
    // echo $newTime . "<br>";
    // echo $futureTime - $newTime ;
    // // echo $futureTime - $dateTime;
    $name = 'Oluwaferanmi';
    $balance = '2000';
    $amount = '3000';
    $date = 'Today';
    $expiry = 'Next Week';
    $email_subject="PaymentReciept";
    $email_to = 'codewithmark@gmail.com';
    $headers = "From:NobleTutorial<support@nobletutorial.com.ng>"."\r\n";
    $headers = "MIME-Version: 1.0"."\r\n";
    $headers = "Content-Type: text/html; charset=UTF-8"."\r\n";
    $body = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
            <meta charset='UTF-8'>
            <meta name = 'veiwport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body style='background:#E0EFDE'; min-height:100vh;
    padding-top:100px; padding-bottom:50px;'>
    <div style='text-align:center; background-color:white; border-radius:10px; ;width:70%; margin:auto ; height:400px; padding:20px; margin-top:50px;'> 
    <div>Thanks For Choosing Noble Tutorial Classes</div>
    <p>Please Find Below is the Details of your payment</p>
    <hr style='width:95%; text-align:left; margin-left:0px'>
    <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Amount Paid</div>
    "."\r\n";
    $body .="<div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>"."\r\n";
    $body .= $amount."\r\n";
    $body .= "</div>"."\r\n";
    $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
    <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Balance</div>
    <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
    "."\r\n";
    $body .= $balance."\r\n";
    $body .= "</div>"."\r\n";
    $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
    <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Date</div>
    <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
    "."\r\n";
    $body .= $date."\r\n";
    $body .= "</div>"."\r\n";
    $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
    <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Expiry Date</div>
    <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
    "."\r\n";
    $body .= $expiry."\r\n";
    $body .= "</div>"."\r\n";
    $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>"."\r\n";
    $body .= "<div styl= 'color:orange; font-size:15px; font-weight:bold;'>Note:The Date Higlighted Above is the Latest date a payment is made.</div>
    <div style= 'font-weight:bold;'>Kindly Report to the management if any contradiction occurs</div>
    <div style='font-size:12px'>For More Information: <br> Visit us at <a style='text-decoration:none;' href='http://www.nobletutorial.com.ng'>www.nobletutorial.com.ng</a> </div>";
    $body .= "
    </div>
    </body>
    </html>
    ";
    if(mail($email_to, $email_subject , $body , $headers)){
        echo 'Sent Successfully';
    }
?>

