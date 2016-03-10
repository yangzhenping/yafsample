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

### License

----

MIT




**Free Software, Hell Yeah!**
[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
