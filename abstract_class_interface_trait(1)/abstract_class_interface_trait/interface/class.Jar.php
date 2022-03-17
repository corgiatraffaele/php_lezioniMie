<?php

require_once('interface.Openable.php');





class Jar implements Openable {
  private $contents;
  private $status='closed'



  public function __construct($contents) {
    $this->contents = $contents;
    
  }

  public function open() {
    if($this->status=='closed') {
      $this->status='open';
      print "Jar It's open.";
    } else {
      print "the jar is already open<br>";}
  }
 
  public function close() {
    if(!$this->status=='open'){
      $this->status = 'closed';
      print "the jar is now closed<br>";
    }else{
      print "can't close the jar is already closed"
    
    }
}

