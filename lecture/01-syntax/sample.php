
<html>
   <?PHP 
   ///////////////////////////////(session 3)/////////////////////////// 
    // $x=2;
    // $y=10;
    // function test(){
    //     $z=5;
    //    global $x,$y;
    //    echo  "inside function"." x= $x"." " ." y= $y"; 
    //    echo "<br>";
    //    echo " z= $z"; 
    // }
    // test();
    // echo "<br>";
    // echo "outside function"." x= $x"." " ." y= $y";
    // echo "<br>";
    // echo " z= $z";


    ///////////////////////////////(session 4)///////////////////////////
    $float_var=1.5;
    $int_var=intval($float_var);//for casting
    echo $int_var;
    $str_var=strval($float_var);
    var_dump($int_var);//for data type
    var_dump($str_var);

    $str="hello world";
    $float=floatval($str);
    var_dump($float);
    echo "<br>";
    echo strlen("hello world");
    echo str_word_count("hello world");
    echo strrev("hello world");
    echo strpos("hello world","world");
    echo str_replace("world","maha","hello world");
    echo substr("hello world!",4,7);
    $str="hello world!";
    echo substr($str,0,strpos("$str","!")+1);
    ?> 
</html>

