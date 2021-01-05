<?php include ('components/header_2.php')?>
<?php $resources = 'theactive' ?>
<?php include ('components/nav.php')?>
<?php include ('connection.php') ?>
<?php include ('session.php') ?>

<?php 
    if (isset($_POST['submit'])){
        $studentId = $_POST['studentId'];
        $studentToken = $_POST['studentToken'];
        if (empty($studentId) || empty($studentToken)){
            $_SESSION['ErrorMessage'] = "All Fields Are Required";
        }
        else{
            $studentQuery = "SELECT * FROM student_record WHERE student_id = '$studentId'";
            $studentExecution = mysqli_query($connection , $studentQuery);
            $studentRow = mysqli_fetch_assoc($studentExecution);
            $tokenQuery = "SELECT * FROM token WHERE token = '$studentToken' ";
            $tokenExecution = mysqli_query ($connection , $tokenQuery);
            $tokenRow = mysqli_fetch_assoc($tokenExecution);
            if (empty($studentRow) && empty($tokenRow)){
                $_SESSION['ErrorMessage']= 'Incorrect StudentId and Token';
            }
            else if (empty($studentRow)){
                $_SESSION['ErrorMessage'] = "Incorrect Student Id";
            }
            else if (empty($tokenRow)){
                $_SESSION['ErrorMessage'] = "Incorrect Token";

            }

            else if ($tokenRow && $studentRow){
                $delQuery = "DELETE FROM token WHERE token = '$studentToken'";
                $delExecution = mysqli_query($connection , $delQuery);
                if ($delExecution){
                    echo "Deleted Successfully";
                }
            }
        }
    }

?>

<form action="newResources.php" method='POST' class='token-login'>
    <?php echo message() ;?>
    <p >Student Id</p>
    <input type='text' name="studentId" placeholder='Enter Id' class='resource-input'>
    <p>Token</p>
    <input type= 'text' name="studentToken" placeholder = 'Enter Generated Token' class='resource-input'>
    <br>
    <input type="submit" name='submit' class='resource-submit'>
    <br>
    <div class='resource-note'>Note:Generated Token Can Only Be Used Once.</div>
</form>


<?php include('components/end.php')?>