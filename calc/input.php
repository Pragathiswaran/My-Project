<html>
    <head>
        <style>
          <?php include "c:/my_project/calc/style.css"; ?>

    </style>
    </head>
<body>
    <h2>Deposit Interest Calculation</h2>
    <form method="post" action="<?php echo$_SERVER['PHP_SELF']; ?>">
    
<div class="input">
    <input autocomplete="off" type="text" name="fname">
    <label for="name">Account No</label>
</div>
<div class="input">
    <input autocomplete="off"  type="text" name="num1">
    <label for="name">Amount</label>
</div>
<div class="input">
    <input autocomplete="off" type="text" name="num2">
    <label for="name">Deposite</label>
</div>
<div class="input">
    <input autocomplete="off" type="text" name="num3">
    <label for="name">Interest</label>
</div>
<button>
  Submit
</button><br><br>
</form>
<div class="out">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     $account=$_POST['fname'];
     $amount=$_POST['num1'];
     $deposit=$_POST['num2'];
     $interest=$_POST['num3']; 
        function sum(int $amount, int $deposit,int $interest) {
        $w = ($amount * $deposit * $interest)/100;
        return $w;
        }
		if (is_numeric($account) && is_numeric($amount) && is_numeric($deposit) && is_numeric($interest)) {
			$interest = sum($amount, $deposit, $interest);
			echo "<div  class='css'>Account Number: ". $account ."</div>";
			echo "<div class='css'>Simple Interest: " . $interest . "</div>";
		} else {
			if (!is_numeric($account)) {
				echo "<div class='css'>Enter the Acoount No</div>";
			}
			if (!is_numeric($amount)) {
				echo "<div class='css'>Enter the Amount</div>";
			}
			if (!is_numeric($deposit)) {
				echo "<div  class='css'>Enter the duratoin of deposit</div>";
			}
			if (!is_numeric($interest)) {
				echo "<div class='css'>Enter the rate of interest</div>";
			}
        	}
	}
 ?>
</div>
</body>
</html>