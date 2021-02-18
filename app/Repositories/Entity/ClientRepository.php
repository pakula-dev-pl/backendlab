<?php

namespace App\Repositories\Entity;

use App\Repositories\Interfaces\ClientRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{

    public function findSyncedClients(): Collection
    {
        $this->model
            ->where("user_id", Auth::id())
            ->whereNotNull("external_id")
            ->get();
    }
}
