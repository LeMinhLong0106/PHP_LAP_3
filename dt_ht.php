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
    <title>Diện tích HCN</title>
</head>
<body>
    <?php
        $bankinh = $tb ="" ;
        define('pi','3.14');//khai báo hằng số

        if(isset($_POST['bankinh'])) 
            $bankinh=$_POST['bankinh']; 
        else {
            $bankinh=0;
        }

        if(isset($_POST['bankinh']) )
            if (is_numeric($bankinh) && ($bankinh > 0))  
                $dientich=$bankinh*$bankinh*pi;
            else {
                    $tb = "<font color='red'>Vui lòng nhập vào số nguyên dương! </font>"; 
                    $dientich="";
                }
        else $dientich=0;
    ?>
    <div class="container" style="width: 30%;">
        <form action="" method="POST">
            <table class="table">
                <thead>
                    
                    <tr class="table-success" >
                        <th style="text-align: center;" colspan="2">DIỆN TÍCH HÌNH TRÒN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>Bán kính:</td>
                        <td><input type="text" name="bankinh" value="<?php  echo $bankinh;?>"/></td>
                    </tr>
                    <tr class="table-info">
                        <td>Diện tích:</td>
                        <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?>"/></td>
                    </tr>
                    <tr class="table-info">
                        <td style="text-align: center;" colspan="2"><input type="submit" value="Tính" name="tinh" /></td>
                    </tr>
                    <span><?php echo $tb;?></span>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>