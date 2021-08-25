<?php

namespace App;

class Link extends MenuComponent {

    private $link;
    private $title;

    function __construct($link, $title)
    {
        $this->link = $link;
        $this->title = $title;        
    }

    public function render() : string { 
        return "<a href={$this->link}>{$this->title}</a>";
    }
}