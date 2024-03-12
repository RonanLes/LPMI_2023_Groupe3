<?php

class Cart_M {
    private $items;

    public function __construct() {
        $this->items = [];
    }

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function removeItem($index) {
        if (isset($this->items[$index])) {
            unset($this->items[$index]);
        }
    }

    public function getItems() {
        return $this->items;
    }
}