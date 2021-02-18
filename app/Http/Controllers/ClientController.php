<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientCreateRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientRepositoryInterface
     */
    private ClientRepositoryInterface $clientRepository;

    /**
     * CustomerController constructor.
     * @param ClientRepositoryInterface $clientRepository
     */
    public function __construct(ClientRepositoryInterface $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return ["data" => $this->clientRepository->get()];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientCreateRequest $request
     * @return array
     */
    public function store(ClientCreateRequest $request)
    {
        $client = $this->clientRepository->store(
            $request->validated()
        );

        return [
            "status" => "success",
            "data" => $client
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param Client $client
     * @return array
     */
    public function show(Client $client)
    {
        return ["data" => $client];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientUpdateRequest $request
     * @param int $id
     * @return array
     */
    public function update(ClientUpdateRequest $request, Client $client)
    {
        $this->clientRepository->update($request->validated(), $client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
