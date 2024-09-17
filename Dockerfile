# # Descarga la imagen de ubuntu
#  FROM ubuntu:20.04

# # Instalar PHP
# RUN apt-get update && apt-get install -y \
#     php \
#     apache2 \
#     libapache2-mod-php \
#     curl \
#     unzip && \
#     apt-get clean && rm -rf /var/lib/apt/lists/*

# #Habilitar modulo apache
# RUN a2enmod php7.4

# #Copiar la carpeta webapp
# COPY ./webapp /home/webapp

# #Establecer directorio de trabajo
# WORKDIR /home/webapp

# #Abrir el puerto 8080
# EXPOSE 8080

# #Ejecutar la aplicacion Web
#CMD ["apachectl", "-D", "FOREGROUND"]


FROM ubuntu:20.04

RUN apt-get update && apt-get upgrade -y
 
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y php && apt-get clean

#Copiar la carpeta webapp
COPY ./webapp /home/webapp

#Establecer directorio de trabajo
WORKDIR /home/webapp

#Abrir el puerto 8080
EXPOSE 8080

#Ejecutar la aplicacion Web
CMD ["php", "-S","0.0.0.0:8080", "-t", "/home/webapp"]