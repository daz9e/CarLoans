<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bank\StoreRequest;
use App\Http\Requests\Bank\UpdateRequest;
use App\Models\Bank;
use Illuminate\Http\JsonResponse;

class BankController extends Controller
{
    /**
     * Просмотр всех банков с пагинацией
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $banks = Bank::paginate(10);
        return response()->json($banks);
    }

    /**
     * Создание нового банка
     *
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $data = $request->validated();
        $bank = Bank::create($data);
        return response()->json($bank, 201);
    }

    /**
     * Просмотр конкретного банка
     *
     * @param Bank $bank
     * @return JsonResponse
     */
    public function show(Bank $bank): JsonResponse
    {
        return response()->json($bank);
    }

    /**
     * Обновление существующего банка
     *
     * @param UpdateRequest $request
     * @param Bank $bank
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Bank $bank): JsonResponse
    {
        $data = $request->validated();
        $bank->update($data);
        return response()->json($bank);
    }

    /**
     * Удаление банка
     *
     * @param Bank $bank
     * @return JsonResponse
     */
    public function destroy(Bank $bank): JsonResponse
    {
        $bank->delete();
        return response()->json(null, 204);
    }
}
