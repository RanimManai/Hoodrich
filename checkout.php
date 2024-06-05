<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $country = $_POST["country"];
    $firstName = $_POST["name"];
    $lastName = $_POST["last"];
    $address = $_POST["adress"];
    $card= $_POST["card"];

   
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "hoodrich"; 

 
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO clients (email, country, firstName, lastName, address, card) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $email, $country, $firstName, $lastName, $address, $card);


    if ($stmt->execute()) {
        $stmt->close();

        $conn->close();

    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

include "paiment.html";
echo "<h1 style='text-align:center'>Thank you for purchasing from our company! Receipt sent to your email.<h1>
";
echo "<h2 style='text-align:center'>Ur purchase has been made!</h2>
<a href='index.php' style='margin-left:47vw;' class='button'>go back</a>
<h4 style='text-align:center'>$firstName $lastName</h4>
<h4 style='text-align:center'>$address</h4>
<h5 style='text-align:center'>CaliberHoodie</h5>
<h5 style='text-align:center'>130£</h5>
<h5 style='text-align:center'>Shipping</h5>
<h5 style='text-align:center'>10£</h5>
<h5 style='text-align:center'>Totale</h5>
                <h5 style='text-align:center'>140£</h5>
<input  type='submit' value='Imprimer' style='margin-left:46vw;' class='button' id='printButton'>
<script>

    document.getElementById('printButton').addEventListener('click', function() {

        window.print();
    });
    </script>";
include "footer.html";
?>
