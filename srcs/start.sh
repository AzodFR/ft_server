chmod 777 autoindex.sh

tar xvfz web/wp.tar.gz
mv wordpress/* /var/www/html/
mkdir /var/www/html/phpmyadmin
tar xvfz web/pmy.tar.gz
mv pmy/* /var/www/html/phpmyadmin

rm -rf /etc/nginx/sites-enabled/default
cp conf/nginx.conf /etc/nginx/sites-enabled/
rm -rf /var/www/html/wp-config-sample.php
mv conf/wp-config.php /var/www/html/

openssl req -x509 -nodes -days 365 -subj "/C=FR/ST=FR/O=42, Inc./CN=localhost" -addext "subjectAltName=DNS:localhost" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt;

/etc/init.d/php7.3-fpm start
service nginx start

service mysql start
sudo mysql < db/wordpress.sql

tail -f /var/log/nginx/access.log /var/log/nginx/error.log