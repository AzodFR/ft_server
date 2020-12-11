FROM debian:buster

RUN apt update -y && \
	apt install -y nginx mariadb-server php-cli php-fpm php-mysql php-json php-opcache php-mbstring php-xml php-gd php-curl sudo

WORKDIR .

COPY srcs/ .

EXPOSE 80

ENTRYPOINT ["bash", "start.sh"]