<?php
    $a= $b = $result = $cal  = '';
   if(!empty($_GET)){
       if(isset($_GET['a'])){
           $a = $_GET['a'];
       }
       if(isset($_GET['b'])){
           $b = $_GET['b'];
       }
       if(isset($_GET['cal'])){
           $cal = $_GET['cal'];
       }
       switch($cal){
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = $a / $b;
                break;
            case '%':
                $result = $a % $b;
                break;
       }
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caculator</title>
    <style type="text/css">
        *{
            margin:0;
            
            padding:0;
            box-sizing: border-box;
    
        }
        body{
            margin-top:30px;
        }
        table{
            
            background-color: #ABB1BA;
            margin:auto;
        }
        #result{
            width: 416px;
            height: 70px;
        }
        .btn{
            width:80px;
            height: 80px;
        }
        #equ{
            width:80px;
            height: 164px;
        }
        #zero{
            width: 164px;
            height: 80px;
        }
        #form{
            padding:20px;
            display:none;
        }
    </style>
</head>
<body>
    <form action="" method="get" id="form">
        <input require="true" type="number" name="a" placeholder="Enter A" value="<?=$a?>">
        <input require="true" type="number" name="b" placeholder="Enter B" value="<?=$b?>">
        <select name="cal" require="true"> 
            <!-- Khong cho phep de rong -->
            <option value="">Chọn Phép Tính</option>
            <option value="+" <?=($cal == '+' )?'selected':''?>>+</option>
            <option value="-" <?=($cal == '-' )?'selected':''?>>-</option>
            <option value="*" <?=($cal == '*' )?'selected':''?>>*</option>
            <option value="/" <?=($cal == '/' )?'selected':''?>>/</option>
            <option value="%" <?=($cal == '%' )?'selected':''?>>%</option>
        </select>
        <button type="submit">Submit</button>
        <p style="font-size: 20px;color:red;padding: 10px;">Kết Quả:<?=$result?> </p>
    </form>
    <table>
    <tr>
        <td colspan="10"><input id="result" type="text" value="<?=($a.$cal.$b.' = '.$result)?>" disabled></td>
    </tr>
    <tr>
        <td><input   class="btn" value="7" type="button"></td>
        <td><input   class="btn" value="8" type="button"></td>
        <td><input   class="btn" value="9" type="button"></td>
        <td><input   class="btn" value="/" type="button"></td>
        <td><input   class="btn" value="C" type="button"></td>
    </tr>
    <tr>
        <td><input   class="btn" value="4" type="button"></td>
        <td><input   class="btn" value="5" type="button"></td>
        <td><input   class="btn" value="6" type="button"></td>
        <td><input   class="btn" value="*" type="button"></td>
        <td><input   class="btn" value="AC" type="button"></td>
    </tr>
    <tr>
        <td><input   class="btn" value="1" type="button"></td>
        <td><input   class="btn" value="2" type="button"></td>
        <td><input   class="btn" value="3" type="button"></td>
        <td><input   class="btn" value="-" type="button"></td>
        <td rowspan="2"><input id="equ" class="btn" value="=" type="button"></td>
    </tr>
    <tr>
        <td colspan="2"><input id="zero" type="button" class="btn" value="0"></td>
        <td><input type="button" class="btn" value=","></td>
        <td><input type="button" class="btn" value="+"></td>
    </tr>
    </table>
     <script type="text/javascript">
        $(function(){
            $('input').click(function(){
                // console.log($(this).val())
                var v  = $(this).val();
                switch(v) {
                    case '+':
                    case '-':
                    case '*':
                    case '/':
                        $('[name=cal]').val(v);
                        break;
                    case '=':
                        //submit data
                        $('#form').submit(); 
                        break;
                    case 'AC':
                    case 'C':
                        $('[name=b]').val('');
                        $('[name=a]').val('');
                        $('[name=cal]').val('');
                        break;
                    default:
                        if($('[name=cal').val()!=''){
                            //nhap b
                            $('[name=b]').val($('[name=b]').val()+v);
                        }
                        else{
                            //nhap A
                            $('[name=a]').val($('[name=a]').val()+v);
                        }
                        break;
                }
                $('#result').val($('[name=a]').val()+$('[name=cal]').val()+$('[name=b]').val())
            })
        })
     </script>
</body>
</html>