FROM php:apache
COPY conf/apache2.conf /etc/apache2/
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install mysqli
EXPOSE 80