<?php $title = "EditComment" ?>
<?php include('components/header.php')?>
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

    <section style='padding:10px; background:#E0EFDE; min-height:100vh'>
        <?php
            $particularPage = isset($_GET['page'])? $_GET['page'] : 1;
            $limit= 50;
            $firstQuery = "SELECT COUNT(*) FROM comments";
            $firstExecution = mysqli_query($connection , $firstQuery);
            $row  = mysqli_fetch_array($firstExecution);
            $TotalNo = $row[0];
            $NoOfPagination = ceil($TotalNo/$limit);
            $prev = $particularPage - 1;
            $next = $particularPage + 1; 
    
        ?>
    <div style='display:flex ; justify-content:space-between;'>
        <nav aria-label="Page navigation example">
        <ul class="pagination">
        <?php 
            if ($particularPage > 1){

            
        ?>
            <li class="page-item"><a class="page-link" href="editComment.php?page= <?php echo $prev?>">Previous</a></li>

            <?php } ?>
            <?php 
                for($i=1; $i <= $NoOfPagination; $i++){

                
            ?>
            <li class="page-item"><a class="page-link" href="editComment.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>

            <?php } ?>
            <?php 
                if ($particularPage < $NoOfPagination){

                
            ?>
            <li class="page-item"><a class="page-link" href="editComment.php?page=<?php echo $next ?>">Next</a></li>

            <?php } ?>

            

        </ul>
    </nav>

    <div >
        <form action="editComment.php" method="POST" style='float:right; margin-bottom:20px '>
            <input type="text" name='search' placeholder='Search by comment' style='height:40px; padding:10px; border-radius:10px;'>
            <input type="submit" name = "submit" style='height:40px; border-radius:10px; padding:0px 10px; font-weight:bold;'>
        </form>
    </div>
    </div>

    <table class='table table-hover'>
        <div style='margin-top:50px'><?php echo success() ?></div>
        <div style='margin-top:50px'><?php echo message() ?></div>

        <thead>
            <tr style='text-align:center; font-size:18px'>
                <th scope="col">id</th>
                <th scope="col">blogid</th>
                <th scope="col">email</th>
                <th scope="col">comment</th>
                <th scope="col">date</th>
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>
            <?php 

                if (isset($_GET['page'])){
                    if ($particularPage <= 0){
                        $particularPage = 1;
                    }
                    else if ($particularPage > $NoOfPagination){
                        $particularPage = $NoOfPagination;
                    }
                    $start = ($particularPage-1) * $limit;
                    $query = "SELECT * FROM comments ORDER BY id DESC LIMIT $start , $limit" ;
                }
                else if (isset($_GET['commentid'])){
                    $idToDelete = $_GET['commentid'];
                    $query = "DELETE FROM comments WHERE id = $idToDelete";
                }
                else if(isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $query = "SELECT * FROM comments WHERE comment like '%$search%' ORDER BY id DESC";
                }
                else{
                    $query = "SELECT * FROM comments ORDER BY id DESC LIMIT $limit";
                }
                $execution = mysqli_query($connection ,$query);
                if($execution && isset($_GET['commentid'])){
                    if ($execution){
                        $_SESSION['SuccessMessage'] = "Comment Deleted Successfully";
                        header('Location:editComment.php');
                    }
                    else{
                        $_SESSION['ErrorMessage'] = "Comment Not Deleted";
                    }
                }
                while($row = mysqli_fetch_array($execution)){

                
            ?>
            <tr style='text-align:center; font-family:monospace; font-size:16px;'>
                <td scope='tableData'><?php echo $row['id']?></td>
                <td scope='tableData'><?php echo $row['blogid'] ?></td>
                <td scope='tableData'><?php echo $row['email'] ?></td>
                <td scope='tableData'><?php echo $row['comment']?></td>
                <td scope='tableData'><?php echo $row['date']?></td>
                <td><a class='delete' href="editComment.php?commentid='<?php echo $row['id'] ?>'">Delete</a></td>
                
            </tr>

            <?php } ?>
        </tbody>
    </table>
    </section>
</body>

