<?php $title = "EditBlog" ?>
<?php include('components/header.php') ?>

<style>
    .delete{
        background: red ;
    }

    a.delete{
        text-decoration:none;
        color:white;
        width:80px;
        height:40px;
        padding:10px 30px;
        border-radius:10px ;
    }
</style>

<section style='padding:10px; background:#E0EFDE ; min-height:100vh;'>

<?php
    $particularPage = isset($_GET['page'])? $_GET['page'] : 1;
    $limit= 10;
    $firstQuery = "SELECT COUNT(*) FROM blog";
    $firstExecution = mysqli_query($connection , $firstQuery);
    $row  = mysqli_fetch_array($firstExecution);
    $TotalNo = $row[0];
    $NoOfPagination = ceil($TotalNo/$limit);
    $prev = $particularPage - 1;
    $next = $particularPage + 1; 
    
?>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
        <?php 
            if ($particularPage > 1){

            
        ?>
            <li class="page-item"><a class="page-link" href="editBlog.php?page= <?php echo $prev?>">Previous</a></li>

            <?php } ?>
            <?php 
                for($i=1; $i <= $NoOfPagination; $i++){

                
            ?>
            <li class="page-item"><a class="page-link" href="editBlog.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>

            <?php } ?>
            <?php 
                if ($particularPage < $NoOfPagination){

                
            ?>
            <li class="page-item"><a class="page-link" href="editBlog.php?page=<?php echo $next ?>">Next</a></li>

            <?php } ?>

            

        </ul>
    </nav>
    <div >
        <form action="editBlog.php" method="POST" style='float:right; margin-bottom:20px '>
            <input type="text" name='search' placeholder='Search by name' style='height:40px; padding:10px; border-radius:10px;'>
            <input type="submit" name = "submit" style='height:40px; border-radius:10px; padding:0px 10px; font-weight:bold;'>
        </form>
    </div>

    <table class='table table-hover'>
        <thead>
    <div style='margin-top:50px'> <?php echo success(); ?> </div>
            <tr style='text-align:center; font-size:18px'>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">content</th>
                <th scope="col">image</th>
                <th scope="col">Delete</th>

                
            </tr>
        </thead>
        <tbody>
        <?php 
            if(isset($_GET['blogid'])){
                
                $idToDelete = $_GET['blogid'];
                
                $query = "DELETE FROM blog WHERE id = $idToDelete";
            }

            else if (isset($_GET['page'])){
                if ($particularPage < 1){
                    $particularPage = 1;
                }
                else if ($particularPage > $NoOfPagination){
                    $particularPage = $NoOfPagination;
                }
                
                $start = ($particularPage - 1) * $limit;
                
                
                $query = "SELECT * FROM blog ORDER BY id DESC LIMIT $start , $limit";
                $execution = mysqli_query($connection , $query);
                
            }
            else if(isset($_POST['submit'])){
                $search = $_POST['search'];
                $query = "SELECT * FROM blog WHERE header like '%$search%'";
                
            }
            else{
                $query= "SELECT * FROM BLOG ORDER BY id DESC LIMIT $limit";
                
                
            }
            

            $execution = mysqli_query($connection , $query);
            // This is to ensure that a message is shown to know that the data has been deleted
            if ($execution && isset($_GET['blogid'])){
                $_SESSION['SuccessMessage']= 'Blog Deleted Successfully';
                header('Location:editBlog.php');
            }
            
            while($row=mysqli_fetch_array($execution)){
                
                $theContent = file_get_contents('upload/'.$row['content']);
            
        ?>
            <tr style='text-align:center; font-family:monospace; font-size:16px;'>
                <td scope='tableData'><?php echo $row['id']?></td>
                <td scope='tableData'><?php echo $row['header'] ?></td>
                <td scope='tableData'><?php echo substr($theContent , 0 , 100)?></td>
                <td scope='tableData'><img style='width:100px; height:100px' src="upload/<?php echo $row['image']?>" alt=""></td>
                <td><a class='delete' href="editBlog.php?blogid='<?php echo $row['id'] ?>'">Delete</a></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>

</section>

</body>