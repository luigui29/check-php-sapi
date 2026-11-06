# Servidor Apache ligero para la demostración
FROM httpd:alpine

RUN sed -i \
    -e 's/^#LoadModule proxy_module/LoadModule proxy_module/' \
    -e 's/^#LoadModule proxy_fcgi_module/LoadModule proxy_fcgi_module/' \
    /usr/local/apache2/conf/httpd.conf

COPY apache/php-fpm.conf /usr/local/apache2/conf/extra/php-fpm.conf

RUN echo "Include conf/extra/php-fpm.conf" >> /usr/local/apache2/conf/httpd.conf

COPY public-html/ /var/www/html/