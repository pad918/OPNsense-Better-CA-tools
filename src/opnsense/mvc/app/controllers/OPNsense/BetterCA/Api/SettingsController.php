<?php

namespace OPNsense\BetterCA\Api;

use OPNsense\Base\ApiMutableModelControllerBase;

/**
 * Class SettingsController Handles settings related API actions for the HelloWorld module
 * @package OPNsense\Helloworld
 */
class SettingsController extends ApiMutableModelControllerBase
{
    protected static $internalModelClass = 'OPNsense\BetterCA\BetterCA';
    protected static $internalModelName = 'betterca';
}
