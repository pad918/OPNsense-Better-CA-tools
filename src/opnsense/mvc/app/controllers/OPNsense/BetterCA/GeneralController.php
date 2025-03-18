<?php

namespace OPNsense\BetterCA;

/**
 * Class IndexController
 * @package OPNsense\BetterCA
 */
class GeneralController extends \OPNsense\Base\IndexController
{
    public function indexAction()
    {
        // pick the template to serve to our users.
        $this->view->pick('OPNsense/BetterCA/general');
        // fetch form data "general" in
        $this->view->generalForm = $this->getForm("general");
    }
}
