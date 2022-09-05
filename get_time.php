<?php

$response = array();

// connection to and from database
include_once "Database_config.php";
$classDatabase = new Database();
$connect = $classDatabase->connect();


// receives data from the nfc tag in json format, and converts it to readable data for the api.
$_POST = json_decode(file_get_contents('php://input'), true);
// here it checks if the reqeust is POST else it will throw error 405
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['EXAMPLE'])) {
        EXAMPLE = $_POST['EXAMPLE'];

        // the api first checks if the student exists, and then continues.
        $test = "SELECT EXAMPLE, Datum FROM EXAMPLE WHERE Datum = current_date and EXAMPLE = 'EXAMPLE'";
        $result1 = mysqli_query($connect, $test);

        if (mysqli_num_rows($result1) > 0) {
            //this triggers when there is a result.
            $EXAMPLE_time = "UPDATE EXAMPLE SET EXAMPLE = CURRENT_TIME  WHERE EXAMPLE = 'EXAMPLE' AND datum = CURRENT_DATE ";
            $result1 = mysqli_query($connect, $EXAMPLE_time);

        } else {
            //this triggers when there is no student found
            $iEXAMPLE_time = "INSERT INTO EXAMPLE (EXAMPLE, EXAMPLE, EXAMPLE) VALUES (CURRENT_DATE ,'EXAMPLE', CURRENT_TIME )";
            $result1 = mysqli_query($connect, $EXAMPLE_time);
        }

        if($result1) {
            // successfully created
            $response = 201;
        } else {
            // bad request method
            $response = 400;
        }
    }
} else {
    // method not allowed
    $response = 405;
}
echo json_encode($response);
mysqli_close($connect);