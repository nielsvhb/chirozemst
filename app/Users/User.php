<?php
namespace App\Users;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';


    protected $fillable = ['first_name', 'last_name', 'email', 'password'];


    protected $hidden = ['password', 'remember_token'];

    public function getFullName()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }
}
