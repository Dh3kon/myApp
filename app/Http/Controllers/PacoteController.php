<?php

namespace App\Http\Controllers;

use App\Models\Pacote;
use App\Services\PacoteService;
use Illuminate\Http\Request;

class PacoteController extends Controller
{

    private $pacoteService;

    public function __construct(PacoteService $pacoteService)
    {
        $this->pacoteService = $pacoteService;
    }

    public function buscarTodosPacotes()
    {
        return $this->pacoteService->buscarTodosPacotes();
    }

    public function buscarPacote(int $id)
    {
        return $this->pacoteService->buscarPacote($id);
    }

    public function buscarDetalhePacote(int $id){
        return $this->pacoteService->buscarDetalhePacote($id);
    }

    public function criarPacote(Request $request)
    {
        return $this->pacoteService->criarPacote($request);
    }

    public function editarPacote(int $id, Request $request)
    {
        return $this->pacoteService->editarPacote($id, $request);
    }

    public function excluirPacote(int $id)
    {
        return $this->pacoteService->excluirPacote($id);
    }
}