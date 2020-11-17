
<?php include ('components/header.php'); ?>
<?php 
    $nameError = '';
    $dateError= '';
    $classError= '';
    $sexError= '';
    $addressError= '';
    $stateError = '';
    $nationalityError = '';
    $religionError = '';
    $phoneError = '';
    $pphoneError = '';
    $departmentError = '';
    $subjectError = '';
    $emailError = '';
    $name = '';
    $date = '';
    $class = '';
    $sex = '';
    $address = '';
    $state = '';
    $nationality = '';
    $religion = '';
    $phone = '';
    $pphone = '';
    $department = '';
    $subject = '';
    $email = '';
    if(isset($_POST['submit'])){
        if (empty($_POST['name'])){
            $nameError = "* Name is Required *";
        }
        else{
            $name = $_POST['name'];
        }
        if (empty($_POST['date'])){
            $dateError = "* Date is Required *";
        }
        else{
            $date = $_POST['date'];
        }
        if (empty($_POST['class'])){
            $classError = "* Class is Required *";
        }
        else{
            $class = $_POST['class'];
        }
        if (empty($_POST['sex'])){
            $sexError = "* Sex is Required *";
        }
        else{
            $sex = $_POST['sex'];
        }
        if (empty($_POST['address'])){
            $addressError = "* Address is Required *";
        }
        else{
            $address = $_POST['address'];
        }
        if (empty($_POST['state'])){
            $stateError = "* State is Required *";
        }
        else{
            $state = $_POST['state'];
        }
        if (empty($_POST['nationality'])){
            $nationalityError = "* Nationality is Required *";
        }
        else{
            $nationality = $_POST['nationality'];
        }
        if (empty($_POST['religion'])){
            $religionError = "* Religion is Required *";
        }
        else{
            $religion = $_POST['religion'];
        }
        if (empty($_POST['phone'])){
            $phoneError = "* Phone is Required *";
        }
        else{
            $phone= $_POST['phone'];
        }
        if (empty($_POST['pphone'])){
            $pphoneError = "* Parent's Phone No Required *";
        }
        else{
            $pphone = $_POST['pphone'];
        }
        if (empty($_POST['department'])){
            $departmentError = "* Department is Required *";
        }
        else{
            $department = $_POST['department'];
        }
        if (empty($_POST['SubjectOfWeakness'])){
            $subjectError = "* Subject Area of Weakness Required *";
        }
        else{
            $subject  = $_POST['SubjectOfWeakness'];
        }
        if (empty($_POST['email'])){
            $emailError = "* Email is Required *";
        }
        else{
            $email = $_POST['email'];
        }
        

        if(!empty($name) && !empty($date) && !empty($class) && !empty($sex) && !empty($address) && !empty($state) && !empty($nationality) && !empty($religion) && !empty($phone) && !empty($pphone) && !empty($department) && !empty($subject) && !empty($email)){
            
            $query = "INSERT INTO student_record (name , date , class ,sex , address , state ,nationality , religion , phone , pphone , department , subject ,email ) VALUES ('$name' , '$date' , '$class' , '$sex' , '$address' , '$state' , '$nationality' , '$religion' , '$phone' , '$pphone', '$department', '$subject','$email')";
            $Execute = mysqli_query($connection , $query);
            if ($Execute){
                $_SESSION['SuccessMessage'] = "REGISTERED SUCCESSFULLY";
                $name = '';
                $date = '';
                $class = '';
                $sex = '';
                $address = '';
                $state = '';
                $nationality = '';
                $religion = '';
                $phone = '';
                $pphone = '';
                $department = '';
                $subject = '';
                $email = '';
            }
            else{
                'Could Not Connect to the Database';
            }
        }
    }


