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
--------------------
And unpack to a local directory of your choosing

Install Yii
-----------
Then clone the latest read-only master branch of yii framework into common/lib/yii/ directory
$ cd common/lib
$ git clone https://github.com/yiisoft/yii.git yii

or you can download the desired version of the framework and move the contents of framework/ over to
common/lib/yii. When completed, ensure that common/lib/yii/framework/yii.php exists.