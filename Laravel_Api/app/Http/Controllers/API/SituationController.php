<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Situation;

class SituationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     * path = "/api/situations"
     * tags = {"Situations"}
     * summary = "Lista Situações",
     * @SWG\Response(
     * response = 200,
     * description = "Sucesso: Lista de todas as situações",
     * @SWG\Schema(ref = "#/definitions/Situation")
     * ),
     * @SWG\Response(
     * response = "404",
     * description = "Não Encontrado"
     * )
     * ),
     */
    public function index()
    {
        $listSituation = Situation::all();
        return $listSituation;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/situations",
     * tags = {"Situations"},
     * summary = "Cadastrar Situação",
     * @SWG\Paramter(
     *     name = "body",
     *     in = "body",
     *     required = true,
     *     @SWG\Schema(ref = "#/definitions/Situation"),
     *     description = "Json format",
     *  ),
     * @SWG\Response(
     * response = 201,
     * description = "Sucesso: Uma nova situação foi cadastrada",
     * @SWG\Schema(ref = "#/definitions/Situation")
     * ),
     *  @SWG\Response(
     * response = "422",
     * description = "Campo requerido não preenchido",
     * ),
     *  @SWG\Response(
     * response = "404",
     * description = "Não Encontrado",
     * ),
     *  @SWG\Response(
     * response = "405",
     * description = "Metódo HTTP inválido",
     * )
     * ).
     */
    public function store(Request $request)
    {
        $createSituation = Situation::create($request->all());
        return $createSituation;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/situations/{id}",
     * tags = {"Situations"},
     * summary = "Buscar Situação Pelo Id",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Mostrar a situação especificada pelo id.",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna a situação",
     * @SWG\Schema(ref = "#/definitions/Situation")
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
        $showSituationById = Situation::findOrFail($id);
        return $showSituationById;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Put(
     * path = "/api/situations/{id}",
     * tags = {"Situations"},
     * summary = "Atualizar Situação",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Atualizar a situação especificada pelo id.",
     *  ),
     * @SWG\Paramter(
     *     name = "body",
     *     in = "body",
     *     required = true,
     *     @SWG\Schema(ref = "#/definitions/Situation"),
     *     description = "Json format",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna a situação atualizada",
     * @SWG\Schema(ref = "#/definitions/Situation")
     * ),
     * @SWG\Response(
     * response = "422",
     * description = "Campo requerido não preenchido",
     * ),
     *  @SWG\Response(
     * response = "404",
     * description = "Não Encontrado",
     * ),
     *  @SWG\Response(
     * response = "405",
     * description = "Metódo HTTP inválido",
     * )
     * ),
     */
    public function update(Request $request, $id)
    {
        $updateSituationById = Situation::findOrFail($id);
        $updateSituationById->update($request->all());
        return $updateSituationById;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Delete(
     * path = "/api/situations/{id}",
     * tags = {"Situations"},
     * summary = "Remover situação",
     * description = "Remover a situação especificada pelo id.",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     format = "int64",
     *     description = "Id da situação para remover.",
     *  ),
     * @SWG\Response(
     * response = "404",
     * description = "Não Encontrado",
     * ),
     *  @SWG\Response(
     * response = "405",
     * description = "Metódo HTTP inválido",
     * )
     * @SWG\Response(
     * response = 204,
     * description = "Sucesso: situação removida",
     * ),
     * )
     */
    public function destroy($id)
    {
        $deleteById = Situation::find($id)->delete();
        return response()->json([], 204);
    }
}
