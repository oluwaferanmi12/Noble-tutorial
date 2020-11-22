<?php $title = 'EditStudent' ; ?>
<?php @include('components/header.php') ?>
<?php confirm_admin_login() ; ?>

<?php 
    $page = @$_GET['page'];
    $limit = 500;
    $query = "SELECT COUNT(id) FROM student_record";
    $execute = mysqli_query($connection , $query);
    $row = mysqli_fetch_array($execute);
    $noOfData= $row[0];
    $paginationPerPage = ceil($noOfData/$limit);
    $previous = $page - 1 ;
    $next = $page + 1;

    
    
?>

<div style='background-color:#E0EFDE; min-height:100vh;'>
    <div><?php echo Success() ;?></div>
    <!-- The Search Button -->
    
    <div style='text-align:right;padding-top:20px;  margin-bottom:20px; margin-right:20px; width:100%; padding-right:20px; display:flex;'>
        <nav aria-label = "Page navigation example" style = "padding-left:10px;">
            <ul class="pagination">
                <?php 
                    if ($page > 1){

                    
                ?>
                <li class="page-item">
                    <a class="page-link" href="editStudent.php?page=<?php echo $previous; ?>">Previous</a>
                </li>

                <?php } ?>
                <?php 
                    for ($i=1; $i <= $paginationPerPage; $i++){

                    
                ?>
                <li class="page-item">
                    <a class="page-link" href="editStudent.php?page=<?php echo $i  ?>"><?php echo $i  ?></a>
                </li>
                <?php } ?>
                <?php 
                    if ($page < $paginationPerPage){

                    
                ?>
                <li class="page-item">
                    <a class="page-link" href="editStudent.php?page=<?php echo $next ;?>">Next</a>
                </li>

                <?php } ?>
            </ul>
        </nav>
        <div style='flex:1;'></div>
        <form class="editStudent-submit" action="editStudent.php" method= "POST" style="">
            <input class='editStudent-input' type="text" name="search" placeholder= 'By Name or Email' style= "height:40px; border-radius:10px ; padding-left:16px;width:300px">
            <input type="submit" value= "Submit" name="Search-Submit" style='font-weight:bold; padding:0px 20px; border-radius:10px; height:40px'>
        </form>
    </div>
    
    <div style='overflow-x:scroll'>
        <table class="table table-hover">
        <thead>
            <tr style='text-align:center;font-size:18px;'>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                
                if (isset($_POST['Search-Submit'])){
                    $search = $_POST['search'];
                    $query = "SELECT * FROM student_record WHERE name LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC";
                }

                else if (isset($_GET['page'])){
                    $page = $_GET['page'];
                    if ($page <= 0 ){
                        $page = 1;
                    }
                    else if ($page > $paginationPerPage){
                        $page = $paginationPerPage ;
                    }
                    $pageToScroll = ($page -1) * $limit;
                    $query = "SELECT * FROM student_record LIMIT $pageToScroll , $limit ";
                }
                else{
                    $query = "SELECT * FROM student_record ORDER by id DESC LIMIT $limit" ;
                }
                $execute = mysqli_query($connection , $query);
                $No = 0;
                while ($row = mysqli_fetch_array($execute)){
                    $No = $No + 1 ;
                    $id = $row['id'];
                    $name = $row['name'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                
            ?>

            <tr style='text-align:center; font-family:monospace; font-size: 16px'>
                <th scope="row"><?php echo $No ;?></th>
                <td class='tableData'><?php echo $name ;?></td>
                <td class='tableData'><?php echo $phone ;?></td>
                <td class='tableData'><?php echo $email ;?></td>
                <td class='tableData '><a class="theLink" href="studentUpdate.php?id=<?php echo $id ; ?>"><div class="theTableData">Update</div></a></td>
                <td class='tableData '><a target="_blank" class= "theLink" href="studentDelete.php?id=<?php echo $id ;?>"><div class="theTableData1">Delete</div></a></td>
                

                
                
            </tr>
        </tbody>

        <?php } ?>

    </table>

    </div>
</div>

</body>
</html>