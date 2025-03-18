<?php

namespace OPNsense\BetterCA;

/**
 * Class IndexController
 * @package OPNsense\BetterCA
 */
class RegistrationController extends \OPNsense\Base\IndexController
{
    public function indexAction()
    {
        // pick the template to serve to our users.
        $this->view->pick('OPNsense/BetterCA/registration');
        
        $this->view->csrRequests = [ // Look at how the WireGuard / OpenVPN handles this
            [
                'id' => '123e4567-e89b-12d3-a456-426614174000',
                'subject' => 'CN=example.com',
            ],
            [
                'id' => '234f5678-f90c-23e4-b567-537725285111',
                'subject' => 'CN=test.local',
            ],
            [
                'id' => '234f5678-f90c-23e4-b567-537725285112',
                'subject' => 'CN=pad918@gmail.com',
            ],
        ];
        
        $this->view->registrationForm = $this->getForm("registration");

        
    }
}
