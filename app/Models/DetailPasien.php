<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPasien extends Model
{
    protected $table = "detail_pasien";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
       'idpasien', 'idpaket', 'bb', 'tb', 'keluhan', 'file'];
 }

