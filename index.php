<?php

include_once "vitals.php";
include_once "validate.php";
include_once "rules.php";
include_once "scanner.php";

foreach ($vitals as $vital) {

    switch ($vital["vital_type"]) {
        case "Temperature":
            $result = validateVital($vital, "checkTemperature");
            break;

        case "Pulse":
            $result = validateVital($vital, "checkPulse");
            break;

        case "BP":
            $result = validateVital($vital, "checkBloodPressure");
            break;

        default:
            continue;
    }

    echo "Patient: " . $result["patient_name"] . "<br>";
    echo "Vital: " . $result["vital_type"] . "<br>";
    echo "Value: " . $result["value"] . "<br>";
    echo "Status: " . $result["status"] . "<br>";
    echo "Message: " . $result["message"] . "<br>";
    echo "<br>";
}

// Recursive 
echo "<br><strong>Project Files:</strong><br>";
scanFolder(__DIR__);

?>