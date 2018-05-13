FROM sameersbn/bind:latest

MAINTAINER Rosar Nicolas


RUN apt-get update

RUN mkdir -p /etc/bind/zones

COPY SOA	/etc/bind/zones/db.wt3.ephec-ti.be
COPY named.conf.local	/etc/bind/named.conf.local
COPY named.conf.options	/etc/bind/named.conf.options

EXPOSE 53:53/udp
