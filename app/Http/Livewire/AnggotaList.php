<?php

namespace App\Http\Livewire;

use App\Models\anggota;
use Livewire\Component;

class AnggotaList extends Component
{
    public $id_bidang;

    public function render()
    {
        if($this->id_bidang != null){
            return view('livewire.anggota-list',[
                'anggota'=>Anggota::where('kode_bidang', '=', $this->id_bidang)->get()
            ]);
        }else{
            return view('livewire.anggota-list',[
                'anggota'=>Anggota::get()
            ]);
        }
    }
}
