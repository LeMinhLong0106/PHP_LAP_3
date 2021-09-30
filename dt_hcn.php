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
        $cd = $cr = $dt = $tb="";
        if(isset($_POST['cd'])){
            $cd = $_POST['cd'];
        }
        else $cd=0;

        if(isset($_POST['cr'])){
            $cr = $_POST['cr'];
        }
        else $cr=0;

        if(isset($_POST['cd']) && isset($_POST['cr'])){
            if (is_numeric($cd) && is_numeric($cr) && ($cd > 0 && $cr > 0))  
                $dt=$cd*$cr;
            else {
                $tb = "<font color='red'>Vui lòng nhập vào số dương! </font>"; 
                $dt="";
            }
        }
        else $dt=0;
    ?>

    <div class="container" style="width: 30%;">
        <form action="" method="POST">
            <table class="table">
                <thead>
                    <tr class="table-success" >
                        <th style="text-align: center;" colspan="2">Diện tích hình chữ nhật</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>Chiều dài:</td>
                                                            <!-- dùng để sticky -->
                        <td><input type="text" name="cd" value="<?php  echo $cd;?>" /></td>
                    </tr>
                    <tr class="table-info">
                        <td>Chiều rộng:</td>
                        <td><input type="text" name="cr" value="<?php  echo $cr;?>" /></td>
                    </tr>
                    <tr class="table-info">
                        <td>Diện tích:</td>
                        <td><input type="text" name="dt" disabled="disabled" value="<?php echo $dt;?>" /></td>
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