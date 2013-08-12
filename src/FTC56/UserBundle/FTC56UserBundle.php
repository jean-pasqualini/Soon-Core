<?php

namespace FTC56\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FTC56UserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
