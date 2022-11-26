<?php
namespace Idoalit\SlimsEloquentModels;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'item_id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['item_id'];

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

    function biblio() {
        return $this->belongsTo(Biblio::class, 'biblio_id', 'biblio_id');
    }
}
