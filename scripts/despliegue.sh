#!bin/bash
set -x

# Desisntalamos 
apt purge -y mssql* msodbc*

apt update 

# Instalamos Docker y Docker-compose
apt install docker -y
apt install docker-compose -y

#
systemctl enable docker 
systemctl start docker

usermod -aG docker $USER

git clone https://github.com/jacobo87/Proyecto_ASIR

cd Proyecto_ASIR
docker-compose up -d