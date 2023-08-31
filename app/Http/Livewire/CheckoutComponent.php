<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $ship_to_different;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;

    public $second_firstname;
    public $second_lastname;
    public $second_email;
    public $second_mobile;
    public $second_line1;
    public $second_line2;
    public $second_city;
    public $second_province;
    public $second_country;
    public $second_zipcode;

    public function update($fields) {
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email',
            'modile'    => 'required',
            'line1'     => 'required',
            'city'      => 'required',
            'province'  => 'required',
            'country'   => 'required',
            'zipcode'   => 'required'
        ]);
    }

    public function addOdred() {
        $this->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email',
            'modile'    => 'required',
            'line1'     => 'required',
            'city'      => 'required',
            'province'  => 'required',
            'country'   => 'required',
            'zipcode'   => 'required'
        ]);

        $order = new Order();
        $order->user_id = Auth::user();
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->tax = session()->get('checkout')['tax'];
        $order->discount = session()->get('checkout')['discount'];
        $order->total = session()->get('checkout')['total'];

        $order->firstName = $this->firstname;
        $order->lastName = $this->lastname;
        $order->email = $this->email;
        $order->mobile = $this->mobile;

        $order->line1 = $this->line1;
        $order->line2 = $this->line2;

        $order->city = $this->city;
        $order->province = $this->province;
        $order->city = $this->city;
        $order->country = $this->country;
        $order->zipcode = $this->zipcode;

        $order->status = 'ordered';
        $order->is_shipping_different = $this->ship_to_different ? 1 : 0;

        $order->save();
    }

    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}