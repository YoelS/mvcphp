<?php

class Home {
	public $title;
	public $category ;
	public $description;
	
	public function __construct($title, $category , $description)  
    {  
        $this->title = $title;
	    $this->category = $category ;
	    $this->description = $description;
    } 
}

?>