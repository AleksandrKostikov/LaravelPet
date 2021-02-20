<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $fillable = ['title', 'body', 'owner_id'];

    protected $dispatchesEvents = [
        'created' => \App\Events\TaskCreated::class,
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function scopeIncompleted($query)
    {
        return $query->where('completed', 0);
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function addStep($attributes)
    {
        return $this->steps()->create($attributes);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
