<a name="top"></a>
# Proyecto Integrado ASIR
> Jacobo Azmani  
> IES Celia Viñas (Almería) - Curso 2020/2021  
> Ciclo: CFGS Administración de Sistemas Informáticos en Red 

## Índice de contenidos
*  [PILA LAMP](#item1)
*  [Docker](#item2)
*  [Docker-Compose](#item3)
*  [Directorios](#item4)
*  [Instancia de AWS](#item5)
*  [Herramientas](#item6)

# Proyecto
El proyecto que quiero presentar se enfoca en una **Web de soporte Helpdesk**. Mi objetivo es aplicar los conocimientos adquiridos a lo largo del curso implantando las diferentes infraestructuras para levantar los servicios necesarios para una web de soporte técnico . 

Los clientes, previo registro, podrán hacer uso de la web.

## Descripción del proyecto
Consiste en la realización de un sitio Web de una empresa ficticia que gestiona incidencias informáticas.

A través de ello, los usuarios registrados podrán:

- Tramitar incidencias de informáticas de varios tipos y listar las que tienen ya abiertas.

Y los Administradores:

- Consultar las incidencias de los usuarios y hacer un seguimiento de las mismas.

  
Se emplearán contenedores [Docker](https://www.docker.com/) para levantar servicios como la [Pila LAMP](https://es.wikipedia.org/wiki/LAMP), un [balanceador de carga](https://es.wikipedia.org/wiki/Equilibrador_de_carga) y desarrollar la web empleando [HTML](https://developer.mozilla.org/es/docs/Web/HTML), [PHP](https://www.php.net/), [CSS](https://developer.mozilla.org/es/docs/Web/CSS)...

  
<a  name="item1"></a>

### PILA LAMP

[LAMP](https://es.wikipedia.org/wiki/LAMP) es un acrónimo utilizado para describir los sistemas de infraestructura de Internet utilizando las siguientes herramientas:

  

![](https://lh4.googleusercontent.com/wmCuTDpkpnkjtu8_EtTcK3usdu5NcQyHkphLmApGya_j3ulA8OGTKAnrIrjVrt7gh-nwF23GYXDFE9AwdEIw8OwkuOHz9Uq_y8XpzFctBODDl23cZQsDL0-Cw267y6xovLe8nwnk)


-  [Linux](https://es.wikipedia.org/wiki/GNU/Linux), el sistema operativo
-  [Apache](https://httpd.apache.org/), servidor web;
-  [MySQL](https://www.mysql.com/) / [MariaDB](https://mariadb.org/), administrador de bases de datos;
-  [PHP](https://www.php.net/), lenguaje de programación.

  

La combinación de estas tecnologías se utiliza principalmente para definir la estructura básica del servidor web.

  

<a  name="item2"></a>

### Docker

  

Son contenedores ligeros y portables para las aplicaciones software que puedan ejecutarse en cualquier máquina con [Docker](https://www.docker.com/) instalado, independientemente del sistema operativo que la máquina tenga por debajo.

  

<a  name="item3"></a>

### Docker-Compose

  

[Docker Compose](https://docs.docker.com/compose/) es una herramienta que permite simplificar el uso de [Docker](https://www.docker.com/). A partir de archivos [YAML](https://es.wikipedia.org/wiki/YAML) es más sencillo crear contenedores, conectarlos, habilitar puertos, volúmenes.

  

Con Docker-Compose podemos crear diferentes contenedores y al mismo tiempo, en cada contenedor, diferentes servicios, unirlos a un volúmen común, iniciarlos y apagarlos.


# Base de Datos

## Diagrama de la Base de Datos

![HELPDESK](https://user-images.githubusercontent.com/58173221/142851931-b79d6ce6-86a5-40cc-8f5e-509bb20f0cfd.png)

  
## Descripción de tablas y campos

-   USUARIOS (id, nombre ,apellido1, apellido2, email, contrasenya, rol_tipo, fecha_creacion, fecha_modificacion, fecha_eliminacion, estado)  

-   CATEGORÍA (id, nombre)  

-   CASO (id,  usuario_id, categoria_id, título, descripción, estado)

usuario_id = FK USUARIOS(id) 

categoria_id= FK CATEGORIA(id) 

-   COMENTARIOS (id, usuarios_id. caso_id, comentario, fecha_creacion_comentario)

usuario_id = FK USUARIOS(id) 

caso_id= FK CASO(id) 

<a name="item4"></a>

### Directorios

```javascript
App web Helpdesk
├── README.md
├── docker-compose.yml
├── .env
├── apache
│   └── dockerfile
├── db
│   ├── db.sql
│   └── dbdatos.sql
├── documentos
│   ├── DATABASE_HELPDESK.pdf
│   ├── HELPDESK.png
│   └── Sitio_Helpdesk_Jacobo.pdf
└── src
    ├── configuración
    │   └── index.php
    ├── controller
    │   ├── caso.php
    │   └── categoria.php
    ├── modelos
    │   ├── caso.php
    │   ├── usuario.php
    │   └── categoria.php
    ├── public
    │   ├── css
    │   ├── fonts
    │   ├── img
    │   └── js
    ├── vistas
    │   ├── consulta_entrada
    │   │ 	├── index.php
    │   │	└── consulta.js
    │   ├── home
    │   │ 	├── index.php
    │   │	└── home.js
    │   ├── logout
    │   │	└── logout.php
    │   ├── mainhead
    │   │	└── head.php
    │   ├── mainheader
    │   │	└── header.php
    │   ├── mainjs
    │   │	└── js.php
    │   ├── mainnav
    │   │	└── nav.php
    │   ├── nueva_entrada
    │   │ 	├── index.php
    │   │	└── entrada.js
    │   └── perfil
    │    	├── index.php
    │   	└── perfil.js
    ├── index.js
    └── index.php

```

<a name="item5"></a>

### Instancia en AWS

```bash
 aws ec2 run-instances --image-id ami-xxxxxxxx --count 1 --instance-type t2.micro --key-name MyKeyPair --security-group-ids sg-903004f8 --subnet-id subnet-6e7f829e
```

Ejemplo
```bash
aws ec2 run-instances --image-id ami-04505e74c0741db8d --count 1 --instance-type t2.micro --key-name vockey --security-group-ids sg-0afb1eaee5e4b761e
```
         
Donde: 
- ``ami-04505e74c0741db8d`` (64 bits x86), instancia **Ubuntu Server 20.04 LTS (HVM), SSD Volume Type**.
- ``--key-name vockey``, la clave de seguridad usadad para **AWS Learner Lab**.
- ``sg-0afb1eaee5e4b761e``, grupo de seguridad por defecto con las **reglas de entrada para todos los puertos, tráfico y protocolos**. 

ERROR
```bash
ddd_v1_w_h4aw_615692@runweb45275:~$ aws ec2 run-instances --image-id ami-04505e74c0741db8d --count 1 --instance-type t2.micro --key-name vockey --security-group-ids sg-0afb1eaee5e4b761e

An error occurred (UnauthorizedOperation) when calling the RunInstances operation: You are not authorized to perform this operation. Encoded authorization failure message: PNDOV1oGibO7Rp9Xrnj4T2SVrqi0oHwSQfN3GCWYvRBA8wPcjE50V6jjvK6mrAx-IWIwRRTElJ6lxlwR6-CSlqLqx3kOqNPxrfRlwD7KtKng_qIKBswXJ7ib3oqj6JiM6Qh3QvwaavE1ZtIoDzUc-P9JvTdjqcAc75jlr-GF0GTGVY94Ya37JmitXVHSEZB-P65zTGDEbBPnerjuJ51aRo5bvuU-msQlPouSqIHtW3KCqQpeqV8llDSZFz1PUVCDJMPCWgrEPcr_GpbEhyesUQKXlUoff4gCu_i5blOPRFAdbjzNYJ_vjaQTP5uuG63DSblXsZjGkGPROK8f04kLCwPkDFOeE4zLXjYyOO74Y00RoBOMb4UvXGzZAyGlcPCqfRpHmDiFrcAVWpJCeRzY34hv_JiqXJYQ00YHzgf38fCjFyDJu7p-escbULuHlAIRbCrLjQHQk8XxUvhJ-zIS4e_9Q5QjGUVV3fPqgl-E5_h0y0dgvdOkBgksFBW87IP8s21e7KT6Ik7UInYvmg9PIq8Ov59AMhI9idFTEAEg2hDYDYh282TdUkmodjVecbkqZqhN3QYAg2dIoMGiWrr_x6d7Rn5A5mo9-BFhqD8Bljli2jnujrCRYzChtR1dBGWbR6uPxEjc8a1wlfQpxP7lRPzSYHXkdYFzRjP2X4SzzQC2mDtSSuWd7udNuWav7lI0gOca-BkSOwKI6fmoRKwmT3chEFHeKxNFonF7HgJ40XFk_Hb8SKEgELzLOwBgy8gPujHID2ciHg
ddd_v1_w_h4aw_615692@runweb45275:~$ 
```
         
<a name="item6"></a>

### Herramientas usadas

Para la puesta en marcha usaremos:
-  [Raspberry PI](https://www.raspberrypi.org/) durante la fase de desarrollo.
-  [Repositorio Github](https://github.com/) y [Git](https://git-scm.com/) con herramientas necesarias para levantar los servicios.
-  [Contenedor Docker](https://aws.amazon.com/es/docker/)
-  [Amazon Web Services](https://aws.amazon.com/es/) para el despliegue final del proyecto.
-  [Visual Studio Code](https://code.visualstudio.com/) para desarrollo de código web con diferentes extensiones especializadas.
-  [Balsamiq](https://balsamiq.com/) para la creación del [wireframe](https://es.wikipedia.org/wiki/Website_wireframe) del sitio.
-  [Summernote](https://summernote.org/)
-  [MorrisJs](https://morrisjs.github.io/morris.js/) biblioteca [JS](https://developer.mozilla.org/es/docs/Web/JavaScript) que genera diagramas.
-  [PHP y MySQL: Creando sitios dinámicos](https://openwebinars.net/cursos/php-mysql/)
-  [Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer) extensión de VScode para ver los cambios del código en tiempo real.
-  [function md5()](http://www.md5.cz/) Devuelve el hash como un número hexadecimal de 32 caracteres.
-  [Bootstrapmade](https://bootstrapmade.com/bootstrap-admin-templates/) template admin.

  

## REFERENCIAS
-  [José Juan Sanchez](https://github.com/josejuansanchez/iaw-practica-lamp-docker)
-  [Jacobo Azmani](https://github.com/jacobo87)
-  [Openwebinars](https://openwebinars.net/)
-  [php.net](https://www.php.net/manual/es/)

[Subir](#top)


![GitHub followers](https://img.shields.io/github/followers/jacobo87?logo=Github&style=social)
[![Unlicense](https://img.shields.io/badge/License-Unlicense-blue.svg)](https://unlicense.org/)
[![made-with-Markdown](https://img.shields.io/badge/Made%20with-Markdown-1f425f.svg)](http://commonmark.org)
