<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface PacoteRepositoryInterface
{
    public function buscarTodosPacotes();
    public function buscarPacote(int $id);
    public function buscarDetalhePacote(int $id);
    public function criarPacote(Request $request);
    public function editarPacote(int $id, Request $request);
    public function excluirPacote(int $id);
}