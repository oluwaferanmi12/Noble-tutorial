<?php include('session.php'); ?>
<?php include('functions.php') ?>
<?php include ('connection.php') ?>
<?php confirm_login() ?>
<?php 
    
    if(isset($_POST['yes'])){
        $delete_id = $_GET['delete_id'];
        
        $query = "DELETE FROM student_record WHERE ID= '$delete_id'";
        $execute = mysqli_query($connection , $query);
        if ($execute){
            $_SESSION['SuccessMessage'] = "Deleted Successfully";
            header('location:editStudent.php');
    }
}
        if (isset($_POST['no'])){
            header('location:editStudent.php');
        }
?>

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
    <link rel="stylesheet" href=""/>
    <title>Document</title>
</head>
<body style='background:#E0EFDE;'>
    <div style= "text-align:center;margin-top:50px">
        <form action="studentDelete.php?delete_id=<?php echo $_GET['id']; ?>" method= "POST">
            <p style='font-weight: bolder; font-size:20px'>Are You Sure You Want To Delete?</p>
            <input style="padding:10px 50px; font-size:18px; background: #ff3c38; border:none; border-radius:8px; font-weight:bold;" type="submit" value='Yes' name='yes'>
            
            <input style="padding:10px 50px; font-size:18px; background:#2de1c2; font-weight:bold; border:none; border-radius:8px;" type="submit" value ='No' name='no'>
        </form>
    </div>
</body>
</html>