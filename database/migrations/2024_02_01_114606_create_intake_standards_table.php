<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intakeStandards', function (Blueprint $table) {
            $table->id(true);
            $table->string('age_category');
            $table->decimal('ENERC_KCAL_MAN_LOW', 5, 1)->nullable();
            $table->decimal('ENERC_KCAL_MAN_NORMAL', 5, 1)->nullable();
            $table->decimal('ENERC_KCAL_MAN_HIGH', 5, 1)->nullable();
            $table->decimal('ENERC_KCAL_WOMAN_LOW', 5, 1)->nullable();
            $table->decimal('ENERC_KCAL_WOMAN_NORMAL', 5, 1)->nullable();
            $table->decimal('ENERC_KCAL_WOMAN_HIGH', 5, 1)->nullable();
            $table->decimal('PROT_MAN_LOW_MIN', 5, 1)->nullable();
            $table->decimal('PROT_MAN_LOW_MAX', 5, 1)->nullable();
            $table->decimal('PROT_MAN_NORMAL_MIN', 5, 1)->nullable();
            $table->decimal('PROT_MAN_NORMAL_MAX', 5, 1)->nullable();
            $table->decimal('PROT_MAN_HIGH_MIN', 5, 1)->nullable();
            $table->decimal('PROT_MAN_HIGH_MAX', 5, 1)->nullable();
            $table->decimal('PROT_WOMAN_LOW_MIN', 5, 1)->nullable();
            $table->decimal('PROT_WOMAN_LOW_MAX', 5, 1)->nullable();
            $table->decimal('PROT_WOMAN_NORMAL_MIN', 5, 1)->nullable();
            $table->decimal('PROT_WOMAN_NORMAL_MAX', 5, 1)->nullable();
            $table->decimal('PROT_WOMAN_HIGH_MIN', 5, 1)->nullable();
            $table->decimal('PROT_WOMAN_HIGH_MAX', 5, 1)->nullable();
            $table->decimal('FAT_MAN_MIN', 5, 1)->nullable();
            $table->decimal('FAT_MAN_MAX', 5, 1)->nullable();
            $table->decimal('FAT_WOMAN_MIN', 5, 1)->nullable();
            $table->decimal('FAT_WOMAN_MAX', 5, 1)->nullable();
            $table->decimal('SFA_MAN_MIN', 5, 1)->nullable();
            $table->decimal('SFA_WOMAN_MIN', 5, 1)->nullable();
            $table->decimal('N6PUFA_MAN', 5, 1)->nullable();
            $table->decimal('N6PUFA_WOMAN', 5, 1)->nullable();
            $table->decimal('N3PUFA_MAN', 5, 1)->nullable();
            $table->decimal('N3PUFA_WOMAN', 5, 1)->nullable();
            $table->decimal('CHOCDF_MAN_MIN', 5, 1)->nullable();
            $table->decimal('CHOCDF_MAN_MAX', 5, 1)->nullable();
            $table->decimal('CHOCDF_WOMAN_MIN', 5, 1)->nullable();
            $table->decimal('CHOCDF_WOMAN_MAX', 5, 1)->nullable();
            $table->decimal('FIB_MAN_MIN', 5, 1)->nullable();
            $table->decimal('FIB_WOMAN_MIN', 5, 1)->nullable();
            $table->decimal('VITA_MAN', 5, 1)->nullable();
            $table->decimal('VITA_WOMAN', 5, 1)->nullable();
            $table->decimal('VITD_MAN', 5, 1)->nullable();
            $table->decimal('VITD_WOMAN', 5, 1)->nullable();
            $table->decimal('VITE_MAN', 5, 1)->nullable();
            $table->decimal('VITE_WOMAN', 5, 1)->nullable();
            $table->decimal('VITK_MAN', 5, 1)->nullable();
            $table->decimal('VITK_WOMAN', 5, 1)->nullable();
            $table->decimal('THIA_MAN', 5, 1)->nullable();
            $table->decimal('THIA_WOMAN', 5, 1)->nullable();
            $table->decimal('RIBF_MAN', 5, 1)->nullable();
            $table->decimal('RIBF_WOMAN', 5, 1)->nullable();
            $table->decimal('NE_MAN', 5, 1)->nullable();
            $table->decimal('NE_WOMAN', 5, 1)->nullable();
            $table->decimal('VITB6A_MAN', 5, 1)->nullable();
            $table->decimal('VITB6A_WOMAN', 5, 1)->nullable();
            $table->decimal('VITB12_MAN', 5, 1)->nullable();
            $table->decimal('VITB12_WOMAN', 5, 1)->nullable();
            $table->decimal('FOL_MAN', 5, 1)->nullable();
            $table->decimal('FOL_WOMAN', 5, 1)->nullable();
            $table->decimal('PANTAC_MAN', 5, 1)->nullable();
            $table->decimal('PANTAC_WOMAN', 5, 1)->nullable();
            $table->decimal('BIOT_MAN', 5, 1)->nullable();
            $table->decimal('BIOT_WOMAN', 5, 1)->nullable();
            $table->decimal('VITC_MAN', 5, 1)->nullable();
            $table->decimal('VITC_WOMAN', 5, 1)->nullable();
            $table->decimal('NA_MAN_MIN', 5, 1)->nullable();
            $table->decimal('NA_WOMAN_MIN', 5, 1)->nullable();
            $table->decimal('K_MAN', 5, 1)->nullable();
            $table->decimal('K_WOMAN', 5, 1)->nullable();
            $table->decimal('CA_MAN', 5, 1)->nullable();
            $table->decimal('CA_WOMAN', 5, 1)->nullable();
            $table->decimal('MG_MAN', 5, 1)->nullable();
            $table->decimal('MG_WOMAN', 5, 1)->nullable();
            $table->decimal('P_MAN', 5, 1)->nullable();
            $table->decimal('P_WOMAN', 5, 1)->nullable();
            $table->decimal('FE_MAN', 5, 1)->nullable();
            $table->decimal('FE_WOMAN', 5, 1)->nullable();
            $table->decimal('ZN_MAN', 5, 1)->nullable();
            $table->decimal('ZN_WOMAN', 5, 1)->nullable();
            $table->decimal('CU_MAN', 5, 1)->nullable();
            $table->decimal('CU_WOMAN', 5, 1)->nullable();
            $table->decimal('MN_MAN', 5, 1)->nullable();
            $table->decimal('MN_WOMAN', 5, 1)->nullable();
            $table->decimal('ID_MAN', 5, 1)->nullable();
            $table->decimal('ID_WOMAN', 5, 1)->nullable();
            $table->decimal('SE_MAN', 5, 1)->nullable();
            $table->decimal('SE_WOMAN', 5, 1)->nullable();
            $table->decimal('CR_MAN', 5, 1)->nullable();
            $table->decimal('CR_WOMAN', 5, 1)->nullable();
            $table->decimal('MO_MAN', 5, 1)->nullable();
            $table->decimal('MO_WOMAN', 5, 1)->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intakeStandards');
    }
}
