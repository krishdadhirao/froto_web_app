<?php
    /**
     * Your Twitter App Info
     */
    
    // Consumer Key
    define('CONSUMER_KEY', 'YOUR CONSUMER_KEY HERE');
    define('CONSUMER_SECRET', 'YOUR CONSUMER_SECRET HERE');

    // User Access Token
    define('ACCESS_TOKEN', 'YOUR ACCESS_TOKEN HERE');
    define('ACCESS_SECRET', 'YOUR ACCESS_SECRET HERE');
	
	// Cache Settings
	define('CACHE_ENABLED', false);
	define('CACHE_LIFETIME', 3600); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));