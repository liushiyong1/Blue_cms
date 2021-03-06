<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\articleTagRepository;
use App\Entities\ArticleTag;
use App\Validators\ArticleTagValidator;

/**
 * Class ArticleTagRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ArticleTagRepositoryEloquent extends BaseRepository implements ArticleTagRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ArticleTag::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
