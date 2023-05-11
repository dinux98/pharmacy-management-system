<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;

class DocDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.doctor.doc-dashboard-component')->layout('layouts.doctor');
    }
}
