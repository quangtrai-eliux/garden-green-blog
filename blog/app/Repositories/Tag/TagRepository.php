<?php
namespace App\Repositories\Tag;

use App\Repositories\BaseRepository;

class TagRepository extends BaseRepository implements TagRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Tag::class;
    }

}