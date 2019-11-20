
<?php

if(isset($_GET['submit'])){
  htmlspecialchars($_GET['number_first']); 
$number_first = $_GET['number_first']; 

 htmlspecialchars($_GET['number_second']); 
$number_second = $_GET['number_second'];   
    
    
 if($_GET['sing'] == '+'){  
  $sum = $number_first + $number_second;
 }
 if($_GET['sing'] == '-'){  
  $sum = $number_first - $number_second;
 } 
 if($_GET['sing'] == '/'){  
  $sum = $number_first / $number_second;
 }  
if($_GET['sing'] == '*'){  
  $sum = $number_first * $number_second;
 }    
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
   <main>
       <section>
           <form action="index.php" enctype="multipart/form-data" method="get">
  <fieldset>
    <legend>Калькулятор</legend>
      <label for="number"><em>Число:</em></label><input type="number" name="number_first" id="number_first" max="1000" min="1" placeholder="число" required</input>
      
      <select name="sing" id="sing">
          <option value="+">&plus;</option>
          <option value="-">&#8722;</option>
          <option value="/">&divide;</option>
          <option value="*">&#215;</option>
      </select>
      
      <label for="number"><em>Число:</em></label><input type="number" name="number_second" id="number_second" 
max="1000" min="1" placeholder="число" required>
       <label for="number"><em>Ответ: <?=$sum ?></em></label>
       <p><input type="submit" name="submit" value="Подсчет"></p>
       <p><input type="reset" name="reset" value="Очистеть"></p>

  </fieldset>
</form>
       </section>
       <section></section>
   </main>
    
</body>
</html>
