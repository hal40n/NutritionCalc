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
        'PROT',
        'FATNLEA',
        'CHOLE',
        'FAT',
        'CHOAVLM',
        'CHOAVL',
        'CHOAVLDF',
        'FIB',
        'POLYL',
        'CHOCDF',
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
        'NACL_EQ'
    ];

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
