<!-- simple oop -->

<!-- <?php
class classB3{
    public function std1(){
        echo "Rabia";
    }

    public function std2(){
        echo "Kanwal";
    }
}

$obj=new classB3;
$obj->std1();
$obj->std2();
?> -->

<!-- oop parameter -->

<!-- <?php
class oop{
public $name, $age;
public function std(){
echo "Name: $this->name and Age: $this->age";
}
}
$obj=new oop;
$obj->name="Rabia";
$obj->age=18;
$obj->std();
?> -->

<!-- Html form with oop -->
<!-- <?php
class para{
    public $name, $age;
    public function std3(){
    echo "Name: $this->name and Age: $this->age";
}
}
    
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];



$obj=new para;
$obj->name=$name;
$obj->age=$age;
$obj->std3();

}
?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> -->
    <!-- inline css -->
    <!-- <style>
    .container{
        margin-top: 25px;
    }
    .head{
        margin-top: 25px;
    }
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <center>
    <h2 class="head">SIMPLE FORM</h2>
    </center>
<div class="container">
<form action="index.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="mb-3">
    <label for="exampleInputage" class="form-label">Age</label>
    <input type="number" class="form-control" name="age" >
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>    


</body>
</html> -->

<!-- constructor -->
<?php
class cons{
public $name, $age;
public function __construct($n,$a){
$this->name=$n;
$this->age=$a;
    // echo "Name$this->name:$n and Age$this->age:$a <br>";
    echo "Name: $this->name and Age: $this->age <br>";
}
}

$obj=new cons("rabia",20);
$obj=new cons("hamza",18); 
$obj=new cons("osama",15);
$obj=new cons("alishba",19);
$obj=new cons("tooba",21);


?>