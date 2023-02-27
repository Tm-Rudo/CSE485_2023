<?php
try {                                                               // Try following code
    $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306','root','');           // Create PDO object
} catch (PDOException $e) {                                         // If exception thrown
    echo $e->getMessage();        // Re-throw exception
}

?>