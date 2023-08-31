<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Producer;
use App\Models\Category;
use Cart;

class ProducerComponent extends Component
{
    use WithPagination;

    public $sorting;
    public $pagesize;
    public $producer_slug;

    public function mount($producer_slug) {
        $this->sorting = 'default';
        $this->pagesize = 8;
        $this->producer_slug = $producer_slug;
    }

    public function store($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Товар успішно  доданий до кошика');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        // Target Producer:
        $producer = Producer::where('slug', $this->producer_slug)->first();
        $producer_name = $producer->name;
        $producer_id = $producer->id;

        // Filter && Sort Config:
        if ($this->sorting == 'date') {
            $products = Product::where('producer_id', $producer_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price') {
            $products = Product::where('producer_id', $producer_id)->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Product::where('producer_id', $producer_id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('producer_id', $producer_id)->paginate($this->pagesize);
        }

        // Producers:
        $producers = Producer::all();

        // Categories:
        $categories = Category::all();

        //
        return view('livewire.producer-component', [
            'products'      => $products,
            'producers'    => $producers,
            'producer_name' => $producer_name,
            'categories'    => $categories,
        ])->layout('layouts.base');
    }
}
