# utilisation image ubuntu (la plus récente)
FROM ubuntu:latest

# set le champ auteur de l'image (qui garde l'image à jour)
MAINTAINER Rosar Nicolas

# apt-get => fonctionne en tant que root
# => RUN = exécute n'importe quelle commande shell OU (2 ème forme du run ==> lancer un exécutable)
# => apt est un gestionnaire de packages
# => apt-get update = met à jour le package index
# => apt-get -y = "YES" automatique à toutes les invites dans le prompt à mettre "yes"
# => apt-get -y upgrade = mise à jour des derniers packages 
# => noninteractive = mettre en palce un envirronement avec lequel on n'interagit pas.
# => apache2 = installation package de apache
# => pfp7.2 = installation package php version 7.2
# => libapache2-mod-php7.0 = langage de script inclus dans du HTML et exécuté coté serveur
# => curl = installation package curl
# (et serveurs HTTP, FTP ...)

RUN apt-get update && apt-get -y upgrade && DEBIAN_FRONTEND=noninteractive apt-get -y install \
    apache2 php7.0 php7.0-mysql libapache2-mod-php7.0 curl lynx-curl

# Enable apache mods.
RUN a2enmod php7.0
RUN a2enmod rewrite

# Update the PHP.ini file, enable <? ?> tags and quieten logging.
RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/7.0/apache2/php.ini
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php/7.0/apache2/php.ini

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Exposition du port 80 de apache.
EXPOSE 80

# Update du site apache par défaut avec le fichier de configuration "apache-config.conf"
ADD vitrine.conf /etc/apache2/sites-enabled/vitrine.conf
ADD intranet.conf /etc/apache2/sites-enabled/intranet.conf
ADD b2b.conf /etc/apache2/sites-enabled/b2b.conf

# Commande shell qui démarre apache en arrière-plan par défaut et exécute /bin/bash pour interagir
CMD /usr/sbin/apache2ctl -D FOREGROUND
