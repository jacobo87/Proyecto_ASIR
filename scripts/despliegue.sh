#!bin/bash
set -x

# Desisntalamos 
apt purge -y mssql* msodbc*

apt update 

# Instalamos Docker y Docker-compose
apt install docker -y
apt install docker-compose -y


usermod -aG docker $USER
new grp docker

#
systemctl enable docker 
systemctl start docker


git clone https://github.com/jacobo87/Proyecto_ASIR

cd Proyecto_ASIR
docker-compose up -d