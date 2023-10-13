<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealershipApplication\StoreRequest;
use App\Http\Requests\DealershipApplication\UpdateRequest;
use App\Models\DealershipApplication;
use Illuminate\Http\JsonResponse;

class DealershipApplicationController extends Controller
{
    /**
     * Просмотр заявок с пагинацей
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $applications = DealershipApplication::paginate(10);
        return response()->json($applications);
    }


    /**
     * Создание завявки
     *
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $data = $request->validated();
        $application = DealershipApplication::create($data);
        return response()->json($application, 201);
    }

    /**
     * Просмотр заявки
     *
     * @param DealershipApplication $application
     * @return JsonResponse
     */
    public function show(DealershipApplication $application): JsonResponse
    {
        return response()->json($application);
    }

    /**
     * Обновление существующей заявки
     *
     * @param UpdateRequest $request
     * @param DealershipApplication $application
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, DealershipApplication $application): JsonResponse
    {
        $data = $request->validated();
        $application->update($data);
        return response()->json($application);
    }

    /**
     * Удаление заявки
     *
     * @param DealershipApplication $application
     * @return JsonResponse
     */
    public function destroy(DealershipApplication $application): JsonResponse
    {
        $application->delete();
        return response()->json(null, 204);
    }
}
