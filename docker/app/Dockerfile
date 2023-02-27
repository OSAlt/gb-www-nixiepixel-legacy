FROM geekbeacon/php_base:8.2.3


RUN mkdir /app 
COPY . /app

RUN cd /app &&  \ 
    composer update && composer install --no-scripts  && \
    useradd -ms /bin/bash app_user && \
    chown -R app_user:users /app && \
    cp docker/app/docker_run.sh /app  && \
    npm install && \ 
    # npm audit fix && \
    yarn install && \
    yarn upgrade 

WORKDIR /app
VOLUME /app
VOLUME /app/resources
VOLUME /app/public

USER root

ENTRYPOINT [ "/app/docker/app/docker_run.sh" ]
EXPOSE 9000
