# 版本修改历史

- Enh 调整BaseActiveRecord对旧版本的处理方式，记录更改的记录属性而非保留全部旧属性,减少内存消耗
- Enh BaseActiveRecord在场景初始化时,除了default场景外,增加insert，update，delete3个场景
- Enh 支持cursor based pagination 方式的查询,支持mysql的使用,但在'10.1.10-MariaDB'上测试排序异常,
