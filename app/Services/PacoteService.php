<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\PacoteRepositoryInterface;

class PacoteService
{
    private $pacoteRepository;

    public function __construct(PacoteRepositoryInterface $pacoteRepository)
    {
        $this->pacoteRepository = $pacoteRepository;
    }

    public function buscarTodosPacotes()
    {
        $pacotes = $this->pacoteRepository->buscarTodosPacotes();

        if (count($pacotes) > 0) {
            return $pacotes;
        } else {
            return array();
        }
    }

    public function buscarPacote($id)
    {
        return $this->pacoteRepository->buscarPacote($id);
    }

    public function criarPacote(Request $request)
    {
        return $this->pacoteRepository->criarPacote($request);
    }
}