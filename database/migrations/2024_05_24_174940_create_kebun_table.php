<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateKebunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebun', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_code');
            $table->string('nama_kebun');
            $table->string('regional');
            $table->string('perusahaan');
            $table->string('kode_kebun');
            $table->timestamps();
        });

        DB::table('kebun')->insert([
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK01', 'nama_kebun' => 'SEI MERANTI'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK02', 'nama_kebun' => 'SEI DAUN'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK03', 'nama_kebun' => 'TORGAMBA'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK04', 'nama_kebun' => 'BUKIT TUJUH'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK05', 'nama_kebun' => 'SEI BARUHUR'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK06', 'nama_kebun' => 'SEI KEBARA'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK07', 'nama_kebun' => 'AEK TOROP'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK08', 'nama_kebun' => 'AEK RASO'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK09', 'nama_kebun' => 'SISUMUT'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK10', 'nama_kebun' => 'AEK NABARA UTARA'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK11', 'nama_kebun' => 'AEK NABARA SELATAN'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK12', 'nama_kebun' => 'RANTAU PRAPAT'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK13', 'nama_kebun' => 'MEMBANG MUDA'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK14', 'nama_kebun' => 'LABUHAN HAJI'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK15', 'nama_kebun' => 'MERBAU SELATAN'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK16', 'nama_kebun' => 'SEI DADAP'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK17', 'nama_kebun' => 'PULAU MANDI'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK18', 'nama_kebun' => 'AMBALUTU'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK19', 'nama_kebun' => 'SEI SILAU'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK20', 'nama_kebun' => 'HUTA PADANG'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK21', 'nama_kebun' => 'BANDAR SELAMAT'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK22', 'nama_kebun' => 'DUSUN HULU'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK23', 'nama_kebun' => 'BANDAR BETSY'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK24', 'nama_kebun' => 'BANGUN'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK25', 'nama_kebun' => 'GUNUNG PAMELA'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK26', 'nama_kebun' =>  'GUNUNG MONAKO'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK27', 'nama_kebun' => 'SILAU DUNIA'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK28', 'nama_kebun' => 'GUNUNG PARA'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK29', 'nama_kebun' => 'SEI PUTIH'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK30', 'nama_kebun' => 'SARANG GITING'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK31', 'nama_kebun' => 'TANAH RAJA'],
            ['company_code' => 'N003', 'regional' => 'REGIONAL I', 'perusahaan' => 'PTPN III', 'kode_kebun' => 'CK32', 'nama_kebun' => 'RAMBUTAN']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kebun');
    }

}
