<?php


class Node {
    #Storing the data to the data variable and the null to the next
    public $data;
    public $next;

    # the initialization starts here
    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    public $head;

    # another initialization for the head comes here after save to be null then,
    public function __construct() {
        $this->head = null;
    }

    # for the insert method
    public function insert($data) {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

}

    # Create a new linked list
    $linkedList = new LinkedList();

    # Insert elements into the linked list
    $linkedList->insert(1);
    $linkedList->insert(2);
    $linkedList->insert(3);

?>