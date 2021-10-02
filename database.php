<?php
$con = mysqli_connect('localhost','root');

if (!$con) {
    ?>
    <script type="text/javascript">
        alert('Error: Unable to connect to the database');
    </script>
    <?php
}
 
mysqli_select_db($con, 'foodorder');
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $foodname = $_POST['foodname'];
    $address = $_POST['address'];

    $query = " INSERT INTO `foodordering`(`name`,`email`,`phone`,`foodname`,`address`) VALUES ('$name','$email','$phone','$foodname','$address') ";


    $iquery = mysqli_query($con,$query);
}

if ($iquery) {
    ?>
    <script>
        alert("Thanks for your response..!!");
        window.location.replace("index.php");
    </script>
    <?php
    }else{
        ?>
        <script>
            alert("Please try again ");
        </script>
        <?php
    }

 ?>