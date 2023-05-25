<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'slug',
        'type_id'

    ];

    //relazione one to many dalla parte del one un progetto ha un tipo mentre un tipo ha più progetti
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    //relazione many to many
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}