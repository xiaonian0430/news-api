# news-api

服务器环境要求：
最低配置：
- 4G内存
- 40G磁盘
- 2v CPU

# 相关软件

- centos 7
- openssl
- php 7.2 以上版本
- swoole 4.4.16
- 使用 Composer 作为依赖管理工具


# 安装

1）yum install openssl-devel


2）例如：php 7.2 安装 如下

yum install -y epel-release
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
yum -y remove php*
yum -y install php72w-cli php72w-fpm php72w-common php72w-mbstring php72w-devel

3）例如 swoole 安装如下
### swoole 扩展
wget https://github.com/swoole/swoole-src/archive/v4.5.2.tar.gz -O swoole.tar.gz \
    && mkdir -p swoole \
    && tar -xf swoole.tar.gz -C swoole --strip-components=1 \
    && rm swoole.tar.gz \
    && ( \
    cd swoole \
    && phpize \
    && ./configure --enable-openssl \
    && make \
    && make install \
    ) \
    && sed -i "2i extension=swoole.so" /etc/php.ini \
    && rm -r swoole

4） composer 安装
 
 中文官网 ： https://www.phpcomposer.com/



5） 项目依赖安装 

composer install


php vendor/easyswoole/easyswoole/bin/easyswoole install  选择默认参数


# 启动服务

bin/start.sh


如下命令已经在 shell 脚本中写好

php easyswoole start produce  d

php easyswoole stop produce

php easyswoole reload produce

php easyswoole restart produce