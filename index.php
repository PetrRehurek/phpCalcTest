<?php

?>

<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./script.js" type="text/javascript"></script>
</head>

<body>


<form class="main" action="" method="get">

    <input id="display" class="display" type="text" id="display" name="display" disabled/>
    <input id="buffer" class="display" type="text" id="buffer" name="buffer" disabled/>

    <input class="operator" type="button" name="number" value="(" onclick="buffer.value+='('" />
    <input class="operator" type="button" name="number" value=")" onclick="buffer.value+=')'" />
    <input class="operator" type="button" name="amplify" value="🠐" onclick="buffer.value=buffer.value.slice(0, value.length - value.length -1)" />
    <input class="operator" type="button" name="delete" value="CE" onclick="buffer.value=''; display.value=''" />
    <input class="number" type="button" name="7" value="7" onclick="buffer.value+='7'" />
    <input class="number" type="button" name="8" value="8" onclick="buffer.value+='8'" />
    <input class="number" type="button" name="9" value="9" onclick="buffer.value+='9'" />
    <input class="operator" type="button" name="operator" value="÷" onclick="display.value = display.value+=buffer.value; buffer.value='/'" />
    <input class="number" type="button" name="4" value="4" onclick="buffer.value+='4'" />
    <input class="number" type="button" name="5" value="5" onclick="buffer.value+='5'" />
    <input class="number" type="button" name="6" value="6" onclick="buffer.value+='6'" />
    <input class="operator" type="button" name="operator" value="×" onclick="display.value = display.value+=buffer.value; buffer.value='*'">
    <input class="number" type="button" name="1" value="1" onclick="buffer.value+='1'" />
    <input class="number" type="button" name="2" value="2" onclick="buffer.value+='2'" />
    <input class="number" type="button" name="3" value="3" onclick="buffer.value+='3'" />
    <input class="operator" type="button" name="operator" value="-" onclick="display.value = display.value+=buffer.value; buffer.value='-'" />
    <input class="number" type="button" name="0" value="0" onclick="buffer.value+='0'" />
    <input class="number" type="button" name="comma" value="." onclick="buffer.value+='.'" />
    <input class="operator" type="button" id="equal" name="" value="=" onclick="phpAjax(display.value, buffer.value)" />
    <input class="operator" type="button" id="plus" name="operator" value="+" onclick="display.value = display.value+=buffer.value; buffer.value='+'" />
</form>

</body>
</html>
