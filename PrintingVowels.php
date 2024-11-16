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
class LinkedList{
    public $head;
    public function __construct(){
        $this->head=null;
    }
    public function appendLL($data){
        $node=new Node($data);
        if($this->head===null){
            $this->head=$node;
            return;
        }
        else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next=$node;
        }
    }
    
}