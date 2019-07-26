<?php


namespace Mr\Patterns\AbstractFactory;


class User implements IUser
{
    protected $role = 'user';

    public function getRole(): string
    {
        return $this->role;
    }
}