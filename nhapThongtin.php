<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin</title>
    <style>
        form {
            display: flex;
            justify-content: center;
        }
        fieldset {
            background-color: #eeeeee;
            width: fit-content;
        }
        
        legend {
            background-color: lightgreen;
            color: white;
            padding: 5px 10px;
        }
        
        input {
            margin: 5px;
        }
    </style>
</head>
<body>
    
    <form action="xulyThongtin.php"  method="POST">
        <fieldset>
            <legend>Enter your information</legend>
            <table>
                <tbody>
                    <tr>
                        <td>Họ tên:</td>
                        <td>
                            <input type="text" name="ht" />
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td>
                            <input type="text" name="dc" />
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại:</td>
                        <td>
                            <input type="text" name="sdt" />
                        </td>
                    </tr>
                    <tr>
                        <td>Giới tính:</td>
                        <td>
                            <input type="radio" name="gt" value="Nam" checked="checked"> Nam
                            <input type="radio" name="gt" value="Nữ"> Nữ
                        </td>
                    </tr>
                    <tr>
                        <td>Quốc tịch:</td>
                        <td>
                            <select name="qt">
                                <option selected value="Việt nam">Việt Nam</option>
                                <option value="Nhật Bản">Nhật Bản</option>
                                <option value="Mỹ">Mỹ</option>
                                <option value="Trung Quốc">Trung Quốc</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Các môn đã học:</td>
                        <td>
                            <input type="checkbox" name="m1" value="PHP & MySQL"> PHP & MySQL
                            <input type="checkbox" name="m2" value="C#"> C#
                            <input type="checkbox" name="m3" value="XML"> XML
                            <input type="checkbox" name="m4" value="Python"> Python
                        </td>
                    </tr>
                    <tr>
                        <td>Ghi chú:</td>
                        <td>
                            <textarea cols="40" rows="5" name="gc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="2">
                            <input type="submit" value="Gửi" name="gui" />
                            <input type="reset" value="Hủy" name="huy" />
                        </td>

                    </tr>
                </tbody>
            </table>
        </fieldset>
    </form>
</body>
</html>