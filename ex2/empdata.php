<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="container">
        ข้อมูลพนักงานทำรายการรับซื้อเชอรี่
        <form action="emp-logic.php">
        <div id=form1>
        <table width='100%'>
            <tr>
                <td>ชื่อ</td>
                <td><input type="text" name="emp_name"></td>
                <td>นามสกุล</td>
                <td><input type="text" name="emp_surname"></td>
            </tr>
            <tr>
                <td>เพศ</td>
                <td><input type="text" name="emp_sex"></td>
                <td>วันเดือนปีเกิด</td>
                <td><input type="datetime-local"></td>
            </tr>
            <tr>
                <td>ที่อยู่</td>
                <td><input type="text" name="emp_address"></td>
            </tr>
            <tr><td>เบอร์โทร</td><td><input type="text" name="emp_tel"></td></tr>
            <tr><td>Line</td><td><input type="text" name="emp_line"></td></tr>
            <tr><td>Facebook</td><td><input type="text" name="emp_facebook"></td></tr>
            <tr><td>Email</td><td><input type="text" name="emp_email"></td></tr>

        </table>
        </div>

        <center>
            <input type="submit" value="บันทึก"> <span></span>
            <input type="reset" value="ยกเลิก">
        </center>
        </form>
    </div>
</html>