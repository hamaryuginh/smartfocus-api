<?php

/**
 * Class SmartFocus_Auth
 * @package SmartFocus
 */
class SmartFocus_Auth
{
    /** @var SmartFocus $master */
    protected $master;

    /**
     * @param SmartFocus $master
     */
    public function __construct(SmartFocus $master)
    {
        $this->master = $master;
    }

    /**
     * This method provides a session token when given valid credentials.
     * @param string $login
     * @param string $pwd
     * @param string $key
     * @return mixed
     */
    public function openApiConnection($login, $pwd, $key)
    {
        $_params = array('login' => $login, 'pwd' => $pwd, 'key' => $key);

        return $this->master->call('openApiConnection', $_params);
    }

    /**
     * This method terminates the session token.
     * @param string $token
     * @return mixed
     */
    public function closeApiConnection($token)
    {
        $_params = array('token' => $token);

        return $this->master->call('closeApiConnection', $_params);
    }
}
