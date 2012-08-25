<?php
/**
 * Parameters specific to the production environment.
 * When you deploy the common application and specify 'production' environment, this will be copied
 * to common/config/. Once deployed to common/config, DO NOT put this file under source control.
 */
return array(
	// you can override main DB connection configuration here
	//'db.connectionString'=>'mysql:host=localhost;dbname=[YOUR-PROD-DB-NAME]',
	//'db.username'=>'[YOUR-PROD-DB-USERNAME]',
	//'db.password'=>'[YOUR-PROD-DB-PASSWORD]',
	
	'frontend.url'=>'[http://www.your-production-site.com]',
);
