<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Abianbiya\Laralag\Modules\RoleUser\Models\RoleUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Abianbiya\Laralag\Traits\HasPermissions;
use App\Modules\Guru\Models\Guru;
use App\Modules\Siswa\Models\Siswa;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // roleuser
    public function roleuser()
    {
        return $this->hasMany(RoleUser::class, 'user_id', 'id');
    }

    // siswa
    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'user_id', 'id');
    }

    // guru
    public function guru()
    {
        return $this->hasOne(Guru::class, 'user_id', 'id');
    }
}
