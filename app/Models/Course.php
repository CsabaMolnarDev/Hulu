<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'level',
        'description',
        'c_route',
        'picture',
        'type_id'
    ];
    public function type(): HasOne {
        return $this->hasOne(Type::class);
    }
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }
}
