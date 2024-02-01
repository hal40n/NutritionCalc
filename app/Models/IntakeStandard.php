<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntakeStandard extends Model
{
    use HasFactory;

    protected $table = "intakeStandards";

    protected $primaryKey = "id";

    protected $fillable = [
        'ENERC_KCAL_MAN_LOW',
        'ENERC_KCAL_MAN_NORMAL',
        'ENERC_KCAL_MAN_HIGH',
        'ENERC_KCAL_WOMAN_LOW',
        'ENERC_KCAL_WOMAN_NORMAL',
        'ENERC_KCAL_WOMAN_HIGH',
        'PROT_MAN_LOW_MIN',
        'PROT_MAN_LOW_MAX',
        'PROT_MAN_NORMAL_MIN',
        'PROT_MAN_NORMAL_MAX',
        'PROT_MAN_HIGH_MIN',
        'PROT_MAN_HIGH_MAX',
        'PROT_WOMAN_LOW_MIN',
        'PROT_WOMAN_LOW_MAX',
        'PROT_WOMAN_NORMAL_MIN',
        'PROT_WOMAN_NORMAL_MAX',
        'PROT_WOMAN_HIGH_MIN',
        'PROT_WOMAN_HIGH_MAX',
        'FAT_MAN_MIN',
        'FAT_MAN_MAX',
        'FAT_WOMAN_MIN',
        'FAT_WOMAN_MAX',
        'SFA_MAN_MIN',
        'SFA_WOMAN_MIN',
        'N6PUFA_MAN',
        'N6PUFA_WOMAN',
        'N3PUFA_MAN',
        'N3PUFA_WOMAN',
        'CHOCDF_MAN_MIN',
        'CHOCDF_MAN_MAX',
        'CHOCDF_WOMAN_MIN',
        'CHOCDF_WOMAN_MAX',
        'FIB_MAN_MIN',
        'FIB_WOMAN_MIN',
        'VITA_MAN',
        'VITA_WOMAN',
        'VITD_MAN',
        'VITD_WOMAN',
        'VITE_MAN',
        'VITE_WOMAN',
        'VITK_MAN',
        'VITK_WOMAN',
        'THIA_MAN',
        'THIA_WOMAN',
        'RIBF_MAN',
        'RIBF_WOMAN',
        'NE_MAN',
        'NE_WOMAN',
        'VITB6A_MAN',
        'VITB6A_WOMAN',
        'VITB12_MAN',
        'VITB12_WOMAN',
        'FOL_MAN',
        'FOL_WOMAN',
        'PANTAC_MAN',
        'PANTAC_WOMAN',
        'BIOT_MAN',
        'BIOT_WOMAN',
        'VITC_MAN',
        'VITC_WOMAN',
        'NA_MAN_MIN',
        'NA_WOMAN_MIN',
        'K_MAN',
        'K_WOMAN',
        'CA_MAN',
        'CA_WOMAN',
        'MG_MAN',
        'MG_WOMAN',
        'P_MAN',
        'P_WOMAN',
        'FE_MAN',
        'FE_WOMAN',
        'ZN_MAN',
        'ZN_WOMAN',
        'CU_MAN',
        'CU_WOMAN',
        'MN_MAN',
        'MN_WOMAN',
        'ID_MAN',
        'ID_WOMAN',
        'SE_MAN',
        'SE_WOMAN',
        'CR_MAN',
        'CR_WOMAN',
        'MO_MAN',
        'MO_WOMAN'
    ];

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
