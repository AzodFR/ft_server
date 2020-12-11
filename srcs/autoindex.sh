#! /bin/sh
if [ $# -eq 0 ];then
   echo "You need to use ./autoindex {on|off}"
   exit
fi
if [ $1 = "on" ]; then
	sudo rm -rf /etc/nginx/sites-enabled/nginx.conf
	sudo cp conf/nginx_auto.conf /etc/nginx/sites-enabled/nginx.conf
	echo "Auto index activated, NGINX need to restart !"
	service nginx restart
elif [ $1 = "off" ]; then
	sudo rm -rf /etc/nginx/sites-enabled/nginx.conf
	sudo cp conf/nginx.conf /etc/nginx/sites-enabled/nginx.conf
	echo "Auto index desactivated, NGINX need to restart !"
	service nginx restart
else
	echo "You need to use ./autoindex {on|off}"
fi