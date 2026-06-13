<?php

namespace App\Models\SuperAdmin;

use Database\Factories\SchoolFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Record;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schools extends Record
{
     use HasFactory, SoftDeletes;

    protected $primaryKey = 'school_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['school_id','email','user_id', 'school_name', 'principal_name', 'phone', 'address', 'city', 'state', 'pincode', 'affiliation_no', 'logo_url', 'status', 'created_by', 'updated_by'];

    /**
     * School Login User
     */

     protected static function newFactory()
    {
        return SchoolFactory::new();
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Created By Admin
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Updated By Admin
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * School Classes
     */
    // public function classes()
    // {
    //     return $this->belongsToMany(
    //         ClassMaster::class,
    //         'school_classes',
    //         'school_id',
    //         'class_id'
    //     );
    // }

    /**
     * Logo URL
     */
}
