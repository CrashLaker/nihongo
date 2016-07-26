<html>
<head>
    <meta charset="UTF-8"/>
    <style type="text/css">
        table{border-collapse:collapse;}
        td{width:25px; height:25px;border:1px solid black !important; vertical-align:middle; text-align:center;}
        
    </style>
</head>
<body>
<?php


echo "<div id='container'>";
getTable("hiragana", "show", 1);
getTable("hiragana", 0, 1);
getTable("hiragana", 0, 1);
getTable("hiragana", 0, 1);


echo "</div>";






/**
 * 1 - "hiragana" || "katakana"
 * 2 - "random" = Random || "sort" = Sort
 * 3 - "show" = Show values || "hide" = Hidden values
 * 4 - "color" = Show colors || "black" = Black color
 */
function getTable($alpha, $random = "sort", $values = "hide", $color = "color"){
    $random = ($random == "sort") ? 0 : 1;
    $values = ($values == "hide") ? 0 : 1;
    $color = ($color == "black") ? 0 : 1;
    
    $rvowels = explode(", ", "a, i, u, e, o");
    $rconsonants = explode(", ", "-, k, s, t, n, h, m, y, w, r, n*");
    
    $vowels = explode(", ", "a, i, u, e, o");
    $consonants = explode(", ", "-, k, s, t, n, h, m, y, w, r, n*");
    
    $hiragana = mbStringToArray("あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもや　ゆ　よわ　　　をらりるれろん　　　　");
    $katakana = mbStringToArray("アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤ　ユ　ヨワ　　　ヲラリルレロン　　　　");
    
    if ($color) $color = ($alpha == "hiragana") ? "red" : "blue";
    
    if ($random){
        shuffle($vowels);
        shuffle($consonants);
    }
        
    echo "<table style='color:$color;'>";
    foreach($vowels as $key=>$val){
        if ($key == 0) echo "<tr><td></td>";
        echo "<td>$val</td>";
        if ($key == count($vowels)-1) echo "</tr>";
    }
    
    foreach($consonants as $key=>$value){
        echo "<tr>";
        echo "<td>$value</td>";
        foreach($vowels as $key2=>$value2){
            echo "<td>";
            if ($values){
                echo $hiragana[array_search($value, $rconsonants)*count($vowels) + array_search($value2, $rvowels)];
            }else{
                echo ($hiragana[array_search($value, $rconsonants)*count($vowels) + array_search($value2, $rvowels)] == "　") ? "-" : "";
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
}





function mbStringToArray ($string) { 
    $strlen = mb_strlen($string); 
    while ($strlen) { 
        $array[] = mb_substr($string,0,1,"UTF-8"); 
        $string = mb_substr($string,1,$strlen,"UTF-8"); 
        $strlen = mb_strlen($string); 
    } 
    return $array; 
} 
?>




</body>
</html>