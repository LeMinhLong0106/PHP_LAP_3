<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- phong chữ của google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>Phép tính</title>
    <style>
        tbody{
            background-color: chartreuse;
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
        $s1 = $s2 = $phep = $kq = $tb ="";
        if(isset($_POST['phep'])){
            $phep = $_POST['phep'];
        }

        if(isset($_POST['s1'])){
            $s1 = $_POST['s1'];
        }
        else $s1=0;

        if(isset($_POST['s2'])){
            $s2 = $_POST['s2'];
        }
        else $s2=0;

        if(isset($_POST['s1']) && isset($_POST['s2'])){
            if (is_numeric($s1) && is_numeric($s2)){
                if($phep == 'cộng'){
                    $kq=$s1+$s2;
                }
                if($phep == 'trừ'){
                    $kq=$s1-$s2;
                }
                if($phep == 'nhân'){
                    $kq=$s1*$s2;
                }
                if($phep == 'chia'){
                    $kq=$s1/$s2;
                } 
            }  
            else{
                $tb = "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $tt="";
            }
        }
        else $tt=0;
    ?>

    <div class="container" style="width: 40%;">
        <form action="ketquapheptinh.php" method="POST">
            <table class="table">
                <thead>
                    <tr class="table-success" >
                        <th style="text-align: center;" colspan="2"><h3>PHÉP TÍNH TRÊN HAI SỐ</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: right;">Chọn phép tính:</td>
                        <td>
                            <h4 style="color: crimson;"><?=$phep?></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Số 1:</td>
                        <td><input type="text" disabled="disabled" name="s1" value="<?php echo $s1;?>"/></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Số 2:</td>
                        <td><input type="text" disabled="disabled" name="s2" value="<?php echo $s2;?>"/></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Kết quả:</td>
                        <td><input type="text" disabled="disabled" name="kq" value="<?php echo $kq;?>" /></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="2"><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
                    </tr>
                    <span><?php echo $tb;?></span>
                </tbody>
            </table>
        </form>
    </div>
    
</body>
</html>