<?php

require_once('../config/Connection.php');
require_once('../config/RepoQuery.php');

$conn = new Connection();



if ($conn == null) {
    $arr = array(
        "status" => 500,
        "message" => "Error al tramitar la peticion",
        "data" => array()
    );
    echo json_encode($arr);
} else {

    $queryNumber = $_REQUEST['query'];
    $params = $_REQUEST;

    $sql = RepoQuery::GetQuery($queryNumber, $params);


    if ($sql != null) {

        $ar_obj = $conn->setExecute($sql);

        if (count($ar_obj) > 0) {
            echo json_encode($ar_obj);
        } else {
            $arr = array(
                "status" => 204,
                "message" => "La consulta no ha devuelto datos",
                "data" => array()
            );
            echo json_encode($arr);
        }
    } else {
        $arr = array(
            "status" => 500,
            "message" => "Returned Query is null",
            "data" => array()
        );
        echo json_encode($arr);
    }
}
