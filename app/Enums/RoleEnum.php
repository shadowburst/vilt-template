<?php

namespace App\Enums;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case TESTER = 'tester';
    case TEAM_MANAGER = 'team_manager';
    case USER = 'user';
}
