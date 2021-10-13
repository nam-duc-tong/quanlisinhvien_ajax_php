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
    <table>
        <tr>
            <td colspan="10"><input id="result" type="text" disabled></td>
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
        var a='',b='',cal='';
        $(function(){
            $('input').click(function(){
                // console.log($(this).val())
                var v  = $(this).val();
                switch(v) {
                    case '+':
                    case '-':
                    case '*':
                    case '/':
                       cal = v;
                        break;
                    case '=':
                        //submit data
                       onSubmit();
                        break;
                    case 'AC':
                    case 'C':
                        a='';
                        b='';
                        cal = '';
                        break;
                    default:
                        if(cal != ''){
                            //nhap b
                            b += v;
                        }
                        else{
                            //nhap A
                            a+=v;
                        }
                        break;
                }
                $('#result').val(a + cal + b);
            })
        })
        function onSubmit(){
            console.log(a+cal+b);
            // onSubmitPOST();
            onSubmitGET();
        }
        function onSubmitGET(){
            $.get('cal.php?a='+a+'&cal='+encodeURIComponent(cal)+'&b= '+b,function(data){
                console.log(data);
                $('#result').val(a+cal+b+'='+data);
            })
        }
// =================================

        function onSubmitPOST(){
            $.post('cal.php',{
                'a':a,
                'b':b,
                'cal':cal
            }, function(data){
                // console.log(data);
                $('#result').val(a+cal+b+'='+data);
            })
        }
     </script>
</body>
</html>