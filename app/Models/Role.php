<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public const ROLE_USER = 0;
    public const ROLE_ADMIN = 1;
    const CLIENT_ROLE_ID = 2;
}
