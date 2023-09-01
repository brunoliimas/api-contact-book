<?php
header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Content-Type');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json, charset=utf-8');

$conn = mysqli_connect("localhost", "user_contact_book", "alphacode@2023", "alpha_contact_book");

if (!$conn) {
    http_response_code(400);
    die("Falha na conexão: " . mysqli_connect_error());
}

$data = file_get_contents("php://input");

// Converte os dados JSON em um array associativo
$postData = json_decode($data, true);

// Verifica se a decodificação do JSON foi bem-sucedida
if ($postData !== null) {
    // Você pode acessar os dados agora
    $full_name = $postData["contact"]["name"];
    $email = $postData["contact"]["email"];
    $birthdate = $postData["contact"]["birthdate"];
    $phone = $postData["contact"]["phone"];
    $profession = $postData["contact"]["profession"];
    $cellphone = $postData["contact"]["cellphone"];
    $whatsapp = $postData["contact"]["whatsapp"];
    $sendEmail = $postData["contact"]["sendEmail"];
    $sendSms = $postData["contact"]["sendSms"];

    $sql = "INSERT INTO contacts (full_name, birthdate, email, profession, phone, cellphone, whatsapp, sendEmail, sendSms ) VALUES ('$full_name', '$birthdate', '$email', '$profession', '$phone', '$cellphone', '$whatsapp', '$sendEmail', '$sendSms')";



    if (mysqli_query($conn, $sql)) {
        http_response_code(200);
        echo json_encode("Inserido com sucesso");
    } else {
        http_response_code(400);
        echo json_encode("Falha ao inserir registro");

        echo "Erro: " . mysqli_error($conn);
    }
} else {
    http_response_code(400);
    echo json_encode("Dados incompletos");
}

http_response_code(200);
echo json_encode("aaaaaaaaaaaa");

mysqli_close($conn);
