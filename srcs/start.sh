chmod 777 autoindex.sh

tar xvfz wp.tar.gz
mv wordpress/* /var/www/html/
mkdir /var/www/html/phpmyadmin
tar xvfz pmy.tar.gz
mv pmy/* /var/www/html/phpmyadmin

rm -rf /etc/nginx/sites-enabled/default
cp nginx.conf /etc/nginx/sites-enabled/
rm -rf /var/www/html/wp-config-sample.php
mv wp-config.php /var/www/html/

/etc/init.d/php7.3-fpm start
service nginx start

service mysql start
sudo mysql < wordpress.sql

tail -f /var/log/nginx/access.log /var/log/nginx/error.log