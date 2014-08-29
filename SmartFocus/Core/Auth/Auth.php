<?php

/**
 * SmartFocus PHP
 * @author  Hamaryuginh <fabien.verloo@free.fr>
 * @license http://opensource.org/licenses/mit-license.php The MIT License
 */

namespace SmartFocus\Core\Auth;

/**
 * Auth class
 *
 * Handles authentication
 */
class Auth
{
    private $wsdl = 'https://%s/apiccmd/services/CcmdService?wsdl';

    protected $config = array(
        'server'   => '',
        'login'    => '',
        'password' => '',
        'api_key'  => '',
    );

    public function __construct(array $config = null)
    {
        $this->config = array_merge($this->config, $config);
        var_dump($this->config);
    }
}