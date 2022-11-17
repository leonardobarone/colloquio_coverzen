<?php   

if ($_POST != null) {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    // stabilire connessione 
    $conn = new mysqli('localhost', 'root', 'root', 'prova');
    
    // connessione è andata a buon fine
    if ($conn && $conn->connect_error) {
        echo 'errore di connessione: ' . $conn->connect_error;
        die();
    }
    
    $sql = "INSERT INTO `utenti` (`nome`, `cognome`) VALUES ('$nome', '$cognome')";
    $result = $conn->query($sql);
        
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
} else {
    echo 'Nessun record creato!';
}
?>