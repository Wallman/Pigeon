<?php
  class Search{
    function __construct($from, $to, $now, $day, $hour, $minute){
      $this->from = $from;
      $this->to = $to;
      $this->now = $now;
      $this->day = $day;
      $this->hour = $hour;
      $this->minute = $minute;
    }

    public $id;
    public $from;
    public $to;
    public $now;
    public $day;
    public $hour;
    public $minute;
    public $sender;
    public $receiver;
  }
 ?>
