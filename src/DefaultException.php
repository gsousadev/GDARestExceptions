<?php

namespace Alvo\Exceptions\Config;

use Symfony\Component\HttpFoundation\Response;

abstract class DefaultException
{
    const GENERAL_MESSAGE_FOR_HUMANS = 'Ocorreu um erro na sua requisição.';
    const GENERAL_SUPPORT_MESSAGE = 'Contate o administrador e informe o problema';
}
