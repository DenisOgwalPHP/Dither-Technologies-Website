<?php

namespace App\Http\Livewire;

use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $slug;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $city;
    public $location;
    public $country;

    public $thankyou;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'city' => 'required',
            'location' => 'required',
            'country' => 'required'
        ]);
    }

    public function placeOrder(){
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'city' => 'required',
            'location' => 'required',
            'country' => 'required'
        ]);
        $project = Project::where('slug', $this->slug)->first();
        $order = new Order();
        $order->price = $project->price;
        $order->name = $project->name;
        $order->image = $project->image;
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->mobile = $this->mobile;
        $order->city = $this->city;
        $order->location = $this->location;
        $order->country = $this->country;
        $order->save();

        $this->thankyou = 1;
        session()->forget('checkout');

        $this->sendOrderConfirmationMail($order);
    }

    public function sendOrderConfirmationMail($order){
        Mail::to($order->email)->send(new OrderMail($order));
    }


    public function verifyForCheckout(){
        if(!Auth::check()){
            return redirect()->route('checkout',['slug' =>$this->slug]);
        }
        else if($this->thankyou){
            return redirect()->route('thankyou');
        }

    }
    public function render()
    {
        $project = Project::where('slug', $this->slug)->first();
        $this->verifyForCheckout();
        return view('livewire.checkout-component',['project'=>$project])->layout('layouts.base');
    }
}