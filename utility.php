<?php

function getFormatedData($data) {
    $parsed_data = array();
    foreach($data as $key => $row) {

        array_push($parsed_data, array(
            "student_id" => $key,
            "name" => $row["name"],
            "class" => $row["class"],
            "marks" => array_sum($row["marks"])
        ));
    }
    usort($parsed_data, function($a, $b) {
        if($a["class"] == $b["class"]) {
            return $a["marks"] < $b["marks"] ? 1 : -1;
        } else if ($a["class"] > $b["class"]) {
            return -1;
        }
        return 1;
    });
    return $parsed_data;
}