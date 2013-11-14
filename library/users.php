<?php
 
class User
{
    private $_db;
    private $_isLogged;
     
    public function __construct()
    {
        if (!session_id())
        {
            session_start();
        }
        $this->_db = Db::init();
    }
     
    public function login($username, $password)
    {
        $sth = $this->_db->prepare("SELECT * FROM users WHERE username = ?");
        $sth->execute(array($username));
        $result = $sth->fetch();
         
        if ($result)
        {
            if ($result['password'] == md5($password))
            {
                $this->_setLogin($result);
                return true;
            }
        }
        return false;
    }
     
    private function _setLogin($userData)
    {
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $userData['id'];
        $_SESSION['username'] = $userData['username'];
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
         
        try {
             
            $sth = $this->_db->prepare("UPDATE users SET ip = ? WHERE id = ?");
            $sth->execute(array($_SERVER['REMOTE_ADDR'], $userData['id']));
             
            $forCookie = array(
                'id' => $userData['id'],
                'ip' => $_SERVER['REMOTE_ADDR'],
                'username' => $_SESSION['username']
            );
             
            setcookie('simpleLogin', serialize($forCookie), time()+60*60*24*30, '/');
             
        } catch (Exception $e) {
            die('Database error: ' . $e->getMessage());
        }
    }
}
?>