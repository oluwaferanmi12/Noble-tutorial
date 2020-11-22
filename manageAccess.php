<?php $title = 'manageAccess' ; ?>
<?php @include ('components/header.php')?>
<?php confirm_admin_login() ; ?>


<div style='background-color:#E0EFDE; min-height:80vh;'>
    <div style='display:flex; padding-top:50px; margin-bottom:10px; '>
        <p style= 'margin-left:50px; font-size:20px; font-weight:bold; '>Admins</p>
        <div style = 'display:flex; flex:1;'></div>
        <div style='margin-right:50px;'><a  target="_blank" 
        style='text-decoration:none; color:white;' href="AddUser.php"><div style='background-color:#FF5A5F; border-radius:10px; padding:10px 10px ; font-weight:bold; '>Add Admin</div></a></div>
    </div>
    <?php echo Success() ; ?>

<div class='responsive-table'>
    <table class="table table-hover">
    <thead>
        <tr style='text-align:center; font-size:18px'>
            <th scope="col">Id</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            
        </tr>
    </thead>

    <tbody>
        <?php 
            $query = "SELECT * FROM admin";
            $execution= mysqli_query($connection , $query);
            while($row = mysqli_fetch_array($execution)){
                $id = $row['id'];
                $email =$row['email'];
                $password = $row['password'];

            ?>

            <tr style='text-align:center; font-family:monospace; font-size:16px;'>
                <th scope="row"><?php echo $id ;?></th>
                <td class='tableData'><?php echo $email ;?></td>
                <td class='tableData'><?php echo $password ;?></td>
                <td class='tableData '><a target="_blank" class="theLink" href="AdminEdit.php?id=<?php echo $id ; ?>"><div class="theTableData">Edit</div></a></td>
                <td class='tableData '><a target="_blank" class= "theLink" href="adminDelete.php?id=<?php echo $id ;?>"><div class="theTableData1">Delete</div></a></td>
            </tr>

        <?php }?>
    </tbody>
</table>
</div>

<div class='theSuperAdmin'>
    <p>Super Admin</p>
    <div class='responsive-table'>
                <table class="table table-hover">
        <thead>
            <tr style= "text-align:center; font-size:18px">
                <th scope = "col">Id</th>
                <th scope = "col">Email</th>
                <th scope= "col">Password</th>
                <th scope = "col">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM super_admin";
                $execution = mysqli_query($connection , $query);
                $row = mysqli_fetch_assoc($execution);
                $superAdmin_id = $row['id'];
                
            ?>

            <tr style= 'text-align:center; font-family: monospace; font-size:16px;'>
                <th scope= "row"><?php echo $superAdmin_id ; ?></th>
                <td class = 'tableDate' style='font-weight:bolder;'> SuperAdmin</td>
                <td class='tableData' style= 'font-weight:bolder;'>Password</td>
                <td class='tableData '><a target="_blank" class="theLink" href="superAdminEdit.php?id=<?php echo $superAdmin_id ; ?>"><div class="theTableData">Edit</div></a></td>
            </tr>
            
            
        </tbody>
    </table>
    </div>
</div>

</div>
</body>
</html>