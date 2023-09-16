<?php
namespace class\nonBD\user;

class UserStatusManager
{
    public function __construct($status)
    {
        if ($status===false) return;
        if (!is_int($status)) return;
        if ($status>5) $_SESSION['status']=5;
        if ($status<0) $_SESSION['status']=0;
        $_SESSION['status']=$status;
    }
}
