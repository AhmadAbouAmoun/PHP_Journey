<?php
class node{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data=$data;
        $this->next=null;
    }
}