<?php
class BloodRequest {
    protected $bloodGroupNeeded;
    protected $unitsNeeded;
    
    function __construct($bloodGroupNeeded, $unitsNeeded) {
        $this->bloodGroupNeeded = $bloodGroupNeeded;
        $this->unitsNeeded = $unitsNeeded;
    }
    
    function displayInfo() {
        echo "<h2>Blood Request Information</h2>";
        echo "Blood Group Needed: " . $this->bloodGroupNeeded . "<br>";
        echo "Units Needed: " . $this->unitsNeeded . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bloodGroupNeeded = $_POST["blood_group_request"];
    $unitsNeeded = $_POST["units_needed"];
    
    $request = new BloodRequest($bloodGroupNeeded, $unitsNeeded);
    $request->displayInfo();
}
?>
