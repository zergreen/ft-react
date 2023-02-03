<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<div>
    <form action="buy-logic.php">
        <span></span>เชอรี่
        <div>
            <table width='100%'>
                <tr>
                    <td>
                        รหัสสมาชิก
                    </td>
                    <td>
                        <input type="text" size="5">
                    </td>
                <tr>
                    <td>
                        รุ่นปลูก
                    </td>
                    <td>
                        <input type="text" size="5">
                    </td>
                </tr>
                <tr>
                    <td>
                        นน.เชอรี่ที่รับซื้อ
                    </td>
                    <td>
                        <input type="text" size="5"> กิโลกรัม
                    </td>
                </tr>
                <tr>
                    <td>
                        เกรดเชอรี่
                    </td>
                    <td>
                        <!-- <input type="dropdown"> -->
                        <select name="grade" id="grade">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        นน.เชอรี่คุณภาพ
                    </td>
                    <td>
                        <input type="text" size="5"> -
                        <input type="text" size=5> =
                        <input type="text" size=5> กิโลกรัม
                    </td>

                </tr>

            </table>
        </div>
        <br>

        <span></span>การเงิน
        <div>
            <table>
                <tr>
                    <td>เงินเชอรี่คุณภาพ
                    <td><input type="text" size="5"> บาท
                </tr>
                <tr>
                    <td>เงินเชอรี่ลอย
                    <td><input type="text" size="5"> บาท
                </tr>
            </table>
        </div>
        <div>
            <table>
                <tr>
                    <td>หักค่าบริหารกองกลาง
                    <td><input type="text" size="5"> บาท
                </tr>
                <tr>
                    <td>หักเงินออมสมาชิก
                    <td><input type="text" size="5"> บาท
                </tr>
                <tr>
                    <td>รายรับสุทธิ
                    <td><input type="text" size="5"> บาท
                </tr>
            </table>
        </div>
        <center><input type="submit" value="บันทึก"> <span></span>
            <input type="reset" value="ยกเลิก">
        </center>
    </form>
</div>
</html>