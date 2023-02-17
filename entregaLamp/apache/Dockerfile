FROM debian:latest
RUN apt update && apt install -y apache2 php libapache2-mod-php most
RUN apt install -y php-zip php-xml php-curl php-gd php-mysql php-intl php-mbstring

# para buscar todas estas movidas apt-cache search php | grep -i "XXXxx"



EXPOSE 80
EXPOSE 443

# WORKDIR /etc/apache2
RUN a2enmod ssl
RUN a2enmod rewrite


CMD chmod 777 /app/prestashop/ && apachectl -D FOREGROUND
#CMD apachectl -D FOREGROUND

