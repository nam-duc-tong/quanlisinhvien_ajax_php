<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sử dụng Ajax trong PHP</title>

</head>
<body>
    <form action="" id="fr_form" name="fr_form">
        <table width="50%">
            <tr>
                <td>Ten Dang nhap</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mat ma</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Dia chi Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Gioi tinh</td>
                <td><input type="radio" name="sex" value="male">Nam<input type="radio" name="sex" value="female">Nu</td>
            </tr>
            <tr>
                <td>Tuoi</td>
                <td>
                    <select name="age">
                    <?php for ($age = 10;$age<=150;$age++){?>
                       <option value="<?php echo $age;?>"><?php echo $age;?></option> 
                    <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Ngay Sinh
                </td>
                <td>
                    <input type="text" name="birthday">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="button" name="btn_register" id="btn_register" value="Dang ky"></td>
            </tr>
        </table>
    </form>
    <script type="text/javascript">
        $("#btn_register").click(function(){
            $.ajax({
                method:"POST",// phuong thuc du lieu duoc truyen di
                url: "show_data.php", // goi den file server show_data.php de xu ly
                data: $("#fr_form").serialize(),//lay toan thong tin cac fields trong form bang ham serialize cua jquery
                success: function(response){
                    //ket qua tra ve tu server neu gui thanh cong
                    console.log(response);
                }
            });
        });
    </script>
</body>
</html>