<?php

namespace App\Http\Livewire\Employee;

use Livewire\Component;

class EmpDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.employee.emp-dashboard-component')->layout('layouts.employee');
    }
}
