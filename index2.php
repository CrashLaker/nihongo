<html>
<head>
    <meta charset="UTF-8"/>
    <style type="text/css">
        <?php
            $size = 28;
        ?>
        *{margin:0; padding:0;}
        #container{position:absolute; top:15px; left: 10px;}
        table{float:left;border-collapse:collapse;}
        td{width:<?php echo $size; ?>px; height:<?php echo $size; ?>px;border:1px solid black !important; vertical-align:middle; text-align:center;}
        
    </style>
</head>
<body>
<?php
include("func.php");

echo "<div id='container'>";
getTable("hiragana", "sort", "hide");
getTable("katakana", "sort", "hide");
getTable("hiragana", "sort", "hide");
getTable("katakana", "sort", "hide");

echo "<div style='clear:both;'></div>";

getTable("katakana", "sort", "hide");
getTable("hiragana", "sort", "hide");
getTable("katakana", "sort", "hide");
getTable("hiragana", "sort", "hide");

echo "<div style='clear:both;'></div>";

getTable("hiragana", "sort", "hide");
getTable("katakana", "sort", "hide");
getTable("hiragana", "sort", "hide");
getTable("katakana", "sort", "hide");


echo "</div>";

?>








</body>
</html>