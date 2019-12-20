<?php


namespace Core\Settings\Models;


use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * model's table
     *
     * @author Amr
     * @var string
     */
    protected $table = 'media';
    /**
     * model's attributes
     *
     * @author Amr
     * @var array
     */
    protected $fillable = ['media_type', 'media_id', 'path', 'is_active'];

    /**
     * this function binds the models
     * with media table
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     * @author Amr
     */
    public function mediaable()
    {
        return $this->morphTo();
    }

    /**
     * get the full path of image
     *
     * @return string
     * @author Amr
     */
    function getPathAttribute()
    {
        return $this->attributes['path'] != null ? asset('storage/' . $this->attributes['path']) : $this->attributes['path'] ;
    }

}