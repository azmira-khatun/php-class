<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    trait A{
        public function into(){
            echo "into method";
        }
        function details(){
            echo "details <br>";
        }
    }




    trait B{
        public function show(){
            echo "This is show result <br>";
        }
    }

    trait C{
        public function display(){
            echo "This is nice play <br>";
        }
    }
   class Main{
    use A,C;
    public $name;
    public $age;
    public function addition (){
echo "2+4 <br>";
    }
   } 
$ab=new Main();
$ab->addition();
$ab->display();
$ab->details();








    
    
    ?>
</body>
</html>