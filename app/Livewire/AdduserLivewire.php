<?php

namespace App\Livewire;

use App\Models\MyuserModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdduserLivewire extends Component
{ 
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $image;

    protected $rules = [
        'name' => 'required|alpha',
        'email' => 'required|email|unique:myuser',
        'password' => 'required|min:6',
        'image' => 'required|image|max:2048',
    ];

    public function addUser(){
        $this->validate();

    //aise bhi hota h jese form me request se aik variable store karte
    //   $data =  $this->validate();
    //   MyuserModel::create($data);

    $name = rand(00000,99999). "." .$this->image->extension();
    $path = $this->image->storeAs('images',$name,'public');
    $this->image = "storage/" . $path;

        MyuserModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'image' => $this->image,
        ]);
        $this->reset();
        session()->flash('success', 'User added successfully');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.adduser-livewire');
    }
}
