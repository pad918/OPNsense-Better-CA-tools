<?php

namespace OPNsense\BetterCA\Api;

use OPNsense\Base\ApiMutableModelControllerBase;

/**
 * Class SettingsController Handles settings related API actions
 * @package OPNsense\BetterCA
 */
class SettingsController extends ApiMutableModelControllerBase
{
    protected static $internalModelClass = 'OPNsense\BetterCA\General';
    protected static $internalModelName = 'betterca';
}
