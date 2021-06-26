<?php
namespace App\Repositories\Adv;

use App\Repositories\RepositoryInterface;

interface AdvRepositoryInterface extends RepositoryInterface
{
    public function findOrFail($id);
}