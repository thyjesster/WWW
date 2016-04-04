<?php

define('SESSION_USER_NAME', 'name');
define('SESSION_LOGGED_IN', 'logged_in');

define('SESSION_AUTH', 'auth');
define('SESSION_STATE', 'state');

class UserState
{
    protected static $auths_ = array(
        'AUTHID_GUEST' => 'Visitor',
        'AUTHID_NORMAL' => 'Logged In User',
        'AUTHID_ADMIN' => 'Administrative User',
    );

    public function __construct()
    {
        $this->initialize(self::$auths_);

        if (!$this->has_current_auth())
            $this->set_login_state(AUTHID_GUEST);

        if (!$this->is_logged_in())
            $this->set_login_state(AUTHID_GUEST);
    }

    protected function initialize(&$array)
    {
        $newarray = array();
        $count = 0;
        foreach ($array as $key)
        {
            $newarray[$count] = $key;
            define($key, $count);
            $count++;
        }
        $array = $newarray;
    }

    public function get_login_state()
    {
        if(array_key_exists(SESSION_AUTH, $_SESSION))
            return $_SESSION[SESSION_AUTH];
        else
            return FALSE;
    }

    public function has_current_auth()
    {
        return array_key_exists(SESSION_AUTH, $_SESSION) == TRUE;
    }

    public function set_login_state($authid)
    {
        $_SESSION[SESSION_AUTH] = $authid;
    }

    public function login_user($name)
    {
        global $CONFIGURATION;

        $_SESSION[SESSION_USER_NAME] = $name;
        $_SESSION[SESSION_LOGGED_IN] = TRUE;

        if ($name == 'admin')
        {
            $this->set_login_state(AUTHID_ADMIN);
        }
        else
        {
            $this->set_login_state(AUTHID_NORMAL);
        }
    }

    public function logout_user()
    {
        unset($_SESSION[SESSION_USER_NAME], $_SESSION[SESSION_LOGGED_IN]);

        $this->set_login_state(AUTHID_GUEST);

        $this->clear_state();
    }

    public function get_name()
    {
        return
            array_key_exists(SESSION_USER_NAME, $_SESSION)
                ? $_SESSION[SESSION_USER_NAME]
                : ''
            ;
    }

    public function is_logged_in()
    {
        return
            array_key_exists(SESSION_LOGGED_IN, $_SESSION) &&
            ($_SESSION[SESSION_LOGGED_IN] === TRUE)
            ;
    }

    public function has_state($name=NULL)
    {
        if ($name != NULL)
            return array_key_exists(SESSION_STATE.':'.$name, $_SESSION) == TRUE;
        else
            return count($this->get_state_keys()) > 0;
    }

    public function set_state($name, $value)
    {
        $_SESSION[SESSION_STATE.':'.$name] = $value;
    }

    public function get_state($name)
    {
        if (array_key_exists(SESSION_STATE.':'.$name, $_SESSION))
            return $_SESSION[SESSION_STATE.':'.$name];
        else
            return FALSE;
    }

    public function get_state_keys()
    {
        $prefix = SESSION_STATE.':';
        $keys = array();
        foreach ($_SESSION as $key => $value)
        {
            if (substr($key, 0, strlen($prefix)) == $prefix)
                $keys[] = substr($key, strlen($prefix), strlen($key));
        }
        return $keys;
    }

    public function clear_state($name=NULL)
    {
        if ($name == NULL)
        {
            $names = $this->get_state_keys();
            foreach ($names as $value)
                unset($_SESSION[SESSION_STATE.':'.$value]);
        }
        else
            unset($_SESSION[SESSION_STATE.':'.$name]);
    }
}
?>
