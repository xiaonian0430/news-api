# news-api

服务器环境要求：
最低配置：
- 4G内存
- 40G磁盘
- 2v CPU

# 相关软件

- centos 7 或更高版本
- gcc 4.8 或更高版本
- make
- autoconf
- openssl
- php 7.2 或更高版本
- swoole 4.5.2 或更高版本
- 使用 Composer 作为 php 依赖管理工具


# 安装

0)安装编译工具
yum -y install gcc-c++ make autoconf wget 

1）安装 openssl libxml2 sqlite nghttp2
```
# openssl libxml2 sqlite
yum -y install openssl-devel libxml2 libxml2-devel sqlite-devel

# nghttp2 library
wget https://github.com/nghttp2/nghttp2/releases/download/v1.41.0/nghttp2-1.41.0.tar.gz
tar zxvf nghttp2-1.41.0.tar.gz
cd nghttp2-1.41.0
./configure
make && make install
```


3) 安装 php
```
wget https://www.php.net/distributions/php-7.4.9.tar.gz
tar zxvf php-7.4.9.tar.gz
cd php-7.4.9
./configure --prefix /usr/local/php749 --with-openssl --with-openssl-dir --enable-sockets --enable-mysqlnd
make && make install

# 添加软连接
ln -s /usr/local/php749/bin/php /bin/php
ln -s /usr/local/php749/bin/phpize /bin/phpize
```


4）安装 swoole 扩展
```
wget https://github.com/swoole/swoole-src/archive/v4.5.2.tar.gz
tar zxvf v4.5.2.tar.gz
cd v4.5.2
phpize
./configure --enable-openssl --enable-sockets --enable-http2 --enable-mysqlnd --with-php-config=/usr/local/php749/bin/php-config
make && make install

# 进入php.ini,在最后面增加上extension=swoole.so
vi /usr/local/php749/lib/php.ini
extension=swoole.so
```

5）安装 composer php 依赖管理工具。见中文官网 ： https://www.phpcomposer.com/
```
php -r "copy('https://install.phpcomposer.com/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer
chmod +x /usr/local/bin/composer
```


6）部署项目代码

```
# 5.1）克隆代码
git clone https://github.com/xiaonian0430/news-api.git
cd news-api

# 5.2）安装项目依赖
composer install
php vendor/easyswoole/easyswoole/bin/easyswoole install  # (一路回车即可，选择默认参数)
```


# 启动服务
```
bin/start.sh


如下命令已经在 shell 脚本中写好

php easyswoole start produce  d

php easyswoole stop produce

php easyswoole reload produce

php easyswoole restart produce
```