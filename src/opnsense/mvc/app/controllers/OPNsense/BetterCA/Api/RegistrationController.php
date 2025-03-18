<?php

namespace OPNsense\BetterCA\Api;

use OPNsense\Base\ApiMutableModelControllerBase;

/**
 * Class SettingsController Handles settings related API actions
 * @package OPNsense\BetterCA
 */
class RegistrationController extends ApiMutableModelControllerBase
{
    protected static $internalModelClass = 'OPNsense\BetterCA\Registration';
    protected static $internalModelName = 'betterca';
}
