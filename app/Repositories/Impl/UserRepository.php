<?php

namespace App\Repositories\Impl;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * The entity associated with this repository.
     *
     * @var object
     */
    public function model()
    {
        return new User;
    }
}
