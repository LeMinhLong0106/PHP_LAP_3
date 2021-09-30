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
    <title>Tính tiền điện</title>
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
        $ten = $csc = $csm = $dg = $tt = $tb ="";
        if(isset($_POST['ten'])){
            $ten = $_POST['ten'];
        }

        if(isset($_POST['csc'])){
            $csc = $_POST['csc'];
        }
        else $csc=0;

        if(isset($_POST['csm'])){
            $csm = $_POST['csm'];
        }
        else $csm=0;
        
        if(isset($_POST['dg'])){
            $dg = $_POST['dg'];
        }
        else $dg=20000;

        if(isset($_POST['csc']) && isset($_POST['csm']) && isset($_POST['dg']) ){
            if (is_numeric($csc)  && is_numeric($csm) && is_numeric($dg)){
                if(($csc < 0) || ($csm < 0) || ($dg < 0)){
                    $tb = "<font color='red'>Không được nhập số âm! </font>";
                    $tt="";
                }
                else{
                    $tt=($csm - $csc)*$dg;
                } 
                if($csm < $csc){
                    $tb = "<font color='red'>Chỉ số mới phải lớn hơn chỉ cố cũ</font>"; 
                    $tt="";
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
        <form action="" method="POST">
            <table class="table">
                <thead>
                    <tr class="table-success" >
                        <th style="text-align: center;" colspan="3"><h3>THANH TOÁN TIỀN ĐIỆN</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tên chủ hộ:</td>
                                                            <!-- dùng để sticky -->
                        <td><input type="text" name="ten" value="<?php  echo $ten;?>" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chỉ số cũ:</td>
                        <td><input type="text" name="csc" value="<?php  echo $csc;?>" /></td>
                        <td>(Kw)</td>
                    </tr>
                    <tr>
                        <td>Chỉ số mới:</td>
                        <td><input type="text" name="csm"  value="<?php echo $csm;?>" /></td>
                        <td>(Kw)</td>
                    </tr>
                    <tr>
                        <td>Đơn giá:</td>
                        <td><input type="text" name="dg" value="<?php echo $dg;?>" /></td>
                        <td>(VNĐ)</td>
                    </tr>
                    <tr>
                        <td>Số tiền thanh toán:</td>
                        <td><input type="text" name="tt" disabled="disabled" value="<?php echo $tt;?>" /></td>
                        <td>(VNĐ)</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="3"><input type="submit" value="Tính" name="tinh" /></td>
                    </tr>
                    <span><?php echo $tb;?></span>
                </tbody>
            </table>
        </form>
    </div>
    
</body>
</html>