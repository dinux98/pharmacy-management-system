<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Models\psup;
use Livewire\WithFileUploads;

class PrescriptionComponent extends Component
{
    use WithFileUploads;
    public $name="";
    public $email;
    public $mobile;
    public $whatsapp;
    public $address;
    public $city;
    public $image;

    public function render()
    {
        return view('livewire.prescription-component')->layout('layouts.base');
    }
    function saveData(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'whatsapp' => 'required',
            'address' => 'required',
            'city' => 'required',
            'image' => 'required'

        ]);

        $psup = new psup;
        $psup->name=$this->name;
        $psup->email=$this->email;
        $psup->mobile=$this->mobile;
        $psup->whatsapp=$this->whatsapp;
        $psup->address=$this->address;
        $psup->city=$this->city;
        $psup->image=$this->image;
        $psup->save();
        session()->flash('message','Prescription has been submit successfully!');

        return redirect()->to('/PrescripUpload');


    }
}
