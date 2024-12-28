<?php

namespace App\Models;

use CodeIgniter\Model;

class HouseModel extends Model
{
    protected $table = 'houses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['luas_tanah', 'jumlah_kamar', 'lokasi', 'harga'];
}
