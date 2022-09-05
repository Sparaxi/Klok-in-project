<?php
/*
 * Following code will list all the products
 */

// array for JSON response
$response = array();

include_once "Database_config.php";
$classDatabase = new Database();
$connect = $classDatabase->connect();

$query = "SELECT * FROM EXAMPLE";
$result =  mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {

    $response["EXAMPLE"] = array();

    while ($row = mysqli_fetch_array($result)) {
        $studentinfo = array();
        $studentinfo ["EXAMPLE"] = $row ["EXAMPLE"];
        $studentinfo ["EXAMPLE"] = $row["EXAMPLE"];
        $studentinfo ["EXAMPLE"] = $row["EXAMPLE"];
        $studentinfo ["EXAMPLE"] = $row["EXAMPLE"];
        $studentinfo ["EXAMPLE"] = $row["EXAMPLE"];
        $studentinfo ["EXAMPLE"] = $row["EXAMPLE"];
        $studentinfo ["EXAMPLE"] = $row["EXAMPLE"];

        array_push($response["EXAMPLE"], $studentinfo);
    }
    $response["Success"] = 1;
}else {

    $response["success"] = 0;
    $response["message"] = "No students found";

}
echo json_encode($response);




