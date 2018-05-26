<?php
/**
 * 
 * @author luxilang
 *
 */
class bootstrap extends Yaf_Bootstrap_Abstract{
	private $config;
	private $db_type;
	private $db_host;
	private $db_name;
	private $db_user;
	private $db_pwd;
    private $session_to_redis_isopen;
    private $redis_host;
    private $redis_port;
    private $redis_auth;
    private $beforehand_session;
	public function _initConfig() {
	    $config = Yaf_Application::app()->getConfig();
	    $this->db_type = $config->database->type;
	    $this->db_host = $config->database->host;
	    $this->db_name = $config->database->name;
	    $this->db_user = $config->database->user;
	    $this->db_pwd = $config->database->pwd;
	    $this->redis_host = $config->redis->host;
	    $this->redis_port = $config->redis->port;
	    $this->redis_auth = $config->redis->auth;
	    $this->beforehand_session = $config->beforehand_session;
	    $this->session_to_redis_isopen = $config->session_to_redis_isopen;
	    Yaf_Registry::set("config", $this->config);
	}
	public function _initSession($dispatcher) {
	     
	     if ($this->session_to_redis_isopen) {
	        ini_set("session.save_handler", "redis");
	        $redis_auth ='';
	        if (!empty($this->redis_auth)) {
	            $redis_auth = '?auth='.$this->redis_auth;
	        }
            ini_set("session.save_path", "tcp://{$this->redis_host}:{$this->redis_port}{$redis_auth}");
	     }else{
	        ini_set('session.save_path',APP_PATH.'/session');
	     }
	     if ($this->beforehand_session) {
	         Yaf_Session::getInstance()->start();
	     }
	     //Yaf_Session::getInstance()->start();
		
	}


	public function _initCommonFunctions(){
	    Yaf_Loader::import(APPLICATION_PATH. '/common/functions.php');
	}
	
	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
	    $LuxilangPlugin = new LuxilangPlugin();
	    
        $dispatcher->registerPlugin($LuxilangPlugin);
	}




}
