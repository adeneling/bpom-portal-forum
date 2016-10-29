<?php

namespace App\Models\Berita;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserControl\User;

class GambarBerita extends Model
{
    //

    protected $table = 'gambar-berita';

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function withLocated($located){
    	$this->located = $located;

    	return $this;
    }

    public function saveGambar(){
    	$this->save();

    	return $this;
    }
}
