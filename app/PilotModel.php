<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;

class PilotModel extends Model
{
    protected $table = 'pilot';
    protected $fillable = [ 'nama', 'email', 'nik_sap', 'jabatan', 'no_hp', 'username', 'password', 'kode_kebun', 'afdeling' ];

}
