<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\PacoteRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class PacoteService
{
    private $pacoteRepository;

    public function __construct(PacoteRepositoryInterface $pacoteRepository)
    {
        $this->pacoteRepository = $pacoteRepository;
    }

    public function buscarTodosPacotes()
    {
        try {
            $pacotes = $this->pacoteRepository->buscarTodosPacotes();
    
            if (count($pacotes) > 0) {
                return response()->json($pacotes, Response::HTTP_OK);
            } else {
                return response()->json([], Response::HTTP_OK);
            }
        } catch(QueryException $e){
            return response()->json(['erro'=> 'Erro de conexão com o banco de dados.'], Reponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function buscarPacote($id)
    {
        try {
            return $this->pacoteRepository->buscarPacote($id);

            if (count($pacote) > 0){
                return response()->json($pacote, Response::HTTP_OK);
            } else {
                return response()->json(null, Response::HTTP_NOT_FOUND);
            }
        } catch(QueryException $e){
            return response()->json(['erro'=> 'Erro de conexão com o banco de dados.']);
        }
    }

    public function criarPacote(Request $request)
    {
        try {
            $pacote = $this->pacoteRepository->criarPacote($request);
            return response()->json($pacote, Response::HTTP_CREATED);
        }catch(QueryException $e) {
            return response()->json(['erro'=> 'Erro de conexão com o banco de dados.']);
        }
    }

    public function editarPacote(int $id, Request $request)
    {
        try {
            $pacote =  $this->pacoteRepository->editarPacote($id, $request);
            return response()->json($pacote, Reponse::HTTP_OK);
        } catch(QueryException $e){
            return response()->json(['erro'=> 'Erro de conexão com o banco de dados.']);
        }
    }

    public function excluirPacote($id)
    {
        try {
            $pacote = $this->pacoteRepository->excluirPacote($id);
            return response()->json(null, Reponse::HTTP_OK);
        }catch(QueryException $e){
            return response()->json(['erro'=> 'Erro de conexãp com o banco de dados.']);
        }
    }
}