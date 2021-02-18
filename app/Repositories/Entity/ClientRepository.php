<?php

namespace App\Repositories\Entity;

use App\Models\Client;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{

    /**
     * @return Collection
     */
    public function findSyncedClients(): Collection
    {
        $this->model
            ->where("user_id", Auth::id())
            ->whereNotNull("external_id")
            ->get();
    }

    /**
     * @param array $data
     * @return Model
     */
    public function store(array $data): Model
    {
        $data["user_id"] = Auth::id();
        return $this->create($data);
    }

    public function update(array $data, Client|Model $client)
    {
        $client->fill($data);
        try {
            $saveSattus = $client->save();

        } catch (\Exception $exception) {
            //
        }

        return $saveSattus;
    }

    public function delete(Client|Model $client)
    {
        $client->delete();
    }
}
