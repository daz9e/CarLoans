<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Banks",
 *     description="API endpoints for managing banks"
 * ),
 *
 * @OA\Post(
 *     path="/api/banks",
 *     operationId="store_bank",
 *     tags={"Banks"},
 *     summary="Create a new bank",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="title", type="string", maxLength=255),
 *             @OA\Property(property="location", type="string", maxLength=255),
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Bank created successfully"
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Invalid input data"
 *     )
 * )
 *
 * @OA\Get(
 *     path="/api/banks",
 *     operationId="list",
 *     tags={"Banks"},
 *     summary="List banks with pagination",
 *     @OA\Response(
 *         response=200,
 *         description="List of banks",
 *     )
 * )
 *
 * @OA\Get(
 *     path="/api/banks/{id}",
 *     operationId="show_bank",
 *     tags={"Banks"},
 *     summary="View a bank",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the bank",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Bank details"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Bank not found"
 *     )
 * )
 *
 * @OA\Put(
 *     path="/api/banks/{id}",
 *     operationId="update_bank",
 *     tags={"Banks"},
 *     summary="Update an existing bank",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the bank",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="title", type="string", maxLength=255),
 *             @OA\Property(property="location", type="string", maxLength=255),
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Bank updated successfully"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Bank not found"
 *     )
 * )
 *
 * @OA\Delete(
 *     path="/api/banks/{id}",
 *     operationId="destroy_bank",
 *     tags={"Banks"},
 *     summary="Delete a bank",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the bank to delete",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="Bank deleted successfully"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Bank not found"
 *     )
 * )
 */
class BankControllerSwagger extends Controller
{

}
