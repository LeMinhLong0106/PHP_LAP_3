<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý thông tin</title>
    <style>
        table,a {
            display: flex;
            justify-content: center;
        }
        h3 {
            color: blue;
            text-align: center;
            /* text-shadow: 2px 2px 5px blue; */
            font-family: "Audiowide", sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $ht = $dc = $sdt = $gt = $qt = $gc ="";
        //tạo mảng 
        $mh = array();
        if(isset($_POST['ht']) && !empty($_POST['ht'])){
            $ht = $_POST['ht'];
        }else{
            $ht = "<font color='red'>Vui lòng nhập họ tên! </font>"; 
        }

        if(isset($_POST['dc'])){
            $dc = $_POST['dc'];
        }

        if(isset($_POST['sdt']) && is_numeric($_POST['sdt'])){
            $sdt = $_POST['sdt'];
        }else{
            $sdt = "<font color='red'>Vui lòng nhập vào số dương! </font>"; 
        }

        if(isset($_POST['gt'])){
            $gt = $_POST['gt'];
        }

        if(isset($_POST['qt'])){
            $qt = $_POST['qt'];
        }

        if(isset($_POST['gc'])){
            $gc = $_POST['gc'];
        }

        if(isset($_POST['m1']) ){
            //đưa phần tử $_POST['m1'] vào mảng $mh
            array_push($mh, $_POST['m1']);
        }

        if(isset($_POST['m2']) ){
            array_push($mh, $_POST['m2']);
        }

        if(isset($_POST['m3']) ){
            array_push($mh, $_POST['m3']);
        }

        if(isset($_POST['m4']) ){
            array_push($mh, $_POST['m4']);
        }
        
    ?>
<h3 style="text-align: center;">Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</h3>

<form action="xulyThongtin.php"  method="POST">
    <table>
        <tbody>
            <tr>
                <td>Họ tên</td>
                <td>
                    <?php echo ": $ht" ?>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <?php echo ": $dc" ?>
                </td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td>
                    <?php echo ": $sdt" ?>
                </td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <?php echo ": $gt" ?>
                </td>
            </tr>
            <tr>
                <td>Quốc tịch</td>
                <td>
                    <?php echo ": $qt" ?>
                </td>
            </tr>
            <tr>
                <td>Các môn đã học</td>
                <td>
                    <?php
                        echo ":";
                        foreach ($mh as $m){
                            echo "$m, ";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Ghi chú</td>
                <td>
                    <?php echo ": $gc" ?>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
    </form>
</body>
</html>