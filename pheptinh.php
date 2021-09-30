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
                            <input type="radio" name="phep" value="cộng"> Cộng
                            <input type="radio" name="phep" value="trừ"> Trừ
                            <input type="radio" name="phep" value="nhân" checked = "checked"> Nhân
                            <input type="radio" name="phep" value="chia"> Chia
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Số thứ nhất:</td>
                        <td><input type="text" name="s1"/></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Số thứ nhì:</td>
                        <td><input type="text" name="s2"/></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="2"><input type="submit" value="Tính" name="tinh" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    
</body>
</html>