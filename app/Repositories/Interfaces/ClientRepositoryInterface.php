<?php


namespace App\Repositories\Interfaces;


use Illuminate\Database\Eloquent\Collection;

interface ClientRepositoryInterface extends BaseRepositoryInterface
{

    /**
     * @return Collection
     */
    public function findSyncedClients(): Collection;
}
