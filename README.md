# yafsample
sample for yaf(Yet Another Framework)

##How to use it?
  - Framework souce code:https://github.com/laruence/yaf
  - Chinese doc:http://www.laruence.com/manual/index.html
  - English doc:http://php.net/manual/en/book.yaf.php

##How to install it?
  - http://blog.csdn.net/yangzhenping/article/details/50835479

##How to use sample for yaf?
  - download source code from https://github.com/yangzhenping/yafsample.git
  - copy to your website folder
  - lanuch web browser and go to http://yourhostname/sample/index.php/Index/index/index/name/nonStranger?get=my%20filled%20value
  - It means: http://yourhostname/sample/index.php/ModuleName/ControllerName/ActionName/indexActionFunctionVar1/indexActionFunctionVar1_Value?QueryStringName=QueryStringNameValue

  - It will shows as below:
  - Call _initConfig in Bootstrap
  - Call _initPlugin in Bootstrap
  - Call _initRoute in Bootstrap
  - Call _initView in Bootstrap
  - Call routerStartup in SamplePlugin
  - Call routerShutdown in SamplePlugin
  - Call dispatchLoopStartup in SamplePlugin
  - Call preDispatch in SamplePlugin
  - Inside indexAction in IndexController
  - Init SamplleModel
  - Call selectSample in SamplleModel
  - 
  - current Module:Index
  - current Controller:Index
  - current Action:index
  - getRequestUri:/Index/index/index/name/nonStranger
  - getBaseUri:
  - Outside indexAction in IndexController
  - Call postDispatch in SamplePlugin
  - Call dispatchLoopShutdown in SamplePlugin
  - Hello World!
  - I am nonStranger
  - output:test:my filled value

##Others

###Enable .htaccess file:
  - https://help.ubuntu.com/community/EnablingUseOfApacheHtaccessFiles

###Cannot find "/etc/apache2/sites-available/default"?
  - http://askubuntu.com/questions/421233/enabling-htaccess-file-to-rewrite-path-not-working

###Apache log location?
  - http://askubuntu.com/questions/14763/where-are-the-apache-and-php-log-files
  - http://ask.xmodulo.com/apache-error-log-location-linux.html

###.htaccess: "Invalid command 'RewriteEngine', perhaps misspelled or defined by a module not included in the server configuration"?
  - http://stackoverflow.com/questions/10144634/htaccess-invalid-command-rewriteengine-perhaps-misspelled-or-defined-by-a-m

###Removing index.php from URLs
  - http://httpd.apache.org/docs/2.0/misc/rewriteguide.html
  - #.htaccess
  -         RewriteEngine On
  -         RewriteBase /
  - 
  -         # Directs all EE web requests through the site index file
  -         RewriteCond %{REQUEST_FILENAME} !-f
  -         RewriteCond %{REQUEST_FILENAME} !-d
  -         RewriteRule ^(.*)$ /sample/index.php/$1 [L]
  - #.htaccess
  - 
  - http://st-ub14x64-01/sample/index.php/Index/Index/Index
  - http://st-ub14x64-01/sample/Index/Index/Index same as above
  - Inside indexAction in IndexController
  - 
  - http://st-ub14x64-01/sample/Index/Login/Index
  - Inside indexAction in LoginController, first Index is the default module name.
  - 
  - http://st-ub14x64-01/sample/Login/index
  - http://st-ub14x64-01/sample/Login same as above when indexAction in LoginController
  - Inside indexAction in LoginController, here hide have module name 'Index/' before LoginController 

### License

----

MIT



**Free Software, Hell Yeah!**
[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
