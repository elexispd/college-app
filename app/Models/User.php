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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'name',
        'email',
        'password',
        'ap_number',
        'username',
        'birth_year',
        'gender',
        'command',
        'enlistment_date',
        'promotion_date',
        'qualification',
        'state',
        'student_type',
        'is_staff'
    ];

    public function username()
    {
        return 'username';
    }

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


    public function is_student() {

    }

    public function scopeSearch($query, $value) {
        $query->where('name', 'like', "%{$value}%")->orWhere('username', 'like', "%{$value}%");
    }

    public function getRouteKeyName()
    {
        return 'username'; // Use 'username' for model binding
    }





}
