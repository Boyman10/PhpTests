<?php

namespace OC\Tools;

/**
 * This class is having methods in use for securing the application
 *
 */
class SecurityUtilities
{
    /**
     * @var $token
     */
    private $token;
    
    /**
     * private key for Google Recaptcha
     * @var $secret
     */ 
    private $secret = "6LdTw18UAAAAABA8aS-IhhpZ6IC-vsSbqDrbc0vJ";
    // response from recaptcha
    private $response ;
    // Remote user ip
    private $remoteip ;
    
    public function generateToken() 
    {
        $this->token = bin2hex(random_bytes(32));
        
    }
    
    public function getToken()
    {
        return $this->token;
    }
    
    /**
     * Filling and calling recaptcha
     * @param [] $params
     */
    public function recaptchaCheck($gcaptcha, $ip)
    {
        $this->response = htmlspecialchars($gcaptcha);
        $this->remoteip = $ip;
        
        // Url to send a post request to
        $api_url = "https://www.google.com/recaptcha/api/siteverify";


        $fields = array(
            'secret' => $this->secret,
            'response' => $this->response,
            'remoteip' => $this->remoteip
        );
        
        $fields_string = "";
        
        //url-ify the data for the POST
        foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        rtrim($fields_string, '&');
        
        //open connection
        $ch = curl_init();
        
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $api_url);
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        //execute post
        $result = curl_exec($ch);
        
        //close connection
        curl_close($ch);
        
        $decode = json_decode($result, true);
        
        if ($decode['success'] == true) {
            // yeah good to go !!
        }
        
        else {
            throw new \Exception("You are a bot, aren't you !! ".$decode['success']);
        }
    }
    
    /**
     * Method generating password hash
     * @see https://github.com/ircmaxell/password_compat
     * @param $pass
     * @return hash of $pass
     */
    public function hashPass($pass) : string
    {
        return password_hash($pass, PASSWORD_BCRYPT, array("cost" => 10));
    }
    
    
    /**
     * Method verifying password
     * @see https://github.com/ircmaxell/password_compat
     * @param $pass
     * @param $hash -- from db
     * @return boolean
     */
    public function verifyPass($pass, $hash) : bool
    {
        return password_verify($pass, $hash);
    }
    
    
}