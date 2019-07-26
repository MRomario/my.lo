<?php


namespace Mr\Patterns\AbstractFactory;

class Guest implements IUser
{
    protected $role = 'guest';

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
}