<?php


namespace Core\Settings\Models;


use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    /**
     * @var string
     */
    protected $table = 'landing_page';
    /**
     * @var array
     */
    protected $fillable = ['key', 'content', 'parent_id', 'title'];
    protected $with = ['image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne(Media::class, 'media');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

}