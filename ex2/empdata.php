<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div>
        ข้อมูลพนักงานทำรายการรับซื้อเชอรี่
        <form action="emp-logic.php">
        <div id=form1>
        <table width='100%'>
            <tr>
                <td>ชื่อ</td>
                <td><input type="text" ></td>
                <td>นามสกุล</td>
                <td><input type="text" ></td>
            </tr>
            <tr>
                <td>เพศ</td>
                <td><input type="text" ></td>
                <td>วันเดือนปีเกิด</td>
                <td><input type="datetime-local"></td>
            </tr>
            <tr>
                <td>ที่อยู่</td>
                <td><input type="text"></td>
            </tr>
            <tr><td>เบอร์โทร</td><td><input type="text"></td></tr>
            <tr><td>Line</td><td><input type="text"></td></tr>
            <tr><td>Facebook</td><td><input type="text"></td></tr>
            <tr><td>Email</td><td><input type="text"></td></tr>

        </table>
        </div>

        <center>
            <input type="submit" value="บันทึก"> <span></span>
            <input type="reset" value="ยกเลิก">
        </center>
        </form>
    </div>
</html>