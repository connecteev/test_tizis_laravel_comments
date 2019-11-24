<?php

namespace App;

use tizis\laraComments\Contracts\ICommentable;
use tizis\laraComments\Traits\Commentable;

class Post extends Model implements ICommentable
{
    use Commentable;
}
