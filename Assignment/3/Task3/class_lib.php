<?php

class EventItem {

   //private $itemname = "steak";
   //private $desc = "Fresh flame broiled AAA Angus beef done to perfection.";
   //private $price = "$49.99";

   private $eventName = "";
   private $eventDate = "";
   private $eventDesc = "";
   private $eventPrice = "";

   function __construct($param1, $param2, $param3, $param4) {
      $this->eventName = $param1;
      $this->eventDate = $param2;
      $this->eventDesc = $param3;
      $this->eventPrice = $param4;
   }

   function get_eventName() {

      return $this->eventName;
   }

   function get_eventDate() {
   
   	return $this->eventDate;
   }
   
   function get_eventDesc() {

      return $this->eventDesc;
   }

   function get_eventPrice() {

      return $this->eventPrice;
   }
}

?>


