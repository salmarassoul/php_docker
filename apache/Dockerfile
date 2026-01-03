FROM httpd:2.4

RUN apt-get update && apt-get install -y \
    libapache2-mod-fcgid \
&& rm -rf /var/lib/apt/lists/*

RUN sed -i \
    -e 's/#LoadModule proxy_module/LoadModule proxy_module/' \
    -e 's/#LoadModule proxy_fcgi_module/LoadModule proxy_fcgi_module/' \
    conf/httpd.conf

COPY apache.conf /usr/local/apache2/conf/httpd.conf

WORKDIR /usr/local/apache2/htdocs/
