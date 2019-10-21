<?php
namespace App\Controller;

use CakeDC\Users\Controller\Traits\LinkSocialTrait;
use CakeDC\Users\Controller\Traits\LoginTrait;
use CakeDC\Users\Controller\Traits\OneTimePasswordVerifyTrait;
use CakeDC\Users\Controller\Traits\ProfileTrait;
use CakeDC\Users\Controller\Traits\ReCaptchaTrait;
use CakeDC\Users\Controller\Traits\RegisterTrait;
use CakeDC\Users\Controller\Traits\SimpleCrudTrait;
use CakeDC\Users\Controller\Traits\SocialTrait;
use CakeDC\Users\Controller\Traits\U2fTrait;

/**
 * Custom users controller
 *
 * @package App\Controller
 */
class UsersController extends AppController
{
    use LinkSocialTrait;
    use LoginTrait;
    use OneTimePasswordVerifyTrait;
    use ProfileTrait;
    use ReCaptchaTrait;
    use RegisterTrait;
    use SimpleCrudTrait;
    use SocialTrait;
    use U2fTrait;

    /**
     * Initialize
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('CakeDC/Users.Setup');
        if ($this->components()->has('Security')) {
            $this->Security->setConfig(
                'unlockedActions',
                ['login', 'u2fRegister', 'u2fRegisterFinish', 'u2fAuthenticate', 'u2fAuthenticateFinish']
            );
        }
    }
}
