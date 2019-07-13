<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Syntax</title>
</head>
<body>
    <div id="wrapper" >
    <?php
        //This is first row comment
        
        /* This is block comment
        You cant write comment without insert this -> "//" */

        #This is first chapter of our learning

            /*---Welcome to Basic Syntax---*/
            echo "<h1>Welcome To Chapter 1</h1><br>";

            //---Section 1: First Hello World---//
                echo "<h2>Section 1</h2>";
                echo "Hello World <br><br>";

            //---Section 2: Standard Additional---//
                echo "<h2>Section 2</h2>";
                $x = 10 + 15;
                echo $x;
                echo "<br><br>";

            //---Section 3: Case Sensitive---//
            //function, echo, classes are not case-sensitive character...
                echo "<h2>Section 3</h2>";
                eCHo "This is not case sensitif <br>";
                iF($x="10"){
                    echo "Result is $x <br><br>";
                }

            //but all variable is case-sensitive
                $color = "BLUE";
                echo "My house is " . $color . "<br>";
                echo "My car is " . $cOlor . "<br>";
                echo "My bike is " . $coLoR . "<br><br>";

            /*That is introduction about the syntax
            Lets go to Variable.php
            */
    ?>
    </div>
</body>
</html>