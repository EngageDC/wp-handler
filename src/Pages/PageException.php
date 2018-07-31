<?php

namespace Engage\GallyShare\WordPress\Pages;

use Dashifen\Exception\Exception;

class PageException extends Exception {
	const CANNOT_RENDER_TEMPLATE = 1;
}