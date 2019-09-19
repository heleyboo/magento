FROM webdevops/php-apache-dev:7.2

USER root
RUN curl https://packages.sury.org/php/apt.gpg -o /etc/apt/trusted.gpg.d/php.gpg
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list
RUN rm -rf /var/lib/apt/lists/* && apt-get update
RUN apt-get install --yes libsodium-dev
RUN docker-php-ext-install sodium