<?php

namespace App\Livewire;

use Livewire\Component;

class ShowForm extends Component
{
    public $sponsorship= false; 
    public $study= false;
    public $work= false;
    public $visitor= false;
    public $resi= false;
    public $cit= false;
    public $bus= false;
    public $pgs= false;
    public $dcs= false;
    public $dc= false;
    public function render()
    {
        return view('livewire.show-form');
    }
}
