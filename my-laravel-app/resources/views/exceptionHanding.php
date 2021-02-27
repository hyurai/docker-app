<?php
//例外処理、意図していない時にエラーが発生した場合自分なりに処理を変えたりメッセージを表示させること
function division($int1,$int2){
    try{
        if($int2 == 0 ){
            throw new Exception('0で割れません');
            //Exceptionクラスは最初からphp側で定義されている例外処理のクラス
        }
        return $int1 / $int2;
    //例外が発生する恐れのある
    }catch(Exception $e){
        //例外が出たときの処理をcatchの中に書きます
        echo "例外処理が発生しました";
        echo "<br>";
        echo $e->getMessage();
        //getMessageとは例外メッセージを取得するメソッド
        //try
    }
}
echo division(10,0);
?>  