<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //misalkan kita tidak ada table student
    // maka kita mengambil dengan cara
    //protected $table = 'mahasiswa';
    //dan masih banyak lagi yang lainnya

    protected $fillable = ['nama','nrp','email','jurusan']; //klu yg guarded itu ga boleh di isi secara manual. contohnya id
}
