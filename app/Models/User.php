<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class User
 * @package App\Models
 * @version August 25, 2020, 2:35 pm UTC
 *
 */
class User extends Model
{

    public $table = 'users';
    



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
