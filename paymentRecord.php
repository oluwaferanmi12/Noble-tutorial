<?php $title = 'PaymentRecord' ; ?>
<?php
    @include('components/header.php');
?>

<?php 
    $page = @$_GET['page'];
    $theFirstQuery = "SELECT COUNT(id) FROM payment_record";
    $theExecution = mysqli_query($connection , $theFirstQuery);
    $theRow = mysqli_fetch_array($theExecution)  ;
    $theTotalData = $theRow[0];
    $limit = 500;
    $totalPagination = ceil($theTotalData/$limit);
    $next = $page + 1;
    $previous = $page -1;
    
    
?>


    <!-- The Search Button and the Filter Button  -->
    
    <section style= 'padding:10px; background: #E0EFDE; min-height: 100vh;'>
    <div style='display:flex;'>
        
        <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php 
                if ($page > 1 ){
                    
                
            ?>
            <li class="page-item"><a class="page-link" href="paymentRecord.php?page=<?php echo $page -1 ;?>">Previous</a></li>
                <?php } ?>
            <?php 
                for ($i = 1; $i <= $totalPagination; $i++){
            ?>
            <li class="page-item"><a class="page-link" href="paymentRecord.php?page=<?php echo $i ?>"> <?php echo $i ;?></a></li>
            <?php } ?>

            <?php 
            if ($page < $totalPagination){
                
            ?>
            <li class="page-item"><a class="page-link" href="paymentRecord.php?page=<?php echo $page + 1; ?>">Next</a></li>

            <?php } ?>

        </ul>
    </nav>
    <div style='flex:1'></div>
    <div>
        <form action="paymentRecord.php" method="POST" style=' margin-bottom:0px ; text-align:right;'>
            <input type="text" name='search' placeholder='Search by ID' style='height:40px; padding:10px; border-radius:10px;'>
            <input type="submit" name = "submit" style='height:40px; border-radius:10px; padding:0px 10px; font-weight:bold;'>
        </form>
    </div>
    </div>
        <div class='responsive-table'>
            <table class="table table-hover ">
    <thead>
        <?php echo success() ?>
        <tr style='text-align:center;font-size:18px;'>
                <th scope="col">id</th>
                <th scope="col">student_id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Date</th>
                <th scope="col">Balance</th>
                <th scope="col">Expiry</th>
                <th scope="col">Most Recent <br> Payment</th>
                <th scope = "col">Total Paid</th>
                <th scope = "col">To Be Paid</th>
                <th scope = "col">Subscription</th>
                
        </tr>
    </thead>
    <tbody>
            <?php
                
                if (isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $Query = "SELECT * FROM payment_record WHERE student_id LIKE '%$search%'  ORDER BY id DESC";
                }
                
                else if (isset($_GET['page'])){
                    if ($page <= 0){
                        $noOfContent = 0;
                    }
                    else if ($page > $totalPagination){
                        $noOfContent= $theTotalData - $limit;
                    }
                    else{
                        $noOfContent = ($page -1) * $limit;
                    }

                    // The $noOfContent takes the index that is the position to start Picking from , Also whatever the no that is used to multiply the page in the first place is also what should be used to be the no of data to be fetched from the database  , if this is not done , then it is definitely sure that mistakes would happen, to be specific omission of data would happen
                    $Query = "SELECT * FROM payment_record LIMIT $noOfContent,$limit ORDER BY time DESC";
                }
                
                else{
                    $Query = "SELECT * FROM payment_record ORDER BY time DESC LIMIT $limit";
                    
                }
                
                $Execute = mysqli_query($connection , $Query);
                $theList = array();
                
                    $no = 0 ;
                    while($row = mysqli_fetch_array($Execute)){
                        $no = $no + 1;
                        $id = $row['id'];
                        $Name = $row['name'];
                        $student_id = $row['student_id'];
                        $email = $row['email'];
                        $Department = $row['department'];
                        $Date = $row['date'];
                        $balance = $row['balance'];
                        $expiry = $row['expiry'];
                        $amount= $row['amount'];
                        $Total = $row['Total_paid'];
                        $toBePaid = $row['To_Be_Paid'];
                        $subscription = $row['subscription'];
                        array_push($theList , $Name);
                        // The Logic behind this array that is here is that it just tries to check the list is set at all , if it is set at any point then it means that a record is found because if the $row should return a particular array , then it means that particular data can be found in the database, then the while loop runs else if the while loop does not run , it means no such data is found in the database thereby making the array empty still

                        
                        
                        
                        ?>
                        
            <tr style='text-align:center; font-family:monospace; font-size:16px;'>
                <th scope="row"><?php echo $no ;?></th>
                <td class='tableData'><?php echo $student_id ;?></td>
                <td class='tableData'><?php echo $Name ;?></td>
                <td class='tableData'><?php echo $email ;?></td>
                <td class='tableData'><?php echo $Department ;?></td>
                <td class='tableData'><?php echo $Date ;?></td>
                <td class='tableData'><?php echo $balance ;?></td>
                <td class='tableData'><?php echo $expiry ;?></td>
                <td class='tableData'><?php echo $amount ;?></td>
                <td class='tableData'><?php echo $Total ;?></td>
                <td class='tableData'><?php echo $toBePaid ;?></td>
                <td class='tableData'><?php echo $subscription ;?></td>
                

                
                
            </tr>
            
    </tbody>
        
        <?php } ?>

        <?php
            if(empty($theList)){
                $_SESSION['ErrorMessage']= 'No Record Found in the Database';
            }
        ?>
        <div style='margin-top:10px'>
            <div><?php echo message(); ?></div>
            <div><?php echo Success(); ?></div>
        </div>
</table>

        </div>
    </section>
</body>
</html>