<?php

namespace OPNsense\BetterCA;

/**
 * Class IndexController
 * @package OPNsense\BetterCA
 */
class OCSPController extends \OPNsense\Base\IndexController
{
    public function indexAction()
    {
        // pick the template to serve to our users.
        $this->view->pick('OPNsense/BetterCA/ocsp');
        
        $this->view->ocspForm = $this->getForm("ocsp");
    }
}
