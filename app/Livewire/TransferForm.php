<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\Attributes\Rule;

class TransferForm extends Component
{
    public $account_name;


    public $bank_name;

    #[Rule('required')]
    public $bank;

    #[Rule('required|min:10|max:10')]
    public $account_number;
    public $remark;

    public function mount(){
        $response = Http::get('https://api.paystack.co/bank',
        [
            "Authorization" => "Bearer ". config("app.secret_key")
        ]);

        $res = json_decode($response->body());

        $this->bank_name = $res->data;
    }

    public function verifyAccount(){
        // $this->validate();
        $response = Http::get("https://api.paystack.co/bank/resolve?account_number=2178384212&bank_code=".$this->bank,
        [
            "Authorization" => "Bearer ".config('app.secret_key'),
            "Cache-Control" => "no-cache",
        ]);
        $res = json_decode($response->body());
        dump($res);
    }
    public function placeholder(){
        return view('loader');
    }
    public function render()
    {
        if (!empty($this->account_number)) {
            $this->verifyAccount();
        }
        return view('livewire.transfer-form');
    }
}
