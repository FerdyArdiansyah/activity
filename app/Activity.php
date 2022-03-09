<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use AutoNumberTrait;

    protected $table = 'activitys';
    protected $guarded = [];
    // protected $fillable = [
    //     'nama_activity',
    // ];

    public function getAutoNumberOptions() {
        return [
            'kode_activity' => [
                'format' => function() {
                    return 'Ev-Ab/'.date('Ymd').'/?';
                },
                'length' => 5
            ]
        ];
    }

    // public function user() 
    // {
    //     return$this->belongsTo(User::class);
    // }
}
