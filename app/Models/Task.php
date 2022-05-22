<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;


    protected $fillable=['Name','Status'];


    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->format('Y-n-j');
    }
    public function getUpdatedAtAttribute($value)
    {
        return (new Verta($value))->format('Y-n-j');
    }
}