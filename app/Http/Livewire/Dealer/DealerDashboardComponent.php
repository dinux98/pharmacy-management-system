<?php

namespace App\Http\Livewire\Dealer;

use Livewire\Component;

class DealerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.dealer.dealer-dashboard-component')->layout('layouts.base');
    }
}
