<?php
namespace App\Repositories\PostTag;

use App\Repositories\BaseRepository;

class PostTagRepository extends BaseRepository implements PostTagRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\PostTag::class;
    }

}