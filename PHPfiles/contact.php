<?php

    $conn = mysqli_connect('localhost', 'root', '15Kri$#Na3', 'artgaldb');

    $iniName = $_POST['iniName'];
    $emAdd = $_POST['emAdd'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];


    if($conn->connect_error)
    {
        die("Connection Failed : ".$conn->connect_error);
    }
    else{
        $stmt = "INSERT INTO contacts(YourName, Email, PhoneNumber, TypeMessage)
						values('$iniName', '$emAdd', '$phone', '$msg')";
		$stmt_run = mysqli_query($conn, $stmt);

		$conn->close();
    }
?>
        <script type='text/javascript'>
            alert('Your Response Inserted Successfully! Thank you for your valuable response.');
        </script>
<?php 
        include 'contact.html';
?>