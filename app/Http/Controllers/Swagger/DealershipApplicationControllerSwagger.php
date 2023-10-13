<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Dealership Applications",
 *     description="API endpoints for managing dealership applications"
 * ),
 *
/**
 * @OA\Post(
 *     path="/api/applications",
 *     operationId="store",
 *     tags={"Dealership Applications"},
 *     summary="Create a new dealership application",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="bank_id", type="integer", example=1),
 *             @OA\Property(property="dealer_name", type="string", maxLength=255),
 *             @OA\Property(property="contact_person", type="string", maxLength=255),
 *             @OA\Property(property="loan_amount", type="number", format="float", example=1234.56),
 *             @OA\Property(property="loan_term", type="integer", example=6),
 *             @OA\Property(property="interest_rate", type="number", format="float", example=5.5),
 *             @OA\Property(property="reason", type="string", format="textarea"),
 *             @OA\Property(property="status", type="string", enum={"new", "in_progress", "approved", "rejected"}),
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Dealership application created successfully"
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Invalid input data"
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/applications",
 *     operationId="index",
 *     tags={"Dealership Applications"},
 *     summary="List dealership applications with pagination",
 *     @OA\Response(
 *         response=200,
 *         description="List of dealership applications",
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/applications/{id}",
 *     operationId="show",
 *     tags={"Dealership Applications"},
 *     summary="View a dealership application",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the dealership application",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Dealership application details"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Dealership application not found"
 *     )
 * ),
 *
/**
 * @OA\Put(
 *     path="/api/applications/{id}",
 *     operationId="update",
 *     tags={"Dealership Applications"},
 *     summary="Update an existing dealership application",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the dealership application",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="bank_id", type="integer", example=1),
 *             @OA\Property(property="dealer_name", type="string", maxLength=255),
 *             @OA\Property(property="contact_person", type="string", maxLength=255),
 *             @OA\Property(property="loan_amount", type="number", format="float", example=1234.56),
 *             @OA\Property(property="loan_term", type="integer", example=6),
 *             @OA\Property(property="interest_rate", type="number", format="float", example=5.5),
 *             @OA\Property(property="reason", type="string", format="textarea"),
 *             @OA\Property(property="status", type="string", enum={"new", "in_progress", "approved", "rejected"}),
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Dealership application updated successfully"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Dealership application not found"
 *     )
 * ),
 *
 * @OA\Delete(
 *     path="/api/applications/{id}",
 *     operationId="destroy",
 *     tags={"Dealership Applications"},
 *     summary="Delete a dealership application",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the dealership application to delete",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="Dealership application deleted successfully"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Dealership application not found"
 *     )
 * )
 *
 */
class DealershipApplicationControllerSwagger extends Controller
{

}
