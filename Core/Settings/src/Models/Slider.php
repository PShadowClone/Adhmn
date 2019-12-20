<?php


namespace Core\Settings\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;
    /**
     * model's table
     *
     * @author Amr
     * @var string
     */
    protected $table = 'sliders';
    /**
     * model's attributes
     *
     * @author Amr
     * @var array
     */
    protected $fillable = ['image', 'content', 'is_active'];
    /**
     * model's dates
     *
     * @author Amr
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    /**
     * @var array
     */
    protected $with = ['image'];

    /**
     * sliders's images
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function image()
    {
        return $this->morphOne(Media::class, 'media');
    }
}