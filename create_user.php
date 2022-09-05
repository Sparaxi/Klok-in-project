<?php

$response = array();

    include_once "Database_config.php";
    $classDatabase = new Database();
    $connect = $classDatabase->connect();

    $_POST = json_decode(file_get_contents('php://input'), true);
    // importing a query from a different class results in empty query.
    // when a device or website form sends data through a form to this file, then this if statement will check if it contains all these things. if these things are all the same it will
    // send the data do $create_u , when that happened it will use the variable $result to send the query to the database and insert the data.
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['EXAMPLE']) && isset($_POST['EXAMPLE']) && isset($_POST['EXAMPLE']) && isset($_POST['EXAMPLE']) && isset($_POST['EXAMPLE']) && isset($_POST['EXAMPLE']) && isset($_POST['EXAMPLE'])) {
        $idstudentpasnummer = $_POST['EXAMPLE'];
        $Naam = $_POST['EXAMPLE'];
        $tussenvoegsel = $_POST['EXAMPLE'];
        $achternaam = $_POST['EXAMPLE'];
        $klas = $_POST['EXAMPLE'];
        $cohort = $_POST['EXAMPLE'];
        $EmailRocDev = $_POST['EXAMPLE'];

        $create_u = "INSERT INTO student (EXAMPLE, EXAMPLE, EXAMPLE, EXAMPLE, EXAMPLE, EXAMPLE, EXAMPLE) VALUES ('EXAMPLE','EXAMPLE','EXAMPLE','EXAMPLE','EXAMPLE','EXAMPLE','EXAMPLE')";
        $result = mysqli_query($connect, $create_u);

        if($result) {
            $response = 201;
        } else {
            $response = 400;
        }
    }
} else {
        $response = 405;
    }
echo json_encode($response);
    mysqli_close($connect);



