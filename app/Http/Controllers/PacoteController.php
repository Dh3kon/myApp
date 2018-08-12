<?php

namespace App\Http\Controllers;

use App\Models\Pacote;
use App\Services\PacoteService;

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
}