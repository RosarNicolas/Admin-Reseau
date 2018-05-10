;
$TTL    3600
$ORIGIN wt3.ephec-ti.be.
@       IN      SOA     ns1.wt3.ephec-ti.be. he201426.wt3.ephec-ti.be. (
                     2018051003         ; Serial
                           7200         ; Refresh
                           3000         ; Retry
                        1209600         ; Expire
                         604800 )       ; Negative Cache TTL
;
@               IN      NS      ns1.wt3.ephec-ti.be.
@               IN      MX      10 mail
ns1             IN      A       54.37.65.113
mail            IN      A       54.37.65.113
web             IN      A       54.37.65.113
vitrine         IN      CNAME   web
intranet        IN      CNAME   web
b2b             IN      CNAME   web
smtp            IN      CNAME   mail
pop3            IN      CNAME   mail
imap            IN      CNAME   mail
mail._domainkey IN      TXT     ( "v=DKIM1; h=sha256; k=rsa; "
          "p=MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwHVxCRl4dMgTqjx6o3AbaQkcQ/Ji6OXy9/rYEoweLZiUZLNSAxSMB+hpebchKJa/TlfqRSZJNFjXncUOeHIgVyrQDZfPf8zBehoUuIMiOUG7A0MEoUY5EgGCToudstT0qAAh42VrPc3u7alyZQeod54JjSh+W5pccMQoP1ygmipixel34Q51OMwTRrNVHoWisk3A0TpjPz2se7"
          "7TQ09IJp7gLYy89Z08eqS3/4T/1MgTduUDrRzRjuO0kTzvG1e5Tpg3kObN3r1fRYIFnYc7i0AuDHSemQYFedWjIYXKDopA8lrkkZyjLENBjDJxVzC2nQ3xEcp6ob7YPmVwh0TApwIDAQAB" )  ; ----- DKIM key mail for wt3.ephec-ti.be
_dmarc          IN      TXT     ("v=DMARC1"
        "adkim=r")
