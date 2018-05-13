FROM sameersbn/bind:latest

MAINTAINER Rosar Nicolas


RUN apt-get update



COPY db.wt3.ephec-ti.be	/etc/bind/db.wt3.ephec-ti.be
COPY named.conf.local	/etc/bind/named.conf.local
COPY named.conf.options	/etc/bind/named.conf.options

EXPOSE 53:53/udp
