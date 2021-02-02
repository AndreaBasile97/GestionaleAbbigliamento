<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negozio extends Model
{
    use HasFactory;


  protected $table = 'Negozio';
  protected $primaryKey = 'id';
  public $incrementing = true; 
  protected $fillable = [
      'name',
  ];


}
