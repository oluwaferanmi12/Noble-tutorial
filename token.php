<?php include('components/header.php')?>
<?php 
    $small = array('a' , 'b' , 'c' , 'd' , 'e' , 'f' , 'g' ,'h' , 'i' , 'j' , 'k' , 'l' , 'm' , 'n' , 'o' , 'p' , 'q' , 'r' , 's' , 't' , 'u' , 'v' , 'w' , 'x' , 'y' ,'x');
    // $big = array('A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' , 'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' ,'S' , 'T' , 'U' , 'V' , 'W' , 'X'  , 'Y', 'Z');
    $num = array('1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9');
    $token = '';
    for ($i=0; $i < 3; $i++){
        $firstRand = rand(0 , 25);
        $secondRand = rand(0, 25);
        $thirdRand = rand(0,8);
        // The Dot is used to concatenate strings together , the + will not work because it is not a numeric value
        $token .= $small[$firstRand] . strtoupper($small[$secondRand]) . $num[$thirdRand];
    }
    // $query = "INSERT INTO token(token) VALUES('$token')";
    // $execution = mysqli_query($connection , $query);
?>


<div class='token-container'>
    <div class='theToken'>
        <div class='GeneratedToken'>Generated Token</div>
        <hr>
        <p><?php echo $token ?></p>
        <div class='note'>Note: This Generated Token Expires After A Login</div>
    </div>
</div>


</body>