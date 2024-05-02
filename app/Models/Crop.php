<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Crop extends Model
{
    use HasFactory;

    public function records()
    {
        return $this->hasMany(Record::class);
    }

    public function pests()
    {
        return $this->belongsToMany(Pest::class, $table = 'records', $foreignKey = 'crop_id', $relatedKey = 'pest_id');
    }
}
