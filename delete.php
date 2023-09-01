<?php
header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Content-Type');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json, charset=utf-8');
$conn = mysqli_connect("localhost", "user_contact_book", "alphacode@2023", "alpha_contact_book");

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $contact_id = $_GET['id'];
    
    $sql = "DELETE FROM contacts WHERE id = $contact_id";

    if (mysqli_query($conn, $sql)) {
        http_response_code(200);
        #header("Location: index.php");
    } else {
        http_response_code(400);
        echo "Erro: " . mysqli_error($conn);
    }
} else {
    http_response_code(404);
    echo "ID do contato não especificado.";
}

mysqli_close($conn);
?>
