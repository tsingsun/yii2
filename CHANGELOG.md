# 版本修改历史

- framework中composer.json重新命名包名.以取代yiisoft,利用composer中国镜像加快访问
- 去掉了framework中composer.json中包含bower的引用,如果需要,独立在项目中引入,中国的访问实在太慢了.
- Enh 调整BaseActiveRecord对旧版本的处理方式，记录更改的记录属性而非保留全部旧属性,减少内存消耗.
- Enh BaseActiveRecord在场景初始化时,除了default场景外,增加insert，update，delete3个场景.
- Enh 支持cursor based pagination 方式的查询,支持mysql的使用,但在'10.1.10-MariaDB'上测试排序异常.
