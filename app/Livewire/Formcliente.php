<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Servico;
use App\Models\PotencialCliente;

class Formcliente extends Component
{
    public $nome = ""; 
    public $telefone = "";
    public $cidade = "";
    public $beneficio = "";
    public $descricao = "";

    public function render()
    {
        $servico_blade = Servico::all()->toArray();
        return view('livewire.formcliente',array('servico'=>$servico_blade));
    }

    public function salvarcliente(){

        $post = PotencialCliente::create([

            'telefone' => $this->telefone,
            'cidade' => $this->cidade,
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'id_servico' => $this->beneficio,
            'viavel' => 0
        ]);
    }
}
