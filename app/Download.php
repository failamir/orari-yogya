<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Download extends Model
{
    use LogsActivity;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'downloads';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['callsign', 'checkin', 'kategori', 'counter', 'file'];

    

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
