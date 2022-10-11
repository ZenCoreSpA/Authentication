<?php

namespace ZenCoreSpA\Authentication\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use ZenCoreSpA\Authentication\Database\Factories\UserFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected static function newFactory()
    {
        return new UserFactory();
    }
}