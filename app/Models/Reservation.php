<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'reservations';

    /**
     * @var string[]
     */
    protected $fillable = ['user_id', 'line_id', 'stop_id'];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function line()
    {
        return $this->belongsTo(Line::class);
    }

    /**
     * @return BelongsTo
     */
    public function stop()
    {
        return $this->belongsTo(Stop::class);
    }
}
