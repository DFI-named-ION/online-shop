<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;


class CartComponent extends Component
{
    public function increase_quantity($rowId) {
        $product = Cart::get($rowId);
        $new_qty = $product->qty + 1;
        Cart::update($rowId, $new_qty);
    }

    public function decrease_quantity($rowId) {
        $product = Cart::get($rowId);
        $new_qty = $product->qty - 1;
        Cart::update($rowId, $new_qty);
    }

    public function delete($rowId) {
        $product = Cart::remove($rowId);
        session()->flash('success_message', 'Товар успішно видалений із кошика');
    }

    public function checkout() {
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('login');
        }
    }

    public function calcAmountForCheckout() {
        session()->put('checkout', [
            'discount' => 0,
            'subtotal' => Cart::instance('cart')->subtotal(),
            'total' => Cart::instance('cart')->total(),
            'tax' => Cart::instance('cart')->tax(),
        ]);
    }

    public function delete_all() {
        Cart::destroy();
    }

    public function render()
    {
        $this->calcAmountForCheckout();
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
