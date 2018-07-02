<?php

namespace OC\Tools;

/**
 * Session wrapper - real simple - to improve
 * @author silex
 * @version 0.1.0
 */
class Session {
    
	public static function start() {
		if (self::status() === PHP_SESSION_DISABLED)
			throw new CoreException('Sessions are disabled', 1, 'You can\'t use sessions with disabled sessions!');

		
		// start session if none exists
		if (self::status() === PHP_SESSION_NONE && PHP_SAPI != 'cli')
			session_start();
	}
	
	/**
	 * store an item in the session
	 * @param  string $key
	 * @param  mixed  $value
	 */
	public static function set($key, $value) {
		$_SESSION[$key] = $value;
	}
	
	/**
	 * retrieve an item from the session or return a default value
	 * @param  string $key
	 * @param  mixed  $default optional
	 * @return mixed
	 */
	public static function get($key, $default = null) {
		return (isset($_SESSION[$key]) ? $_SESSION[$key] : $default);
	}
	/**
	 * determine if an item exists in the session
	 * @param  string $key
	 * @return bool
	 */
	public static function has($key) {
		return isset($_SESSION[$key]);
	}
	/**
	 * remove an item from the session
	 * @param string $key
	 */
	public static function forget($key) {
		unset($_SESSION[$key]);
	}
	/**
	 * remove all items from the session
	 */
	public static function flush() {
		session_unset();
	}
	/**
	 * regenerate the session ID
	 * @param  bool $deleteOldSession optional
	 * @return bool
	 */
	public static function regenerate($deleteOldSession = false) {
		return session_regenerate_id($deleteOldSession);
	}
	/**
	 * get the session status
	 * @return int
	 */
	public static function status() {
		return session_status();
	}
	/**
	 * destroy the session
	 */
	public static function destroy() {
		self::flush();
		session_destroy();
	}
	/**
	 * destroy and start a new session
	 */
	public static function restart() {
		self::destroy();
		session_start();
	}
}