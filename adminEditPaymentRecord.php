<?php $title = 'PaymentRecord' ; ?>
<?php
    @include('components/header.php');
?>
<?php 
    $page = @$_GET['page'];
    $limit = 500;
    $query = "SELECT COUNT(id) FROM payment_record";
    $execute = mysqli_query($connection , $query);
    $row = mysqli_fetch_array($execute);
    $NoOfData = $row[0];
    $NoOfPagination = ceil($NoOfData/$limit);
    $previous = $page -1;
    $next = $page + 1;
    
?>


    <!-- The Search Button and the Filter Button  -->
    
    <section style= 'padding:10px; background: #E0EFDE; min-height: 100vh;  '>
    <div style='  display:flex;'  >
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php if ($page > 1){
                ?>
                <li class= "page-item">
                    <a class="page-link" href="adminEditPaymentRecord.php?page=<?php echo $previous ;?>">Previous</a>
                </li>
                <?php } ?>
                <?php 
                    for ($i=1; $i <= $NoOfPagination; $i++){

                ?>
                <li class="page-item">
                    <a class= "page-link" href="adminEditPaymentRecord.php?page=<?php echo $i ;?>"> <?php echo $i ;?></a>
                </li>
                <?php } ?>

                <?php 
                    if ($page < $NoOfPagination){

                ?>
                <li class= "page-item">
                    <a class="page-link" href="adminEditPaymentRecord.php?page=<?php echo $next ;?>">Next</a>
                </li>

                    
                <?php } ?>
            </ul>
        </nav>
        <div style='flex:1;'></div>
        <form action="paymentRecord.php" method="POST" style='text-align:right; margin-bottom:20px '>
            <input type="text" name='search' placeholder='Search by name' style='height:40px; padding:10px; border-radius:10px;'>
            <input type="submit" name = "submit" style='height:40px; border-radius:10px; padding:0px 10px; font-weight:bold;'>
        </form>
    </div>
        <div class='responsive-table'>
            <table class="table table-hover ">
    <thead>
        <tr style='text-align:center;font-size:18px;'>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Date</th>
                <th scope="col">Balance</th>
                <th scope="col">Expiry</th>
                <th scope="col">Most Recent <br> Payment</th>
                <th scope = "col">Total Paid</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
                <th scope="col">Reset</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                if (isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $Query = "SELECT * FROM payment_record WHERE name LIKE '%$search%'  ORDER BY id DESC";
                }
                else if (isset($_GET['page'])){
                    $page = $_GET['page'];
                    $startPage = ($page -1) * $limit ;
                    $Query = "SELECT * FROM payment_record ORDER BY id DESC LIMIT $startPage , $limit";

                }
                
                
                else{
                    $Query = "SELECT * FROM payment_record ORDER BY id DESC";
                }
                
                $Execute = mysqli_query($connection , $Query);
                $theList = array();
                
                    while($row = mysqli_fetch_array($Execute)){
                        $id = $row['id'];
                        $Name = $row['name'];
                        $email = $row['email'];
                        $Department = $row['department'];
                        $Date = $row['date'];
                        $balance = $row['balance'];
                        $expiry = $row['expiry'];
                        $amount= $row['amount'];
                        $Total = $row['Total_paid'];
                        array_push($theList , $Name);
                        // The Logic behind this array that is here is that it just tries to check the list is set at all , if it is set at any point then it means that a record is found because if the $row should return a particular array , then it means that particular data can be found in the database, then the while loop runs else if the while loop does not run , it means no such data is found in the database thereby making the array empty still

                        
                        
                        
                        ?>
                        
            <tr style='text-align:center; font-family:monospace; font-size:16px;'>
                <th scope="row"><?php echo $id ;?></th>
                <td class='tableData'><?php echo $Name ;?></td>
                <td class='tableData'><?php echo $email ;?></td>
                <td class='tableData'><?php echo $Department ;?></td>
                <td class='tableData'><?php echo $Date ;?></td>
                <td class='tableData'><?php echo $balance ;?></td>
                <td class='tableData'><?php echo $expiry ;?></td>
                <td class='tableData'><?php echo $amount ;?></td>
                <td class='tableData'><?php echo $Total ;?></td>
                <td class='tableData '><a class='theLink' href="paymentUpdate.php?id=<?php echo $id ;?>"><div class='theTableData'>Update</div></a></td>
                <td class='tableData '><a class='theLink' href="paymentDelete.php?id=<?php echo $id ;?>"><div class='theTableData1'>Delete</div></a></td>
                <td class='tableData '><a class='theLink' href="paymentReset.php?id=<?php echo $id ;?>"><div class='theTableData2'>Reset</div></a></td>

                
                
            </tr>
            
        </tbody>
        
        <?php } ?>

        <?php
            if(empty($theList)){
                $_SESSION['ErrorMessage']= 'No Record Found in the Database';
            }
        ?>
        <div style='margin-top:20px'>
            <div><?php echo message(); ?></div>
            <div><?php echo Success(); ?></div>
        </div>
</table>
        </div>
    </section>
</body>
</html>