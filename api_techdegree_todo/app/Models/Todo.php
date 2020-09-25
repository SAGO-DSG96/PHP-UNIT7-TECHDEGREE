<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //Enter to authors table
    protected $table = 'todos';

    //Property fillable will allow user to add
    protected $fillable = [
        'name',
        'status'
    ];
    
    public function todo(){
        return $this->hasMany(Todo::class);
    }
    use HasFactory;
}
