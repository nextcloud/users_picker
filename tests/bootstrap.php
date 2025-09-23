<?php

use OCA\UsersPicker\AppInfo\Application;
use OCP\App\IAppManager;

require_once __DIR__ . '/../../../tests/bootstrap.php';

\OC::$server->get(IAppManager::class)->loadApp(Application::APP_ID);
//\OC_App::loadApp(OCA\Tmdb\AppInfo\Application::APP_ID);
OC_Hook::clear();
