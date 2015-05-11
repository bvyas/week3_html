<?php 
class Doublylinked
{
	public $head, $tail;
	public function __construct()
	{
		$this->head = null;
		$this->tail = null;
	} 
	public function AddNode($node)
	{
	if($this->head == null)
	{
		$this->head =$node;	
		$this->tail =$node;
	}
	else
	{		
		$node->prev = $this->tail;
		$node->prev->next= $node;
		$node->next=null;
		$this->tail = $node;	
	}
	}
}
class Node
{
	public $prev, $next, $value;
	public function __construct($value)
	{
		$this->value = $value;
	}
}
$node1 = new Node(3);
$node2 = new Node(4);
$node3 = new Node(5);
$list = new Doublylinked();
$list->AddNode($node1);
$list->AddNode($node2);
$list->AddNode($node3);
var_dump($list);


//$list = new Doublylinked();
//$list->AddNode($node2);
//var_dump($node2);
?>
