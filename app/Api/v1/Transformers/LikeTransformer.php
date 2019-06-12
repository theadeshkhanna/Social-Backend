<?php

namespace App\Api\v1\Transformers;

use App\Api\v1\Transformers\Traits\LikeDetailTrait;
use App\Like;
use League\Fractal\TransformerAbstract;

class LikeTransformer extends TransformerAbstract {
    use LikeDetailTrait;

    public function transform(Like $like) {
        return $this->getAttributes($like);
    }
}