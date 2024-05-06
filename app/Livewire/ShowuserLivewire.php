<?php

namespace App\Livewire;

use App\Models\MyuserModel;
use Livewire\Component;

class ShowuserLivewire extends Component
{
    public function render()
    {
        $users = MyuserModel::all();
        return view('livewire.showuser-livewire',compact('users'));
    }
}
