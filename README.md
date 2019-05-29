# yaf-sim-frame 1.0
## yaf-sim-frame 是一个在yaf基础搭建而成  
* 加入ez_sql的数据库连接类 增强yaf的数据操作便利  
* 可以把redis保存到session中  (可选) 默认在session文件里
* 数据库操作

- db()->get_results – 从数据库中读取数据集 (or 之前缓存的数据集) 
- db()->get_row — 从数据库中读取一条数据 (or 之前缓存的数据) 
- db()->get_col – 从数据库中读取一列指定数据集 (or 之前缓存的数据集) 
- db()->get_var — 从数据库数据集中读取一个值 (or 之前缓存的数据) 
- db()->query — 执行一条sql语句(如果有数据，就缓存起来) 
- db()->debug – 打印最后执行的sql语句与返回的结果（如果有结果） 
- db()->vardump – 打印变量的结构及内容 
- db()->select — 选择一个新数据库 
- db()->get_col_info – 获取列的信息 
- db()->donation – 捐钱给作者用的 
- db()->escape – 格式化插入数据库的字符串，eg:mysql_escape_string(stripslashes($str)) 
- db()->flush – 清除缓存 
- db()->get_cache – 换取缓存 
- db()->hide_errors – 隐藏错误 
- db()->register_error – 注册错误 
- db()->show_errors – 显示错误 
- db()->store_cache – 存储到缓存 
- db()->sysdate – 获取系统时间 
- db() = new db — 建立一个新db对象.

## 环境支持&注意问题
*  最基本的 php7 yaf 框架 （可选 redis）
*  入口文件 public/index.php 
*  apache 或者 nginx 目录 要设置到 public文件夹为目录
## 有什么问题请发邮件
295064796@qq.com
