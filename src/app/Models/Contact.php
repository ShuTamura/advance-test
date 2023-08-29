<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname' ,
        'gender' ,
        'email' ,
        'postcode' ,
        'address' ,
        'building_name' ,
        'opinion' ,
    ];

    protected $guarded = ['id'];

    //ファクトリ
    public static $rules = array(
        'fullname' => 'required|string|max:255',
        'gender' => 'required|tinyInteger',
        'email' => 'required|string|email|max:255',
        'postcode' => 'required|string|min:8|max:8',
        'address' => 'required|string|max:255',
        'building_name' => 'string|max:255',
        'opinion' => 'required|string|max:120',
    );
    public function scopeNameSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('fullname', 'like', '%' . $keyword . '%');
        }
    }
    public function scopeEmailSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('email', 'like', '%' . $keyword . '%');
        }
    }
    public function scopeGenderSearch($query, $gender)
    {
        if (!empty($gender)) {
            $query->where('gender', $gender);
        }
    }
    public function scopeDateSearch($query, $from, $until)
    {
        if(!empty($request->from) || !empty($request->until)){
            $query = whereBetween('created_at', [$from, $until]);
        }
    }
}
