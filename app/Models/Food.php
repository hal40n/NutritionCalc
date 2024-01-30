<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    
    protected $table = 'food';
    protected $primaryKey = 'food_code';
    protected $fillable = [
        'food_code',
        'food_name',
        'ENERC',
        'ENERC_KCAL',
        'WATER',
        'PROTCAA',
        'PROT0',
        'FATNLEA',
        'CHOLE',
        'FAT0',
        'CHOAVLM',
        'CHOAVL',
        'CHOAVLDF0',
        'FIB0',
        'POLYL',
        'CHOCDF0',
        'OA',
        'ASH',
        'NA',
        'K',
        'CA',
        'MG',
        'P',
        'FE',
        'ZN',
        'CU',
        'MN',
        'ID',
        'SE',
        'CR',
        'MO',
        'RETOL',
        'CARTA',
        'CARTB',
        'CRYPXB',
        'CARTBEQ',
        'VITA_RAE',
        'VITD',
        'TOCPHA',
        'TOCPHB',
        'TOCPHG',
        'TOCPHD',
        'VITK',
        'THIA',
        'RIBF',
        'NIA',
        'NE',
        'VITB6A',
        'VITB12',
        'FOL',
        'PANTAC',
        'BIOT',
        'VITC',
        'ALC',
        'NACL_EQ',
    ];
    
    // 不変項目（更新不可の場合）
    protected $guarded = [
        'created_at',
        'updated_at',
    ];
}
