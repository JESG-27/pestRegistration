<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pest extends Model
{
    use HasFactory;

    public function records()
    {
        return $this->hasMany(Record::class);
    }

    public function crops()
    {
        return $this->belongsToMany(Crop::class, $table = 'records', $foreignKey = 'pest_id', $relatedKey = 'crop_id');
    }
}
