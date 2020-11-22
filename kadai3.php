<?php
//課題1.
function times($result){
    echo $result*2;
}

//課題2.
function sum($a, $b){
    $result = $a + $b;
    echo $result;
}

//課題3.
$arr = array(1,3,5,7,9);
function timesall($arr){
    $result2 = 1;
    foreach($arr as $number){
        $result2 *= $number;
    }
    return $result2;
}
echo timesall($arr);

//課題4
function max_array($arr){
// とりsあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        //どうしたらいいかわからない・・・・
        if($max_number < $a){
            $max_number = $a;
        }
    }
return $max_number;
}
echo max_array($arr);


//課題5.
$str ="\n, <p>あいうえお</p>, $array";
echo strip_tags($str);
//文字列からHTMLタグ、NULLバイト、PHPタグを除く

$arr2 = [1,2,5,7,9];
array_push($arr2, 4);
print_r($arr2);

$arr3 = [2,4,6,8];
$arr4 = [1,3,5,7,9];
$array = array_merge($arr3, $arr4);
print_r($array);
//配列を足す

echo time();
//UNIXタイムスタンプ
echo mktime(0,0,0,19,2,1997);
//指定した日時のタイムスタンプ

echo date('Y/m/d H:i:s');
//日時と時間を取得する