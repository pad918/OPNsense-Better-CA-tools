<?php

namespace OPNsense\BetterCA\Api;
use OPNsense\Base\ApiControllerBase;
use OPNsense\Core\Backend;

/**
 * Class ServiceController
 * @package OPNsense\Cron
 */
class ServiceController extends ApiControllerBase
{
    /**
     * reconfigure HelloWorld
     */
    public function reloadAction()
    {
        $status = "failed";
        if ($this->request->isPost()) {
            $status = strtolower(trim((new Backend())->configdRun('template reload OPNsense/BetterCA')));
        }
        return ["status" => $status];
    }

    /**
     * test HelloWorld
     */
    public function testAction()
    {
        if ($this->request->isPost()) {
            $bckresult = json_decode(trim((new Backend())->configdRun("helloworld test")), true);
            if ($bckresult !== null) {
                // only return valid json type responses
                return $bckresult;
            }
        }
        return ["message" => "unable to run config action"];
    }
}
