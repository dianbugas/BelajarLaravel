<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //misalkan kita tidak ada table student
    // maka kita mengambil dengan cara
    //protected $table = 'mahasiswa';
    //dan masih banyak lagi yang lainnya
    use SoftDeletes;
    //klu yg guarded itu ga boleh di isi secara manual. contohnya id
    protected $fillable = ['nama','nrp','email','jurusan'];
}
