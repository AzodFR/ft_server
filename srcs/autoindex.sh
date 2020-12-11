#! /bin/sh
if [ "$*" == "on"]
then
sudo rm -rf /etc/nginx/sites-enabled/nginx.conf
sudo cp nginx_auto.conf /etc/nginx/sites-enabled/nginx.conf
fi
if [ "$*" == "off"]
then
sudo rm -rf /etc/nginx/sites-enabled/nginx.conf
sudo cp nginx.conf /etc/nginx/sites-enabled/nginx.conf
fi
service nginx restart