<?php @include('components/header.php') ?>
</div>
<div><?php echo Success() ;?></div>
    <!-- The Search Button -->
    <div style='text-align:right; margin-top:20px; margin-bottom:20px; margin-right:20px; width:100%; padding-right:20px'>
        <form action="editStudent.php" method= "POST">
            <input type="text" name="search" placeholder= 'Enter Search By Name or Email' style= "height:40px; border-radius:10px ; padding-left:16px;width:20%">
            <input type="submit" value= "Submit" name="Search-Submit" style='font-weight:bold; padding:0px 20px; border-radius:10px; height:40px'>
        </form>
    </div>
    
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
                else{
                    $query = "SELECT * FROM student_record ORDER by id DESC" ;
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
                <td class='tableData theTableData'><a class="theLink" href="studentUpdate.php?id=<?php echo $id ; ?>">Update</a></td>
                <td class='tableData theTableData1'><a class= "theLink" href="studentDelete.php?id=<?php echo $id ;?>">Delete</a></td>
                

                
                
            </tr>
        </tbody>

        <?php } ?>

    </table>
</body>
</html>