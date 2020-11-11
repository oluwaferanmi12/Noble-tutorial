<?php 
    include ('session.php');
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
    <link rel="stylesheet" href="newveiwstudent.css?v=<?php echo time(); ?>"/>
    <title>Document</title>
</head>
<body>
    <div id = 'Header'>
        <div style = " height: 100%; padding-top: 20px;"><h3> <span style= "color:#fff; font-family: Helvetica" >Noble</span> Tutorial Class</h3>
        <p></p>
        <p style= "color: #fff; margin-top:8px" >(We deliver result with confidence)</p>
        </div>
    </div>
    <!-- The Search Button and the Filter Button  -->
    
    <section style= 'padding:10px; background: #E0EFDE; min-height: 100vh;'>
        <table class="table table-hover ">
    <thead>
        <tr style='text-align:center;font-size:18px;'>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Date</th>
                <th scope="col">Balance</th>
                <th scope="col">Expiry</th>
                <th scope="col">Amount</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>

                
                
                
            </tr>
        </thead>
        <tbody>
            <?php
                $Connection = mysqli_connect ('localhost' , 'root' , '' , 'noble');
                if (isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $Query = "SELECT * FROM student_record WHERE name LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC";
                }
                else if(isset($_POST['filtersubmit'])){
                    $class = $_POST['theClass'];
                    $Query = "SELECT * FROM student_record WHERE department LIKE '%$class%' ORDER BY id DESC";
                }
                else{
                    $Query = "SELECT * FROM payment_record ORDER BY id DESC";
                }
                
                $Execute = mysqli_query($Connection , $Query);
                $theList = array();
                
                    while($row = mysqli_fetch_array($Execute)){
                        $id = $row['id'];
                        $Name = $row['name'];
                        $Department = $row['department'];
                        $Date = $row['date'];
                        $balance = $row['balance'];
                        $expiry = $row['expiry'];
                        $amount= $row['amount'];
                        array_push($theList , $Name);
                        // The Logic behind this array that is here is that it just tries to check the list is set at all , if it is set at any point then it means that a record is found because if the $row should return a particular array , then it means that particular data can be found in the database, then the while loop runs else if the while loop does not run , it means no such data is found in the database thereby making the array empty still

                        
                        
                        
                        ?>
                        
            <tr style='text-align:center; font-family:monospace; font-size:16px;'>
                <th scope="row"><?php echo $id ;?></th>
                <td class='tableData'><?php echo $Name ;?></td>
                <td class='tableData'><?php echo $Department ;?></td>
                <td class='tableData'><?php echo $Date ;?></td>
                <td class='tableData'><?php echo $balance ;?></td>
                <td class='tableData'><?php echo $expiry ;?></td>
                <td class='tableData'><?php echo $amount ;?></td>
                <td class='tableData theTableData'><a class='theLink' href="paymentUpdate.php?id=<?php echo $id ;?>">Update</a></td>
                <td class='tableData theTableData1'><a class='theLink' href="paymentDelete?id=<?php echo $id ;?>">Delete</a></td>
                
                
            </tr>
            
        </tbody>
        
        <?php } ?>

        <?php
            if(empty($theList)){
                $_SESSION['ErrorMessage']= 'No Record Found in the Database';
            }
        ?>
        <div><?php echo message(); ?></div>
        <div><?php echo Success(); ?></div>
</table>
    </section>
</body>
</html>