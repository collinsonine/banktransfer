<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Table extends Component
{
    public $coins;
    public function placeholder(){
        return view('loader');
    }
    public function render()
    {
        $response = Http::get('https://api.coincap.io/v2/assets');
        $res = json_decode($response->body());
        // dump($res->data);
        $this->coins = $res->data;
        return view('livewire.table');
    }
}
