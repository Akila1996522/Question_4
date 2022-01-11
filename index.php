<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question_1</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="Name">Name</label><input type="text" name="Name" id=""><br>
        <label for="RegNo">Reg No</label><input type="text"Name="REG_NO" id=""><br>
        <input type="submit" value="Submit">
    </form>
    <?php
        class StudentParent{
            public $stdName,$stdRegNum;
            public function __construct($stdName, $stdRegNum){
                $this->stdName=$stdName;
                $this->stdRegNum=$stdRegNum;
            }

        }
        class StudentChild extends StudentParent{
            public function display(){
                echo "The student name is ".$this->stdName." and the Registration Number is ".$this->stdRegNum;
            }   
        }
        
        if($_SERVER["REQUEST_METHOD"] ==="POST"){
            if( isset($_POST['Name']) && isset($_POST['REG_NO'])){
                $student = new StudentChild($_POST['Name'], $_POST['REG_NO']);
                $student->display();
            }
        }
    ?>
</body>
</html>