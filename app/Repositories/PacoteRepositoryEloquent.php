<?php

namespace App\Repositories;

use App\Models\Pacote;
use App\Repositories\PacoteRepositoryInterface;
use Illuminate\Http\Request;

class PacoteRepositoryEloquent implements PacoteRepositoryInterface
{
    private $pacote;

    private function __construct(Pacote $pacote)
    {
        $this->pacote->$pacote;
    }

    public function buscarTodosPacotes()
    {
        return $this->pacote
        ->select(
            'id',
            'nome',
            'valor',
            'dataFim',
            'urlImagem'            
        )->get();
    }

    public function buscarPacote(int $id)
    {
        return $this->pacote
        ->select(
            'id',
            'nome',
            'valor',
            'dataFim',
            'urlImagem'           
        )
        ->where('id', $id)
        ->get();
    }

    public function buscarDetalhePacote(int $id)
    {
        return $this->pacote->find($id);
    }

    public function criarPacote(Request $request)
    {
        return $this->pacote->create($request->all());
    }

    public function editarPacote(int $id, Request $request)
    {
        return $this->pacote
        ->where('id', $id)
        ->update($request->all());
    }

    public function excluirPacote(int $id)
    {
        $pacote = Pacote::find($id);
        return $pacote->delete();
    }
}