<?php
class myname{
   public $name;
    public $age;
    public function __construct($name,$age){

    $this->name=$name;
    $this->age=$age;
}

public function boss1(){
    return $this->name;
    //return $this->age;
}
public function boss2(){
    return $this->age;
}
} 
$name1=new myname("nishad",23);

echo $name1->boss1() ."<br>";
echo $name1->boss2();

?>