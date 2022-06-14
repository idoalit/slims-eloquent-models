<?php
namespace Idoalit\SlimsEloquentModels;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'holiday';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'holiday_id';

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
    public $timestamps = false;

    const CREATED_AT = 'input_date';
    const UPDATED_AT = 'last_update';
}
