<?php

namespace OPNsense\BetterCA\Api;

use OPNsense\Base\ApiMutableModelControllerBase;

/**
 * Class SettingsController Handles settings related API actions
 * @package OPNsense\BetterCA
 */
class OCSPController extends ApiMutableModelControllerBase
{
    protected static $internalModelClass = 'OPNsense\BetterCA\OCSP';
    protected static $internalModelName = 'betterca';
}
