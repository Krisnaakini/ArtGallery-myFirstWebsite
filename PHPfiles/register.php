<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $conn = new mysqli('localhost', 'root', '15Kri$#Na3', 'artgaldb');

    if($conn->connect_error)
    {
        die("Connection Failed : ".$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO userregistration(FirstName, LastName, EmailAddress, UserName, Password)
						values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $fname, $lname, $email, $uname, $pwd);
		$stmt->execute();
		
		$stmt->close();
		$conn->close();
    }

?>
<script type='text/javascript'>
            alert('You have registered Successfully!');
</script>

<?php 
        include 'gallery1.html';
?>