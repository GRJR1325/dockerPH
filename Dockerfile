# Descarga la imagen de ubuntu
FROM ubuntu:20.04

#Actualizar
RUN apt-get update && apt-get upgrade -y
 
#Modulo php
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y php && apt-get clean

#Copiar la carpeta webapp
COPY ./webapp /home/webapp

#Establecer directorio de trabajo
WORKDIR /home/webapp

#Abrir el puerto 8080
EXPOSE 8080

#Ejecutar la aplicacion Web
CMD ["php", "-S","0.0.0.0:8080", "-t", "/home/webapp"]