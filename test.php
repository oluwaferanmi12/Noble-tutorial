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

        

?>

<?php 
    
    include('components/header.php');

    
    $query = "SELECT * FROM student_record";
    $execute = mysqli_query($connection , $query);
    while($row = mysqli_fetch_assoc($execute)){
        $name = $row['name'];
        $email = $row['email'];
    

    
    
    // while($row = mysqli_fetch_array($execute)){
        
    // }
    
?>

<div>
    <div style= 'font-size:12px ; color:red; '><?php echo $name?></div>
    <div style= 'font-size:12px ; color:green; '><?php echo $email?></div>

    <?php } ?>
    
</div>