?>

    <div class="row theRow" style="background-color:  #f8f4f4; padding-bottom:50px" >
        <div class="offset-lg-1 col-lg-10 theFirstCol" style= 'padding-bottom:40px;'>
            <div >
                <form action="RegisterStudent.php" method="POST" class="theForm">
                    <div class="row" style="padding-top: 35px;">
                        <div class="col-lg-12" style="text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bolder; text-decoration: underline; letter-spacing: 0.04em;">REGISTRATION FORM</div>
                        <?php echo Success() ;?>
                        <div class="offset-1 col-lg-5" >
                            <p>Name</p>
                            <input type="text" name="name" value='<?php echo $name ; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $nameError;?></div>
                            <p>Date of Birth</p>
                            <input type="date" name="date" value='<?php echo $date; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $dateError;?></div>
                            <p>Class</p>
                            <input type="text" name="class" value='<?php echo $class;?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $classError;?></div>
                            <p>Sex</p>
                            <select class='theSelect' type="text" name="sex" value='<?php echo $sex; ?>'>
                                <option value="Male">Male</option>
                                <option value="Femail">Female</option>
                            </select>
                            <div style='color: red; font-size: 12px;'><?php echo $sexError;?></div>
                            <p>Address</p>
                            <input type="text" name="address" value='<?php echo $address ;  ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $addressError;?></div>
                            <p>State of Origin</p>
                            <select class='theSelect' type="text" name="state" value='<?php echo $state ; ?>'> 
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross Rive">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT">Federal Capital Territory</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                            </select>
                            <div style='color: red; font-size: 12px;'><?php echo $stateError;?></div>
                            <p>Nationality</p>
                            <select class='theSelect' type="text" name="nationality" value='<?php $nationality ;?>'>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="algeria">Algeria</option>
                                    <option value="angola">Angola</option>
                                    <option value="benin">Benin</option>
                                    <option value="botswana">Botswana</option>
                                    <option value="burkina Faso">Burkina Faso</option>
                                    <option value="burundi">Burundi</option>
                                    <option value="cameroon">Cameroon</option>
                                    <option value="cape-verde">Cape Verde</option>
                                    <option value="central-african-republic">Central African Republic</option>
                                    <option value="chad">Chad</option>
                                    <option value="comoros">Comoros</option>
                                    <option value="congo-brazzaville">Congo - Brazzaville</option>
                                    <option value="congo-kinshasa">Congo - Kinshasa</option>
                                    <option value="ivory-coast">Côte d’Ivoire</option>
                                    <option value="djibouti">Djibouti</option>
                                    <option value="egypt">Egypt</option>
                                    <option value="equatorial-guinea">Equatorial Guinea</option>
                                    <option value="eritrea">Eritrea</option>
                                    <option value="ethiopia">Ethiopia</option>
                                    <option value="gabon">Gabon</option>
                                    <option value="gambia">Gambia</option>
                                    <option value="ghana">Ghana</option>
                                    <option value="guinea">Guinea</option>
                                    <option value="guinea-bissau">Guinea-Bissau</option>
                                    <option value="kenya">Kenya</option>
                                    <option value="lesotho">Lesotho</option>
                                    <option value="liberia">Liberia</option>
                                    <option value="libya">Libya</option>
                                    <option value="madagascar">Madagascar</option>
                                    <option value="malawi">Malawi</option>
                                    <option value="mali">Mali</option>
                                    <option value="mauritania">Mauritania</option>
                                    <option value="mauritius">Mauritius</option>
                                    <option value="mayotte">Mayotte</option>
                                    <option value="morocco">Morocco</option>
                                    <option value="mozambique">Mozambique</option>
                                    <option value="namibia">Namibia</option>
                                    <option value="niger">Niger</option>
                                    
                                    <option value="rwanda">Rwanda</option>
                                    <option value="reunion">Réunion</option>
                                    <option value="saint-helena">Saint Helena</option>
                                    <option value="senegal">Senegal</option>
                                    <option value="seychelles">Seychelles</option>
                                    <option value="sierra-leone">Sierra Leone</option>
                                    <option value="somalia">Somalia</option>
                                    <option value="south-africa">South Africa</option>
                                    <option value="sudan">Sudan</option>
                                    <option value="south-sudan">Sudan</option>
                                    <option value="swaziland">Swaziland</option>
                                    <option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
                                    <option value="tanzania">Tanzania</option>
                                    <option value="togo">Togo</option>
                                    <option value="tunisia">Tunisia</option>
                                    <option value="uganda">Uganda</option>
                                    <option value="western-sahara">Western Sahara</option>
                                    <option value="zambia">Zambia</option>
                                    <option value="zimbabwe">Zimbabwe</option>
                            </select>
                            <div style='color: red; font-size: 12px;'><?php echo $nationalityError;?></div>
                        </div>
                        <div class="col-lg-5">
                            <p>Religion</p>
                            <select type="text" class='theSelect' name="religion" value='<?php echo $religion ; ?>'> 
                                    <option value="Christianity">Christianity</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Others">Others</option>
                            </select>
                            <div style='color: red; font-size: 12px;'><?php echo $religionError;?></div>
                            <p>Phone Number</p>
                            <input type="text" name="phone" value='<?php echo $phone ; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $phoneError;?></div>
                            <p>Parent's Phone Number</p>
                            <input type="text" name="pphone" value='<?php echo $pphone ; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $pphoneError;?></div>
                            <p>Department</p>
                            <select type="text" class= 'theSelect' name="department" value='<?php $department ; ?>'> 
                                <option value="Science">Science</option>
                                <option value="Art">Art</option>
                                <option value="Commercial"></option>
                                <option value="Other">Other</option>
                            </select>
                            <div style='color: red; font-size: 12px;'><?php echo $departmentError;?></div>
                            <p>Subject Area of Weakness</p>
                            <select type="text" class='theSelect' name="SubjectOfWeakness" value='<?php echo $subject ; ?>'> 
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Biology">Biology</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Physics">Physics</option>
                                <option value="Government">Government</option>
                                <option value="Literature">Literature</option>
                                <option value="CRS">CRS</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Economics">Economics</option>
                                <option value="Agric">Agric</option>
                                <option value="Geography">Geography</option>
                                <option value="Yoruba">Yoruba</option>
                            </select>
                            <div style='color: red; font-size: 12px;'><?php echo $subjectError;?></div>
                            <p>Email Address</p>
                            <input type="text" name="email" value='<?php echo $email ; ?>'>
                            <div style='color: red; font-size: 12px;'><?php echo $emailError;?></div>
                            <input name = submit class="Submit" type="submit" value="Register" style="margin-top: 40px; background-color: #ed5f4f; width: 80%; margin-left: auto; display: block; margin-right: auto; color: white; font-weight: bold;letter-spacing: 0.04em; font-size: 20px; heigh:40px">
                            
                        </div>
                    </div>
                

                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>