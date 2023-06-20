<html>
    <head>
    <style>
        <?php include "c:/my_project/average/style.css"; ?>
         
    </style>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="container">
            <div class="card">
                <a class="singup">Student Average</a>
                <div class="inputBox1">
                    <input type="text" name="freg">
                    <span class="user">Roll NO</span>
                </div>
    
                <div class="inputBox">
                    <input type="text" name="name1">
                    <span>Subject 1</span>
                </div>
   
                <div class="inputBox" >
                    <input type="text" name="name2">
                    <span>Subject 2</span>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="name3">
                    <span>Subject 3</span>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="name4">
                    <span>Subject 4</span>
                </div> 
                
                <div class="inputBox">
                    <input type="text" name="name5">
                    <span>Subject 5</span>
                </div> 
    
                <button class="enter">Submit</button>
    
            </div>
        </div>
        </form>
        <?php
if($_SERVER['REQUEST_METHOD']==='POST')
{
$register = $_POST['freg'];
if(empty($register)){
    echo"<div class='div'>Enter the Register No<br></div>";
}
else{
  echo "<div class='div'>Roll No:$register<br></div>";
}
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$name4 = $_POST['name4'];
$name5 = $_POST['name5'];
  if(empty($name1 && $name2 && $name3 && $name4 && $name5)){
    echo"<div class='div'>Enter the marks<br></div>";
  }  
if($name1<=35){
    echo "<div class='div'>sub1 fail<br></div>";
}
elseif($name2<=35){
    echo"<div class='div'>sub2 fail<br></div>";
}
elseif($name3<=35){
    echo"<div class='div'>sub3 fail<br></div>";
}
elseif($name4<=35){
    echo"<div class='div'>sub4 fail<br></div>";
}
elseif($name5<=35){
    echo"<div class='div'>sub5 fail<br></div>";
}
  else{
    function calculate_average($name1,$name2,$name3,$name4,$name5)
        {
           $sum=$name1 +$name2 +$name3+$name4+$name5;
           $average= $sum/ 5;
           return "<div class='div'>Total:$sum<br>Average:$average<br></div>";
        }
        $result=calculate_average($name1 ,$name2 ,$name3,$name4,$name5);
        echo $result;
    }
}
?>
    </body>
</html>