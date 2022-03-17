<?php

require_once('interface.Openable.php');

class Door implements Openable {


  private $is_open= false;
  private $_locked = false;

  public function open() {
    if($this->_locked) {
      print "Can't open the door.  It's locked.";
    } else {
      print "creak...<br>";
    }
  }
 
  public function close() {
    if(!$this->is_open){
      $this->is_open = false;
    }
    print "Slam!!<br>";
  }

  public function lockJar() {
    $this->_locked = true;
  }

  public function unlockJar() {
    $this->_locked = false;
  }

}

?>
