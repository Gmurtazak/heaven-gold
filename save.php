<?php
$host = "localhost";
$user = "root";
$pass = "gmk25589$";
$db   = "high";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name']) && isset($_POST['father'])) {
    
    // ✅ If booking form
    if (isset($_POST['booking']) && isset($_POST['sno'])) {
        $sql = "INSERT INTO booking_form 
        (date, sno, name, cnic1, father, address, mobile, res, nationality, occupation, nextkin, relation, cnic2, booking, discount, cost, ncost, plot, type, size, phase, extras, tcost, sales, signature, applicant) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssssssssssssssss",
            $_POST['date'], $_POST['sno'], $_POST['name'], $_POST['cnic1'], $_POST['father'], $_POST['address'],
            $_POST['mobile'], $_POST['res'], $_POST['nationality'], $_POST['occupation'], $_POST['nextkin'], 
            $_POST['relation'], $_POST['cnic2'], $_POST['booking'], $_POST['discount'], $_POST['cost'], 
            $_POST['ncost'], $_POST['plot'], $_POST['type'], $_POST['size'], $_POST['phase'], $_POST['extras'], 
            $_POST['tcost'], $_POST['sales'], $_POST['signature'], $_POST['applicant']
        );
    } 
    
    // ✅ If application form
    else {
        $sql = "INSERT INTO application_form 
        (name, father, nic, email, mobile, landline, dob, nationality, occupation, address, property_no, size, location, category, nok_name, nok_nic, nok_father, nok_relation) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssssssssss", 
            $_POST['name'], $_POST['father'], $_POST['nic'], $_POST['email'], 
            $_POST['mobile'], $_POST['landline'], $_POST['dob'], $_POST['nationality'], 
            $_POST['occupation'], $_POST['address'], $_POST['property_no'], $_POST['size'], 
            $_POST['location'], $_POST['category'], $_POST['nok_name'], $_POST['nok_nic'], 
            $_POST['nok_father'], $_POST['nok_relation']
        );
    }

    if ($stmt->execute()) {
        echo "Form saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>