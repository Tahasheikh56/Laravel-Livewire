<?php

namespace App\Livewire;

use App\Models\MyuserModel;
use Livewire\Component;

class EdituserLivewire extends Component
{
    public $userId;
    public $name;
    public $email;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount($id)
    {
        $this->userId = $id;
        $user = MyuserModel::find($this->userId);
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        $p = MyuserModel::find($this->userId);
        return view('livewire.edituser-livewire', compact('p'));
    }

    public function updateUser()
    {
        $user = MyuserModel::find($this->userId);
        if ($user) {
            $user->name = $this->name;
            $user->email = $this->email;
            $user->save();
            $this->reset();
        }

        return redirect()->back();
    }
}
