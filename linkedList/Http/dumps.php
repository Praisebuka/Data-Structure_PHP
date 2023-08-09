<?php


class LinkedList {
    # create the head of the list that points to the head.
    public $head; 

    #then the constructor should initialize the head to null
    public function __construct() {
        $this->head = null;
    }
}

class Node {
    public $data;
    public $next;

    public function __construct($k) {
        $this->data = $k;
        $this->next = null;
    }
}

function areIdentical($a, $b) {
    while ($a != null && $b != null) {
        if ($a->data != $b->data) {
            return false;
        }
        $a = $a->next;
        $b = $b->next;
    }
    return ($a == null && $b == null);
}

?>
