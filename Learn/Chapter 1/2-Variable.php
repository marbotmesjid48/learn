<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable PHP</title>
</head>
<body>
    <?php
        /*--Welcome to Basic Variable */

        //Section 1 : Introduction Variable
        //Variable start with $
        //Declaring some Variable
        echo "<h2>Section 1</h2>";
        $txt = "Hello";
        $x = 10;
        $y =5;

        echo $txt . "<br>";
        echo $x . "<br>";
        echo $y . "<br>";

        //Section 2 : Output Variable
        //This is some method to show variable's result
        echo "<h2>Section 2</h2>";
        echo "1. ";
        $txt = "Kakaroto";
        echo "My name is $txt";
        echo "<br>";

        echo "2. ";
        echo "My name is " . $txt;
        echo "<br>";

        //Section 3 : Global and Local Scope
        //Variable Global can't be accessed by Variable Local(Function/Class);
        echo "<h2>Section 3</h2>";
        echo "Global Scope";
        $d = "10";
        function globaltest(){
            //this local scope will be error
            echo "variable function is : $d <br>";
        }
        globaltest();
        //this global scope will show the result
        echo "variable function is : $d <br><br>";

        
        //Variable Scope(Function/Class) can't be accessed by Variable Global;
        echo "Local Scope <br>";
        function localtest(){
            //this local scope will show the result
            $u = "10";
            echo "variable function is : $u <br>";
        }
        localtest();
        //this global scope will error
        echo "variable function is : $u";
        echo "<br><br>";

        //To make variable can access global within local scope, use "global" in local scope
        echo "Variable become Global <br>";
        $x = 14;
        $y = 10;
        
        function myTest() {
            //insert global
            global $x, $y;
            $y = $x + $y;
        }
        
        myTest();
        echo $y; // outputs 24
        echo "<br>";

        //We can make variable can access global within local scope, use "$GLOBAL[]" in local scope
        echo "Variable become Global with $ global <br>";
        $a = 12;
        $b = 20;
        
        function my2Test() {
            //insert $GLOBAL[]
            $GLOBALS['a']=$GLOBALS['b']+$GLOBALS['a'];
            echo $GLOBALS['a'] . "<br>"; // outputs 32
        }
        
        my2Test();

        //Section 4 : Static
        //When a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted
        //Otherwise you can use "static" if you dont want the variables deleted.
        echo "<h2>Section 3</h2>";
        echo "Variable Static <br>";

        function mystatic(){
            static $w = 0;
            echo $w;
            $w++;
        }

        mystatic();
        echo "<br>";
        mystatic();
        echo "<br>";
        mystatic();
        echo "<br>";

        /*That is basic Variable for PHP Programming*/
    ?>
</body>
</html>
    