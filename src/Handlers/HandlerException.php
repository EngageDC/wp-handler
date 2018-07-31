<?php

namespace Engage\GallyShare\WordPress\Handlers;

use Dashifen\Exception\Exception;

/**
 * Class HandlerException
 * @package Engage\GallyShare
 */
class HandlerException extends Exception {
	const UNHOOKED_METHOD = 1;
	const INAPPROPRIATE_CALL = 2;
}