<?php


namespace Mr\Patterns\AbstractFactory;


class AbstractFactoryUsers implements IFactoryUsers
{

    /**
     * @return IUser
     */
    public function createGuest(): IUser
    {
        return new Guest();
    }

    public function createUser(): IUser
    {
        return new User();
    }
}