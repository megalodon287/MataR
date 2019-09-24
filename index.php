<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <title>Regine Megg Mata</title> 
  
    <style> 
        html { 
    font-family: Arial; 
    } 
    body { 
	text-align: center;
  	padding: 15px;
  	background-image: url(https://media0.giphy.com/media/TxVVB6PfWMjE4/giphy.gif?cid=790b761196ca75e7f348efbd0c555bfe43839792b20cebf2&rid=giphy.gif);
}
</style> 
</head> 
  
<body> 
<h1 style="font-size:330%; color: Yellow;"><i>guess the number</i></h1> 
  
<p style="font-size:100%;color:White;">TRY TO GUESS THE RANDOM NUMBER WE HAVE SELECTED FROM 1 - 10. GOODLUCK!</p> 
  
<div class="form" style="color:White;"> 
    <label for="guessField"><b>ENTER A GUESS:</b> </label> 
    <input type = "text" id = "guessField" class = "guessField"> 
    <input type = "submit" value = "SUBMIT GUESS" 
           class = "guessSubmit" id = "submitguess"> 
</div> 
  
<script type = "text/javascript"> 
  
    // random value generated 
    var y = Math.floor(Math.random() * 10 + 1); 
      
    // counting the number of guesses 
    // made for correct Guess 
    var guess = 1; 
      
    document.getElementById("submitguess").onclick = function(){ 
      
   // number guessed by user      
   var x = document.getElementById("guessField").value; 


  if (x == "") {
 alert("Missing guess parameter"); 
}
  else if(x == y) 
   {     
       alert("Congratulations - You are right"
               ); 
   } 
else if(x > y) 
   {     
       guess++; 
       alert("Your guess is too high"); 
   } 
else if(x < y) 
   {     
       guess++; 
       alert("Your guess is too low"); 
   } 

   else
   { 
       guess++; 
       alert("Your guess is not a number") 
   } 
} 
</script> 
</body> 
</html>                     
