Suppose that you have to implement a class named Dragonball.
This class must have an attribute named ballCount (which starts from 0) and a method iFoundaBall.
When iFoundaBall is called, ballCount is increased by one. 
If the value of ballCount is equal to seven, then the message You can ask your wish is printed, 
and ballCount is reset to 0. How would you implement this class?



<?php
class DragonBall {
  // Properties
  public $ballCount;


  function __construct(){
  	
   	$this->set_ballCount(0);
  }


  // Methods
 public function set_ballCount($ballCount) {
    $this->ballCount = $ballCount;
  }
  function get_ballCount()  {
    return $this->ballCount;
    
  }
 public function iFoundaBall(){
  			if($this->ballCount<7){
          
            	$this->ballCount+=1;}
          else  {
      
          echo "You can ask your wish" ."</br>";
          
   $this->ballCount=0;
  }
  }

  
}

$Dragon = new DragonBall();

$Dragon->iFoundaBall();
$Dragon->iFoundaBall();
$Dragon->iFoundaBall();
$Dragon->iFoundaBall();
$Dragon->iFoundaBall();
$Dragon->iFoundaBall();
$Dragon->iFoundaBall();
$Dragon->iFoundaBall();

$Dragon->iFoundaBall();
$Dragon->iFoundaBall();

?>
 
