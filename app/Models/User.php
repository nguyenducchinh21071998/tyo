<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'name_furigana_customer'
            ,'name_full_customer'
            ,'address_customer'
            ,'mobile_customer'
            ,'birthday_customer'
            ,'marital_status_customer_customer'
            ,'annual_income'
            ,'current_rent'

            ,'name_full_school_customer'
            ,'address_school_customer'
            ,'mobile_school_customer'
            ,'reson'

            ,'name_full_job_customer'
            ,'address_job_customer'
            ,'mobile_job_customer'
            ,'mobile_job_time_customer'
            ,'mobile_job_department_customer'
            ,'mobile_job_salary_customer'
            ,'mobile_job_hours_from_to_customer'

            ,'name_full_mother'
            ,'address_mother'
            ,'mobile_mother'
            ,'birthday_mother'

            ,'name_full_emergency'
            ,'address_emergency'
            ,'mobile_emergency'
            ,'birthday_emergency'
            ,'relationship'

            ,'expected_contract_date'
            ,'desired_move_in_date'

            ,'gas_status'
            ,'electricity_status'
            ,'water_status'
            
            ,'image'

            ,'name_full'
            ,'address'
            ,'mobile',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
