<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unit;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     * path = "/api/units"
     * tags = {"Units"}
     * summary = "Lista Unidades",
     * @SWG\Response(
     * response = 200,
     * description = "Sucesso: Lista de todas as unidades",
     * @SWG\Schema(ref = "#/definitions/Unit")
     * ),
     * @SWG\Response(
     * response = "404",
     * description = "Não Encontrado"
     * )
     * ),
     */
    public function index()
    {
        $listUnit = Unit::all();
        return $listUnit;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/units",
     * tags = {"Units"},
     * summary = "Cadastrar Unidade",
     * @SWG\Paramter(
     *     name = "body",
     *     in = "body",
     *     required = true,
     *     @SWG\Schema(ref = "#/definitions/Unit"),
     *     description = "Json format",
     *  ),
     * @SWG\Response(
     * response = 201,
     * description = "Sucesso: Uma nova unidade foi cadastrada",
     * @SWG\Schema(ref = "#/definitions/Unit")
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
        $createUnit = Unit::create($request->all());
        return $createUnit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/units/{id}",
     * tags = {"Units"},
     * summary = "Buscar Unidade Pelo Id",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Mostrar a unidade especificada pelo id.",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna a unidade",
     * @SWG\Schema(ref = "#/definitions/Unit")
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
        $showUnitById = Unit::findOrFail($id);
        return $showUnitById;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Put(
     * path = "/api/units/{id}",
     * tags = {"Units"},
     * summary = "Atualizar Unidade",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Atualizar a unidade especificada pelo id.",
     *  ),
     * @SWG\Paramter(
     *     name = "body",
     *     in = "body",
     *     required = true,
     *     @SWG\Schema(ref = "#/definitions/Unit"),
     *     description = "Json format",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna a unidade atualizada",
     * @SWG\Schema(ref = "#/definitions/Unit")
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
        $updateUnitById = Unit::findOrFail($id);
        $updateUnitById->update($request->all());
        return $updateUnitById;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Delete(
     * path = "/api/units/{id}",
     * tags = {"Units"},
     * summary = "Remover Unidade",
     * description = "Remover a unidade especificada pelo id.",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     format = "int64",
     *     description = "Id da unidade para remover.",
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
     * description = "Sucesso: unidade removida",
     * ),
     * )
     */
    public function destroy($id)
    {
        $deleteById = Unit::find($id)->delete();
        return response()->json([], 204);
    }
}
