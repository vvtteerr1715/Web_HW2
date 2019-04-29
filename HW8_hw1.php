<?php
header("Content-Type:text/html; charset=big5");
class CTriangle{
 public  $edge1;
 public  $edge2;
 public  $edge3;
 
	function __construct(){
		$this->edge1 = 3;
		$this->edge2 = 4;
		$this->edge3 = 5;
	}
	
	function __destruct(){
		
	}
 public function setData($a,$b,$c){
		$this->edge1 = 3;
		$this->edge2 = 4;
		$this->edge3 = 5;
	if($this->isLegal($a,$b,$c))
	 {
		$this->edge1 = $a;
		$this->edge2 = $b;
		$this->edge3 = $c;
	 }
	}
	
  public function showData($i){
		echo"<hr>";
		echo "第";
		echo $i+1;
		echo "個三角形三邊為";
		echo "Edge1 : ".$this->edge1.",";
		echo "Edge2 : ".$this->edge2.",";
		echo "Edge3 : ".$this->edge3.".";
		if($this->isRightAngled())
			echo "是直角三角形";
		 else 
			 echo "不是直角三角形";
		echo"<hr>";
	}
	private static  function isLegal( $a,$b,$c)
  {
	   if (($a<= $b && $b <= $c) && ($a - $b < $c && $c < $a + $b)) 
	    {
            return true;
        } 
		else 
		{
            return false;
        }
  }
  
  public function isRightAngled()
  {
	  if (($this->edge1 * $this->edge1) + ($this->edge2 * $this->edge2) == ($this->edge3 * $this->edge3)) 
	    {         
            return true;
        }
	  else 
		{
            return false;
        }
  } 	
}

for($i=0;$i<10;$i++)
{
	$objArr[$i] = new CTriangle;
	$objArr[$i]->setData(rand(5,29),rand(9,49),rand(28,89));
	$objArr[$i]->showData($i);
}
?>
