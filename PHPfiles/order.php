<?php

    $conn = mysqli_connect('localhost', 'root', '15Kri$#Na3', 'artgaldb');

    if(isset($_POST['ordbtn']))
    {
        $fullname = $_POST['fullname'];
        $emailadd = $_POST['emailadd'];
        $ctnum = $_POST['ctnum'];
        $addnum = $_POST['addnum'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $title = $_POST['title'];
        $choice = $_POST['choice'];

    
        $query = "INSERT INTO orders(FullName, emailAddress, ContactNumber, AddressNumber, Street, City, ArtTitle, Choice)
						VALUES('$fullname', '$emailadd', '$ctnum', '$addnum', '$street', '$city', '$title', '$choice')";
		$query_run = mysqli_query($conn, $query);

		$conn->close();
    }

?>

<script type='text/javascript'>
            alert('Data Inserted Successfully! You will receive email about the purchase details.');
        </script>
<?php 
        include 'order.html';
?>