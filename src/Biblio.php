<?php
namespace Idoalit\SlimsEloquentModels;

use Illuminate\Database\Eloquent\Model;

class Biblio extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'biblio';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'biblio_id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['biblio_id'];

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    const CREATED_AT = 'input_date';
    const UPDATED_AT = 'last_update';

    function items() {
        return $this->hasMany(Item::class, 'biblio_id', 'biblio_id');
    }
}
