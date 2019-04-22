
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
    </head>
    <body>
        <?php
//            echo "Hellow World<br>";
//            echo 'this is' . 'book<br>';
//            echo 'I\'m PHP Developer<br>';
//            $txt='Hellow World';
//            echo $txt.'<br>';
//            echo '<pre>';
//            var_dump($_SERVER);
//            define('VARNAME','Book');
//            echo VARNAME;
//            echo '<br>';
//            $var='I will be the Php Boss<br>';
//            $str='019111111';
//            echo substr($str,2,2);  
//            echo '<br>';
//            echo date('d-m-y');
//            echo '<br>';
//            echo date('d-F-Y h:i:sA');
//             echo '<br>';
//            echo date('d-F-Y H:i:sa');
//            echo '<br>';
//            $datestr=strtotime('30.AUG.2017');
//            echo $datestr;
//            echo date('M-d-Y h:i:sA',$datestr);
//            ini_set('error_reporting',E_ALL);
//            ini_set('display_errors',1);
//             echo '<br>';
//            $today=19;
//            if($today==119){
//                echo 'it\'s ok!!';
//            } else{
//                echo'u r wrong';
//            }
////            ?name=value
////            ?name1=value1&name2=value2        

        $num = $_REQUEST['num'];
//        if (strlen($mobile) == 11) {
//            if (substr($mobile, 2, 1) == 7) {
//                echo 'this number gp';
//            } elseif (substr($mobile, 2, 1) == 9) {
//                echo 'this number bl';
//            } elseif (substr($mobile, 2, 1) == 6) {
//                echo 'this number airtel';
//            } elseif (substr($mobile, 2, 1) == 8) {
//                echo 'this number robi';
//            } else {
//                echo 'this number invalid';
//            }
//        } else {
//            echo 'this is invalid';
//        }
        switch ($num){
        case $num%2==0:
            echo 'even';
            break;
        default :
            echo 'odd';
        }
    
        ?>
    </body>
</html>
