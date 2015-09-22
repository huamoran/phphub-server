<?php

namespace App;

use App\Presenters\ReplyPresenter;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\PresenterInterface;
use Prettus\Repository\Traits\PresentableTrait;

class Reply extends Model implements PresenterInterface
{
    use PresentableTrait;
    public static $includable = [];
    protected $fillable       = [];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Prepare data to present.
     *
     * @param $data
     *
     * @return mixed
     */
    public function present($data)
    {
        return ReplyPresenter::class;
    }
}