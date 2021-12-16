#!bin/bash
set -x

# Desisntalamos los paquetes SQL que trae nuestra AMI por defecto
apt purge -y mssql* msodbc*

# Actualizamos los repositorios
apt update 

# Instalamos Docker y Docker-compose
apt install docker -y
apt install docker-compose -y

# Introducimos a docker dentro del grupo de usuarios
usermod -aG docker $USER
newgrp docker

# Habilitamos Docker
systemctl enable docker 
systemctl start docker

# Clonamos el repositorio
git clone https://github.com/jacobo87/Proyecto_ASIR

# Accedemos al proyecto y lo desplegamos
cd Proyecto_ASIR
docker-compose up -d