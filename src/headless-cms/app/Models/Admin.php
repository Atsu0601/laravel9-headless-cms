<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User; //追加
use Illuminate\Notifications\Notifiable; //追加
use App\Notifications\ResetPasswordNotification;            //追記

class Admin extends User
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)       //追記
    {                                                           //追記
        $url = url("admin/password/reset/$token");              //追記
        $this->notify(new ResetPasswordNotification($url));     //追記
    }
}
