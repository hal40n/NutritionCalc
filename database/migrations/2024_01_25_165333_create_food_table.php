<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->unsignedBigInteger('food_code')->primary();
            $table->string('food_name');
            $table->double('ENERC')->nullable();
            $table->double('ENERC_KCAL')->nullable();
            $table->double('WATER')->nullable();
            $table->double('PROTCAA')->nullable();
            $table->double('PROT')->nullable();
            $table->double('FATNLEA')->nullable();
            $table->double('CHOLE')->nullable();
            $table->double('FAT')->nullable();
            $table->double('CHOAVLM')->nullable();
            $table->double('CHOAVL')->nullable();
            $table->double('CHOAVLDF')->nullable();
            $table->double('FIB')->nullable();
            $table->double('POLYL')->nullable();
            $table->double('CHOCDF')->nullable();
            $table->double('OA')->nullable();
            $table->double('ASH')->nullable();
            $table->double('NA')->nullable();
            $table->double('K')->nullable();
            $table->double('CA')->nullable();
            $table->double('MG')->nullable();
            $table->double('P')->nullable();
            $table->double('FE')->nullable();
            $table->double('ZN')->nullable();
            $table->double('CU')->nullable();
            $table->double('MN')->nullable();
            $table->double('ID')->nullable();
            $table->double('SE')->nullable();
            $table->double('CR')->nullable();
            $table->double('MO')->nullable();
            $table->double('RETOL')->nullable();
            $table->double('CARTA')->nullable();
            $table->double('CARTB')->nullable();
            $table->double('CRYPXB')->nullable();
            $table->double('CARTBEQ')->nullable();
            $table->double('VITA_RAE')->nullable();
            $table->double('VITD')->nullable();
            $table->double('TOCPHA')->nullable();
            $table->double('TOCPHB')->nullable();
            $table->double('TOCPHG')->nullable();
            $table->double('TOCPHD')->nullable();
            $table->double('VITK')->nullable();
            $table->double('THIA')->nullable();
            $table->double('RIBF')->nullable();
            $table->double('NIA')->nullable();
            $table->double('NE')->nullable();
            $table->double('VITB6A')->nullable();
            $table->double('VITB12')->nullable();
            $table->double('FOL')->nullable();
            $table->double('PANTAC')->nullable();
            $table->double('BIOT')->nullable();
            $table->double('VITC')->nullable();
            $table->double('ALC')->nullable();
            $table->double('NACL_EQ')->nullable();
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
        Schema::dropIfExists('food');
    }
}
