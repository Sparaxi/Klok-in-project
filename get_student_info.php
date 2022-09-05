<?php
$response = array();



if(isset($_POST["pid"])) {
    $pid = $_POST['pid'];

    $result = mysqli_query();

    if  (!empty($result)) {
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_array($result);
            $product = array();
            $product["pid"] = $result["pid"];


            $response["success"] = 1;

            $response["product"] =array();

            array_push($response["product"], $product);

            echo json_encode($response);

        } else {

            // no product found
            $response["success"] = 0;
            $response["message"] = "No product found.";

            echo json_encode($response);
        }
    } else {

        $response["success"] = 0;
        $response["message"] = "No product found.";

        echo json_encode($response);
    }

} else {

    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}


