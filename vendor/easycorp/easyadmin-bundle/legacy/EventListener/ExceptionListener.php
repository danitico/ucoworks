<?php

namespace JavierEguiluz\Bundle\EasyAdminBundle\EventListener;

use Symfony\Component\HttpKernel\EventListener\ExceptionListener as BaseExceptionListener;

@trigger_error('The '.__NAMESPACE__.'\ExceptionListener class is deprecated since version 1.16 and will be removed in 2.0. Use the EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener class instead.', E_USER_DEPRECATED);

class_exists('EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener');

if (\false) {
    class ExceptionListener extends BaseExceptionListener
    {
    }
}
