
        <?php
        header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Content-Type');
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json, charset=utf-8');
        
        
        $conn = mysqli_connect("localhost", "user_contact_book", "alphacode@2023", "alpha_contact_book");
        if (!$conn) {
            die("Falha na conexão: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM contacts";
        $result = mysqli_query($conn, $sql);
        
        $contact = [];

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($contact, $row);
        }
        if (mysqli_num_rows($result) > 0) {
            header('Content-Type: application/json');
            echo json_encode($contact);
            http_response_code(200);

        }else{
            header('Content-Type: application/json');
            http_response_code(404);
            echo json_encode(['não tem resultado!']);
        }
        mysqli_close($conn);
        return;
        ?>
    