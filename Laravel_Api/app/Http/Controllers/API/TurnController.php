<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Turn;

class TurnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     * path = "/api/turns"
     * tags = {"Turns"}
     * summary = "Lista Turnos",
     * @SWG\Response(
     * response = 200,
     * description = "Sucesso: Lista de todos os turnos",
     * @SWG\Schema(ref = "#/definitions/Turn")
     * ),
     * @SWG\Response(
     * response = "404",
     * description = "Não Encontrado"
     * )
     * ),
     */
    public function index()
    {
        $listTurn = Turn::all();
        return $listSituation;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/turns/{id}",
     * tags = {"Turns"},
     * summary = "Buscar Turno Pelo Id",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Mostrar o turno especificado pelo id.",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna o turno",
     * @SWG\Schema(ref = "#/definitions/Turn")
     * ),
     *  @SWG\Response(
     * response = "404",
     * description = "Não Encontrado",
     * ),
     *  @SWG\Response(
     * response = "405",
     * description = "Metódo HTTP inválido",
     * )
     * )
     */
    public function show($id)
    {
        $showTurnById = Turn::findOrFail($id);
        return $showTurnById;
    }
}
