<center>
<h1>ยืนยันข้อมูลพนักงาน</h1>
<?php
    include "../conn/conn.php";

    $name = $_POST['emp_name'];
    $surname = $_POST['emp_surname'];
    $sex = $_POST['emp_sex'];
    $date = $_POST['emp_birthdate'];
    $address = $_POST['emp_address'];
    $tel = $_POST['emp_tel'];
    $line = $_POST['emp_line'];
    $facebook = $_POST['emp_facebook'];
    $email = $_POST['emp_email'];

    echo "NAME: $name <br> Surname: $surname <br> Sex: $sex <br> Birthdate: $date <br> Address: 
          $address <br> Tel: $tel <br> Line: $line <br> Facebook: $facebook <br> Email: $email <br>";

    $sql = "SELECT * FROM admin";
    // $conn->query($sql);

    // while($row = $result->fetch_assoc()){
    //     echo "ID: $row[ID]";
    // }

    $conn->close();
    
    
    
?>
</center>