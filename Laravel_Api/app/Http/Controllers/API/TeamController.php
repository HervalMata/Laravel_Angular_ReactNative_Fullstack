<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     * path = "/api/teams",
     * tags = {"Teams"},
     * summary = "Lista Equipes",
     * @SWG\Response(
     * response = 200,
     * description = "Sucesso: Lista de todas as equipes",
     * @SWG\Schema(ref = "#/definitions/Team")
     * ),
     * @SWG\Response(
     * response = "404",
     * description = "Não Encontrado"
     * )
     * ),
     */
    public function index()
    {
        $listTeam = Team::all();
        return $listTeam;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/teams/{id}",
     * tags = {"Teams"},
     * summary = "Buscar Equipe Pelo Id",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Mostrar a equipe especificada pelo id.",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna a equipe",
     * @SWG\Schema(ref = "#/definitions/Team")
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
        $showTeamById = Team::findOrFail($id);
        return $showTeamById;
    }
}
