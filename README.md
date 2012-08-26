yaas
====

'Y'ii 'A'pplication 'A'lternative 'S'tructure - a skeleton Yii framework application directory structure based on what is used for the Yiiframework.com site itself and outlined in the wiki article: http://www.yiiframework.com/wiki/155/the-directory-structure-of-the-yii-project-site

Directory Structure
-------------------
The main directory contains the following directories:

 - backend: a Yii Web application to hold non public-facing administrative functionality
 - frontend: the front-end Yii Web application - this represents your public-facing website
 - console: a Yii console application for your console and utility commands
 - common: a directory housing any code or configuration that is to be shared across two or more of the above applications

Please read: http://www.yiiframework.com/wiki/155/the-directory-structure-of-the-yii-project-site for more information on the directory struture

Quick Start
===========
Download Yaas
-------------
And unpack to a local directory of your choosing

Install Yii
-----------
Then clone the latest read-only master branch of yii framework into common/lib/yii/ directory
$ cd common/lib
$ git clone https://github.com/yiisoft/yii.git yii

or you can download the desired version of the framework and move the contents of framework/ over to
common/lib/yii. When completed, ensure that common/lib/yii/framework/yii.php exists.

Deploy the development environment
----------------------------------
####copy development specific environment files from the env/development/ directory for each application
1. Copy all files from *backend/env/development/config/* to *backend/config/*
2. Copy all files from *backend/env/development/www/* to  *backend/www/*
3. Copy all files from *frontend/env/development/config/* to *frontend/config/*
4. Copy all files from *frontend/env/development/www/* to *frontend/www/*
5. Copy all files from *console/env/development/config/* to *console/config/*
6. Copy *console/env/development/yiic.php* to *console/*
7  Copy all files from *common/env/development/config/* to *common/config/*

$ cp -R backend/env/development/config/ backend/config/; cp -R backend/env/development/www/ backend/www/; cp -R frontend/env/development/config/ frontend/config/; cp -R frontend/env/development/www/ frontend/www/; cp -R console/env/development/config/ console/config/; cp -R console/env/development/yiic.php console/; cp -R common/env/development/config/params-local.php common/config/

Ensure web server has read + write access to the following directories:
-----------------------------------------------------------------------
backend/runtime/  
backend/www/assets/  
console/runtime/  
frontend/runtime/  
frontend/www/assets/

Setup Web Document Roots
------------------------
Ensure that /frontend/www/ is an application webroot and /backend/www/ is also a webroot. These represent the frontend (public-facing) and backend (admin) applications. If using Apache web-server, one approach would be to setup vhosts that point to these directories as webroots.
E.G. 
local.yaas.com -> frontend/www/ 
and 
local.admin.yaas.com -> backend/www 
This way, if you visit http://local.yaas.com in your browser, it will run the index.php entry script at frontend/www/index.php. And similarly for the backend admin site.

One Other Quick Config Change
-----------------------------
Now that you have your frontend hostname setup, change the frontend.url setting in common/config/params-local.php to to match your setting




