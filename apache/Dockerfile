FROM php:7-apache
COPY conf/apache2.conf /etc/apache2/
COPY conf/000-default.conf /etc/apache2/sites-enabled/000-default.conf
RUN a2enmod rewrite && a2enmod headers
#RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN apt-get update 
RUN apt-get install sudo -y
RUN echo "Cmnd_Alias RELOAD_APACHE = /etc/init.d/apache2 reload" >> /etc/sudoers
RUN echo "www-data ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql 
EXPOSE 80