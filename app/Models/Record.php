<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'crop_id',
        'pest_id',
        'location_id',
        'level',
        'comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function pest()
    {
        return $this->belongsTo(Pest::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

}
