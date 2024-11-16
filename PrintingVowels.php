<?php
function check_2_vowels($word){
    preg_match_all("/[aeoiuAEIOU]/",$word,$matches);
    return count($matches[0])>=2;
}
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
    public function display_Voweled_nodes(){
        if($this->head===null){
            echo"list is empty";
            return;
        }
        $current=$this->head;
        while($current->next!=null){
            if(check_2_vowels($current->data)){
            echo"$current->data";
            $current=$current->next;
            }
        
        }
    }
}
$list = new LinkedList();
$list->appendLL("hello");
$list->appendLL("sky");
$list->appendLL("area");
$list->appendLL("yes");
$list->display_Voweled_nodes();