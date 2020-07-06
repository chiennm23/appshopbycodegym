<?php


namespace App;


class Cart
{
    public $items;
    public $totalQty;
    public $totalPrice;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($product)
    {
        $productStore = [
            'item' => $product,
            'totalQty' => 0,
            'totalPrice' => 0
        ];

        if ($this->items) {
            if (array_key_exists($product->id, $this->items)) {
                $productStore = $this->items[$product->id];
            }
        }

        $productStore['totalQty']++;
        $productStore['totalPrice'] += $product->price;

        $this->items[$product->id] = $productStore;
        $this->totalQty++;
        $this->totalPrice += $product->price;
    }
}
