<?php $title = 'InsertPayment' ; ?>
<?php @include ('components/header.php')?>


<?php 
    $display= '';
    $tabledisplay = 'none';
    $checker = @$_GET['v'];
    if ($checker){
        $display= 'none';
        $tabledisplay = '';
    }

    $secondChecker = @$_GET['checked'];
    if ($secondChecker){
        $tabledisplay = 'none';
        $display = '';
    }

    if (isset($_POST['submit'])){
        $used_for = $_POST['for'];
        $currentTime = time();
        $date = strftime("%d-%B-%Y", $currentTime) ;
        $amount = $_POST['amount'];
        if (empty($used_for) || empty($amount) ){
            $_SESSION['ErrorMessage'] = "All Fields Are Required";
        }
        else{
            $query= "INSERT INTO expenses (date , used_for , amount) VALUES ('$date' , '$used_for' , '$amount')";
            $execution = mysqli_query($connection , $query);
            if ($execution){
                $_SESSION['SuccessMessage'] = "Successfully Inserted Payment";
            }
            else{
                $_SESSION['ErrorMessage'] = "Could Not connect to the Database";
            }
        }
    }
?>



<!-- INSERTING OF THE EXPENSES INTO THE DATABASE -->
<div style='background-color:#E0EFDE; min-height:100vh; display:<?php echo $display ?>;'>
    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px'>Insert Expense</div>
    <div style='padding-left:20px; text-align:center; '><a class='manageLink' href="expenses.php?v='true'"><div style='background-color:#e53420 ; width:20%; height:40px; padding-right:10px; padding-left:10px; color:white; border-radius:8px; padding-top:4px;'>Veiw Expenses</div></a></div>

    <section id='insertPayment'>
        <form action="expenses.php" method="POST" class='theForm'>
            <?php echo message() ?>
            <?php echo success() ?>
            <p>For</p>
            <input type="text" name= 'for'>
            <p>Amount</p>
            <input type="text" name= "amount" value= 0> 
            <br>
            <input type="submit" name = 'submit' class='submit'>
        </form>
    </section>
</div>

<!-- VEIWING OF THE EXPENSES IN THE DATABASE -->

<div style= 'display:<?php echo $tabledisplay;?>; background-color:#E0EFDE; min-height:100vh;' >
    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px'>Expenses</div>
    <div style='padding-left:20px; text-align:center; '><a class='manageLink' href="expenses.php?checked='true'"><div style='background-color:#e53420 ; width:12%; height:40px; padding-right:10px; padding-left:10px; color:white; border-radius:8px; padding-top:4px;'>Insert Expenses</div></a></div>
    <table class="table table-hover ">
        <thead>
            <tr style='text-align:center; font-size:18px'>
                <th scope='col'>No</th>
                <th scope = 'col'>Date</th>
                <th scope='col'>For</th>
                <th scope = 'col'>Amount</th>

            </tr>
        </thead>

        <tbody>
            <?php 
                $query = "SELECT * FROM expenses ORDER BY id desc";
                $execution = mysqli_query($connection , $query);
                $No = 0;
                while($row=mysqli_fetch_array($execution)){
                    $No = $No + 1;
                    $date = $row['date'];
                    $for = $row['used_for'];
                    $amount = $row['amount'];
            
            ?>
                <tr style='text-align:center; font-family:monospace; font-size:16px;'>
                    <th scope='row'><?php echo $No ; ?></th>
                    <td class ='tableData'> <?php echo $date; ?></td>
                    <td class= 'tableData'> <?php echo $for; ?></td>
                    <td class = 'tableData'><?php echo $amount ;?></td>
                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>
