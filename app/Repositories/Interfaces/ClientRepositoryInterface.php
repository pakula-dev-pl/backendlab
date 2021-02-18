<?php


namespace App\Repositories\Interfaces;

use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ClientRepositoryInterface extends BaseRepositoryInterface
{

    /**
     * @return Collection
     */
    public function findSyncedClients(): Collection;

    /**
     * @param array $data
     * @return Client
     */
    public function store(array $data): Model;
}
