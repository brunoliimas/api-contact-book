<?php
$conn = mysqli_connect("localhost", "user_contact_book", "alphacode@2023", "alpha_contact_book");

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$profession = $_POST['profession'];
$phone = $_POST['phone'];
$cellphone = $_POST['cellphone'];

$sql = "UPDATE contacts SET full_name='$full_name', birthdate='$birthdate', email='$email', profession='$profession', phone='$phone', cellphone='$cellphone' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Erro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
