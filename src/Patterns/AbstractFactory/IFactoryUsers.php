<?php

namespace Mr\Patterns\AbstractFactory;

interface IFactoryUsers extends IFactory
{
    /**
     * @return IUser
     */
    public function createGuest(): IUser;
}