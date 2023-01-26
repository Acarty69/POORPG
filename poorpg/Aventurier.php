<?php

abstract class Aventurier
{
    public $_name;
    public $_class;

    public function __construct(string $name, string $class)
    {
        $this->_name = $name;
        $this->_class = $class;
    }

  public function sayHello(){
   echo "Je te dis bonjour et mon nom est ".$this->_name;
  }
  public function avance(){
    echo " et J'avance";
  }
  public function sayClass(){
    echo "Je suis un".$this->_class;
  }
}

?>
