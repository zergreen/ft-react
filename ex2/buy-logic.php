<center>
    <h1>ยืนยันข้อมูล</h1>
    <?php

    $member_id = $_POST['member_id'];
    $type_class = $_POST['type_class'];
    $weight_buy = $_POST['weight_buy'];
    $cherry_grade = $_POST['cherry_grade'];
    $weight_total = $_POST['weight_total'];
    $type_goodmoney = $_POST['type_goodmoney'];
    $type_poormoney = $_POST['poor_money'];
    $common_fee = $_POST['common_fee'];
    $member_saving = $_POST['member_saving'];
    $total_net = $_POST['total_net'];
    $cherry_flow = $_POST['cherry_flow'];

    echo "รหัสสมาชิก: $member_id <br> รุ่นปลูก: $type_class <br> นน.เชอรี่ที่รับซื้อ: $weight_buy <br> นน.เชอรี่ลอย: $cherry_flow <br>
เกรดเชอรี่: $cherry_grade <br> นน.เชอรี่คุณภาพ: $weight_total <br> เงินเชอรี่คุณภาพ: $type_goodmoney <br>
เงินเชอรี่ลอย: $type_poormoney <br> หักค่าบริการกองกลาง $common_fee <br> หักเงินออมสมาชิก :$member_saving <br> รายรับสุทธิ: $total_net <br>";
    ?>
</center>