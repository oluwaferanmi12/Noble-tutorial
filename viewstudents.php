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
    <section style= 'padding:10px; background: #E0EFDE; min-height: 100vh;'>
    <div style = 'font-size: 30px; font-weight:bolder;font-family:monospace; margin-bottom:50px; display:flex; flex-direction:row;justify-content:space-around; width:70%; margin:auto; padding-bottom:30px;'><p style='text-decoration: underline; '>STUDENTS RECORD</p>
    <div style='flex:1;'></div>
    <div class= 'search' style= 'text-align:right;'>
        <!-- The Search Form -->
        <form action="viewstudents.php" method= "POST">
            <input class= 'searchInput' type="text" name= 'search' placeholder= "Search By Name or Email">
            <input type='submit' name = 'submit' value='Search' class='submitInput' />
        </form>
        <!-- The Filter By Form  -->
        <form action="viewstudents.php" method= "POST">
            <p style='font-size:16px;display:inline'>Filter By</p>
            <select name="theClass" id="" style= 'font-size:20px'>
                <option value="science">Science</option>
                <option value="art">Art</option>
                <option value="commercial">Commercial</option>
            </select>
            <input type="submit" name = 'filtersubmit' style='font-size:20px;padding:0px 16px; border-radius:8px;' value='Filter'>
        </form>
    </div>
</div>
<table class="table table-hover ">
    <thead>
        <tr style='text-align:center;font-size:18px;'>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Parent's .P</th>
                <th scope="col">Department</th>
                <th scope="col">Area Of Weakness</th>
                <th scope="col">Email</th>
                
                
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
                    $Query = "SELECT * FROM student_record ORDER BY id DESC";
                }
                
                $Execute = mysqli_query($Connection , $Query);
                $No = 0;
                $theList = array();
                
                    while($row = mysqli_fetch_array($Execute)){
                        $No = $No + 1 ;
                        $Name = $row['name'];
                        $Date = $row['date'];
                        $Address = $row['address'];
                        $Phone = $row['phone'];
                        $Pphone = $row['pphone'];
                        $Department = $row['department'];
                        $Subject = $row['subject'];
                        $Email = $row['email'];
                        array_push($theList , $Name);
                        // The Logic behind this array that is here is that it just tries to check the list is set at all , if it is set at any point then it means that a record is found because if the $row should return a particular array , then it means that particular data can be found in the database, then the while loop runs else if the while loop does not run , it means no such data is found in the database thereby making the array empty still

                        
                        
                        
                        ?>
                        
            <tr style='text-align:center; font-family:monospace; font-size:16px;'>
                <th scope="row"><?php echo $No ;?></th>
                <td class='tableData'><?php echo $Name ;?></td>
                <td class='tableData'><?php echo $Date ;?></td>
                <td class='tableData'><?php echo $Address ;?></td>
                <td class='tableData'><?php echo $Phone ;?></td>
                <td class='tableData'><?php echo $Pphone ;?></td>
                <td class='tableData'><?php echo $Department ;?></td>
                <td class='tableData'><?php echo $Subject ;?></td>
                <td class='tableData'><?php echo $Email ;?></td>
                
            </tr>
            
        </tbody>
        
        <?php } ?>

        <?php
            if(empty($theList)){
                $_SESSION['ErrorMessage']= 'No Record Found in the Database';
            }
        ?>
        <div><?php echo message(); ?></div>
</table>
    </section>
    
</body>
</html>