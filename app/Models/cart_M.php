<?php

class Cart_M {
    private $items;

    public function __construct() {
        $this->items = [];
    }

    public function addItem($id, $item) {
        $this->items[$id] = $item;
    }

    public function removeItem($id) {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
    }

    public function getItems() {
        return $this->items;
    }
}
// Usage example:
$cart = new Cart_M();
$cart->addItem(1, 'Item 1');
$cart->addItem(2, 'Item 2');
$cart->removeItem(1);
$items = $cart->getItems();
print_r($items);
