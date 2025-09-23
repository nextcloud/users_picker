<?php

namespace OCA\UsersPicker\Tests;

use OCA\UsersPicker\AppInfo\Application;

class ApplicationTest extends \PHPUnit\Framework\TestCase {

	public function testDummy() {
		$app = new Application();
		$this->assertEquals('users_picker', $app::APP_ID);
	}
}
