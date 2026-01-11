<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'completed'];

    protected $casts = [
        'completed' => 'boolean',
    ];

    public function toggleComplete(): void
    {
        $this->completed = !$this->completed;
        $this->save();
    }
}