<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
   protected $table = "pakets";
   protected $primaryKey = "id";
   public $timestamps = false;
   protected $fillable = [
      'id', 'nama', 'harga', 'keterangan'];
}
