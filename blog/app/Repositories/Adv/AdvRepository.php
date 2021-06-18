<?php
namespace App\Repositories\Adv;

use App\Repositories\BaseRepository;

class AdvRepository extends BaseRepository implements AdvRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Adv::class;
    }

}