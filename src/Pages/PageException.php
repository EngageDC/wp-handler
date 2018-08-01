<?php

namespace Engage\WordPress\Pages;

use Dashifen\Exception\Exception;

/**
 * Class PageException
 * @package Engage\WordPress\Pages
 */
class PageException extends Exception {
	const CANNOT_RENDER_TEMPLATE = 1;
}