<!DOCTYPE html>
<html>
<head>
<style>
    html,body{
    height: 100%;
    display: grid;
    place-items:center;
    background:#717480;
}
    .box{ 
    height: 400px;
    width: 80%;
    background: #4A4453;
    border-radius: 10px;
    padding: 90px 50px;
    box-shadow: 5px 5px 10px rgba(0,0,0,0,2);   
    
}
    
.box .hori .button  {
  

  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline;
  font-size: 16px;
  margin: 50px 10px;
  transition-duration: 0.4s;
  cursor: pointer;
}
        

   
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #85bf85;
}

.button1:hover {
  background-color:#f0dabe;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #85bf85;
   
}

.button2:hover {
  background-color:#f0dabe;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #85bf85;
   
}

.button3:hover {
  background-color:#f0dabe;
  color: white;
}
 .box  .button4 {
  
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 30px 105px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid  #85bf85;
   
}

.button4:hover {
  background-color:#f0dabe;
  color: white;
}
 .box .button5 {

  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 40px 105px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #85bf85;
   
}

.button5:hover {
  background-color:#f0dabe;
  color: white;
}


    
    

</style>
</head>
<body>
  

  <form action="mo.php" method="post">

<div class="box">
<button class="button button4" type="submit" name="forward"> Forward</button>
    <div class="hori">
<button class="button button1" type="submit" name="left" >Left</button>
<button class="button button2" type="submit"name="stop"> Stop</button>
<button class="button button3" type="submit" name="right">Right</button>
        
    </div>
<button class="button button5" type="submit" name="backward">Backward</button>
</div>
</form>


</body>
</html>

