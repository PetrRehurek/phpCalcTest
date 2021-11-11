# phpCalcTest
PHP Test - simple calculator without eval()

1.Index.php (Frondend)
- HTML in PHP file -> loaded ajax.googleapi + ajaxscript + style in header
- HTML Form -> onclick function to fill values in display and buffer
- equal input onclick use function phpAjax from ./script.js with display.value + buffer.value like variables

2.Script.js (Async connection between FE and BE)
- In script.js -> display + buffer values send async. to file math.php

3.Math.php (Backend mathematical function)
- In math.php -> get vars from ajax -> var. from buffer divided to two vars (operator + 2nd nr.)
- Simple switch function on operator and cases for +,-,*,/ and Error message.

4.End decription for testing
- Bracket not solved yet
- Two or more operators without equality between rate not solved
- Incorrect inputs not solved yet
- Keyboard event not set yet.

5. Plan for next version
- Rewrite logic for only one input (delete buffer) -> get one var to math.php
- In math.php with fnc pregmatch (or somethink like this) - create 2 arrays with operators and numbers
- Generate expression from this two arrays with foreach looping (somethink like => $result = $arrnumber[0]+$arroperator[0]+$arrnumber[1]+$arroperator[1]  ..... echo/print result)
- Add keyboard events and try to rescrict invalid input on frontend

