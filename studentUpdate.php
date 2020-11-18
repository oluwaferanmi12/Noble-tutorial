<?php include ('session.php') ;?>
<?php include ('connection.php') ?>
<?php include('functions.php') ?>
<?php confirm_login() ?>
<?php 
    $student_id = $_GET['id'];
    
    $query = "SELECT * FROM student_record WHERE id = '$student_id'";
    $Execute = mysqli_query($connection , $query);
    $row = mysqli_fetch_array($Execute);
    $name = $row['name'];
    $date = $row['date'];
    $class = $row['class'];
    $sex = $row['sex'];
    $address = $row['address'];
    $state = $row['state'];
    $nationality = $row['nationality'];
    $religion = $row['religion'];
    $phone = $row['phone'];
    $pphone  = $row['pphone'];
    $department = $row['department'];
    $subject = $row['subject'];
    $email = $row['email']; 
?>
<?php 
    $nameError = '';
    $dateError= '';
    $classError= '';
    $sexError= '';
    $addressError= '';
    $stateError = '';
    $nationalityError = '';
    $religionError = '';
    $phoneError = '';
    $pphoneError = '';
    $departmentError = '';
    $subjectError = '';
    $emailError = '';
    if(isset($_POST['submit'])){
        if (empty($_POST['name'])){
            $nameError = "* Name is Required *";
        }
        else{
            $name = $_POST['name'];
        }
        if (empty($_POST['date'])){
            $dateError = "* Date is Required *";
        }
        else{
            $date = $_POST['date'];
        }
        if (empty($_POST['class'])){
            $classError = "* Class is Required *";
        }
        else{
            $class = $_POST['class'];
        }
        if (empty($_POST['sex'])){
            $sexError = "* Sex is Required *";
        }
        else{
            $sex = $_POST['sex'];
        }
        if (empty($_POST['address'])){
            $addressError = "* Address is Required *";
        }
        else{
            $address = $_POST['address'];
        }
        if (empty($_POST['state'])){
            $stateError = "* State is Required *";
        }
        else{
            $state = $_POST['state'];
        }
        if (empty($_POST['nationality'])){
            $nationalityError = "* Nationality is Required *";
        }
        else{
            $nationality = $_POST['nationality'];
        }
        if (empty($_POST['religion'])){
            $religionError = "* Religion is Required *";
        }
        else{
            $religion = $_POST['religion'];
        }
        if (empty($_POST['phone'])){
            $phoneError = "* Phone is Required *";
        }
        else{
            $phone= $_POST['phone'];
        }
        if (empty($_POST['pphone'])){
            $pphoneError = "* Parent's Phone No Required *";
        }
        else{
            $pphone = $_POST['pphone'];
        }
        if (empty($_POST['department'])){
            $departmentError = "* Department is Required *";
        }
        else{
            $department = $_POST['department'];
        }
        if (empty($_POST['SubjectOfWeakness'])){
            $subjectError = "* Subject Area of Weakness Required *";
        }
        else{
            $subject  = $_POST['SubjectOfWeakness'];
        }
        if (empty($_POST['email'])){
            $emailError = "* Email is Required *";
        }
        else{
            $email = $_POST['email'];
        }

        if(isset($name) && isset($date) && isset($class) && isset($sex) && isset($address) && isset($state) && isset($nationality) && isset($religion) && isset($phone) && isset($pphone) && isset($department) && isset($subject) && isset($email)){
            $updated_id = $_GET['id'];
            $updated_name = $_POST['name'];
            $updated_date = $_POST['date'];
            $updated_class = $_POST['class'];
            $updated_sex = $_POST['sex'];
            $updated_address = $_POST['address'];
            $updated_state = $_POST['state'];
            $updated_nationality = $_POST['nationality'];
            $updated_religion = $_POST['religion'];
            $updated_phone= $_POST['phone'];
            $updated_pphone = $_POST['pphone'];
            $updated_department = $_POST['department'];
            $updated_subject = $_POST['SubjectOfWeakness'];
            $updated_email = $_POST['email'];
            
            $query = "UPDATE student_record SET name = '$updated_name', date = '$updated_date' , class = '$updated_class' , sex= '$updated_sex', address = '$updated_address' , state='$updated_state', nationality ='$updated_nationality', religion = '$updated_religion' , phone = '$updated_phone', pphone = '$updated_pphone' , department= '$updated_department' , subject = '$updated_subject' , email = '$updated_email' WHERE id = '$updated_id' ";
            $Execute = mysqli_query($connection , $query);
            if ($Execute){
                $_SESSION['SuccessMessage'] = "Updated Successfully";
                header('location:editStudent.php');
            }
            else{
                'Could Not Connect to the Database';
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StudentUpdate</title>    
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous"
        />
        
        <!-- JS, Popper.js, and jQuery -->
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
    <link rel="stylesheet" href="newveiwstudent.css?v=<?php echo time() ?>">

    
</head>
<body>
    <div id = 'Header'>
        <div style = " height: 100%; padding-top: 20px;"><h3> <span style= "color:#fff; font-family: Helvetica" >Noble</span> Tutorial Class</h3>
        <p></p>
        <p style= "color: #fff; margin-top:8px" >(We deliver result with confidence)</p>
        </div>
    </div>
    <!-- THe Search Button  -->
    <div>
        
    </div>
    <div class="row theRow" style="background-color:  #f8f4f4;" >
        <div class="offset-lg-1 col-lg-10 theFirstCol">
            <div >
                <form action="studentUpdate.php?id=<?php echo $student_id?>" method="POST" class="theForm">
                    <div class="row" style="padding-top: 35px;">
                        <div class="col-lg-12" style="text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bolder; text-decoration: underline; letter-spacing: 0.04em;">Update <?php echo $name?>'s Record </div>
                        <div class="offset-1 col-lg-5" >
                            <p>Name</p>
                            <input type="text" name="name" value = '<?php echo $name ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $nameError;?></div>
                            <p>Date of Birth</p>
                            <input type="text" name="date" value = '<?php echo $date ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $dateError;?></div>
                            <p>Class</p>
                            <input type="text" name="class" value = '<?php echo $class ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $classError;?></div>
                            <p>Sex</p>
                            <input type="text" name="sex" value = '<?php echo $sex ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $sexError;?></div>
                            <p>Address</p>
                            <input type="text" name="address" value = '<?php echo $address; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $addressError;?></div>
                            <p>State of Origin</p>
                            <input type="text" name="state" value = '<?php echo $state;  ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $stateError;?></div>
                            <p>Nationality</p>
                            <input type="text" name="nationality" value = '<?php echo $nationality; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $nationalityError;?></div>
                        </div>
                        <div class="col-lg-5">
                            <p>Religion</p>
                            <input type="text" name="religion" value = '<?php echo $religion; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $religionError;?></div>
                            <p>Phone Number</p>
                            <input type="text" name="phone" value = '<?php echo $phone ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $phoneError;?></div>
                            <p>Parent's Phone Number</p>
                            <input type="text" name="pphone" value = '<?php echo $pphone; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $pphoneError;?></div>
                            <p>Department</p>
                            <input type="text" name="department" value = '<?php echo $department; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $departmentError;?></div>
                            <p>Subject Area of Weakness</p>
                            <input type="text" name="SubjectOfWeakness" value = '<?php echo $subject; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $subjectError;?></div>
                            <p>Email Address</p>
                            <input type="text" name="email" value = '<?php echo $email; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $emailError;?></div>
                            <input name = submit class="Submit" type="submit" value="Update" style="margin-top: 22px; background-color: #ed5f4f; width: 80%; margin-left: auto; display: block; margin-right: auto; color: black; font-weight: bold;letter-spacing: 0.04em; font-size: 20px;">
                            
                        </div>
                    </div>
                

                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>