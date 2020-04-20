<?php
    $config = include dirname(__FILE__).'/bycod.php';   					//... separate framework settings

    
    $config['idiom']            = 'es';
	$config["mail"]["host"]		= "srq-cc.com"; 							//... mail server or provider
	$config["mail"]["username"]	= "reservastucita";							//... user field of an active account on the mail server
	$config["mail"]["password"]	= "010414";				
	$config["mail"]["from"]		= "admin.red@cfg.labiofam.cu";	
	$config["mail"]["fromname"]	= "Administrador";							//... alias or name for which the email is issued
	$config["mail"]["driver"]	= "mail";

    $config['db']["log"]		= "log/";
    $config['db']["driver"]	 	= "sqlite";					        		//... admitted values: pgsql|mysql|mysqli|sqlite|sqlsrv
    $config['db']["name"]		= "storage";		              			//... name of the database to connect to
    $config['db']["path"]		= __DIR__ . "/../../dashboard/data/db/";	  
    $config['db']["path"]		= __DIR__ . "/../data/db/";	  				//... path where the database is located
    $config['db']["extension"]  = "db";						        		//... default value db

    $config['media']['url'] = "http://videoteca.cfg.labiofam.cu/emby/";
    $config['media']['imp'][] = "informatica/nube/Cuntos_megas_de_Internet_necesito";
    $config['media']['imp'][] = "labiofam/20190513-Consejo";
    $config['media']['tips']['total'] = 114;

    $config['company']['field']  = "p.role";
    $config['company']['role']  = "user";

    $config['ftp']['server'] = 'ftp.cfg.labiofam.cu';
    $config['ftp']['deep'] = '5';
    $config['ftp']['match'] = 'all';
    

	return $config;
