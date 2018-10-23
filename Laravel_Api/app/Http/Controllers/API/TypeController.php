<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     * path = "/api/types",
     * tags = {"Types"},
     * summary = "Lista Tipos",
     * @SWG\Response(
     * response = 200,
     * description = "Sucesso: Lista de todos os tipos",
     * @SWG\Schema(ref = "#/definitions/Type")
     * ),
     * @SWG\Response(
     * response = "404",
     * description = "Não Encontrado"
     * )
     * ),
     */
    public function index()
    {
        $listType = Type::all();
        return $listType;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/types/{id}",
     * tags = {"Types"},
     * summary = "Buscar Tipo Pelo Id",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Mostrar o tipo especificado pelo id.",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna o tipo",
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
        $showTypeById = Type::findOrFail($id);
        return $showTypeById;
    }
}
