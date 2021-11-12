<a name="top"></a>
# Proyecto Integrado ASIR
> Jacobo Azmani  
> IES Celia Viñas (Almería) - Curso 2020/2021    
> Ciclo: CFGS Administración de Sistemas Informáticos en Red  

## Índice de contenidos
* [PILA LAMP](#item1)
* [Docker](#item2)
* [Docker-Compose](#item3)
* [Herramientas](#item4)

### Objetivos
El proyecto que quiero presentar se enfoca en una **Web de soporte Helpdesk**. Mi objetivo es aplicar los conocimientos adquiridos a lo largo del curso implantando las diferentes infraestructuras necesarias para levantar los servicios necesarios para una web de soporte técnico . Los clientes, previo registro, podrán hacer uso de la web para intercambio de contenido.

Se emplearán contenedores [Docker](https://www.docker.com/) para levantar servicios como la [Pila LAMP](https://es.wikipedia.org/wiki/LAMP), un [balanceador de carga](https://es.wikipedia.org/wiki/Equilibrador_de_carga) y desarrollar la web empleando [HTML](https://developer.mozilla.org/es/docs/Web/HTML), [PHP](https://www.php.net/), [CSS](https://developer.mozilla.org/es/docs/Web/CSS)...

<a name="item1"></a>
### PILA LAMP
[LAMP](https://es.wikipedia.org/wiki/LAMP) es un acrónimo utilizado para describir los sistemas de infraestructura de Internet utilizando las siguientes herramientas:

![](https://lh4.googleusercontent.com/wmCuTDpkpnkjtu8_EtTcK3usdu5NcQyHkphLmApGya_j3ulA8OGTKAnrIrjVrt7gh-nwF23GYXDFE9AwdEIw8OwkuOHz9Uq_y8XpzFctBODDl23cZQsDL0-Cw267y6xovLe8nwnk)

- [Linux](https://es.wikipedia.org/wiki/GNU/Linux), el sistema operativo
- [Apache](https://httpd.apache.org/), servidor web;
- [MySQL](https://www.mysql.com/) / [MariaDB](https://mariadb.org/), administrador de bases de datos;
-  	[PHP](https://www.php.net/), lenguaje de programación.

La combinación de estas tecnologías se utiliza principalmente para definir la estructura básica del servidor web.

<a name="item2"></a>
### Docker

Son contenedores ligeros y portables para las aplicaciones software que puedan ejecutarse en cualquier máquina con [Docker](https://www.docker.com/) instalado, independientemente del sistema operativo que la máquina tenga por debajo.

<a name="item3"></a>
### Docker-Compose

[Docker Compose](https://docs.docker.com/compose/) es una herramienta que permite simplificar el uso de [Docker](https://www.docker.com/). A partir de archivos [YAML](https://es.wikipedia.org/wiki/YAML) es más sencillo crear contenedores, conectarlos, habilitar puertos, volúmenes.

Con Docker-Compose podemos crear diferentes contenedores y al mismo tiempo, en cada contenedor, diferentes servicios, unirlos a un volúmen común, iniciarlos y apagarlos.

<a name="item4"></a>
#### Herramientas usadas

Para la puesta en marcha usaremos:

-   [Raspberry PI](https://www.raspberrypi.org/) durante la fase de desarrollo.
-   [Repositorio Github](https://github.com/) y [Git](https://git-scm.com/) con herramientas necesarias para levantar los servicios.
-   [Contenedor Docker](https://aws.amazon.com/es/docker/)
-   [Amazon Web Services](https://aws.amazon.com/es/) para el despliegue final del proyecto.
-   [Visual Studio Code](https://code.visualstudio.com/) para desarrollo de código web con diferentes extensiones especializadas.
- [Balsamiq](https://balsamiq.com/) para la creación del [wireframe](https://es.wikipedia.org/wiki/Website_wireframe) del sitio.
- [Summernote](https://summernote.org/)
- [MorrisJs](https://morrisjs.github.io/morris.js/) biblioteca [JS](https://developer.mozilla.org/es/docs/Web/JavaScript) que genera diagramas.
- [PHP y MySQL: Creando sitios dinámicos](https://openwebinars.net/academia/portada/php-mysql/)
- [Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer) extensión de VScode para ver los cambios del código en tiempo real.

## REFERENCIAS
- [José Juan Sanchez](https://github.com/josejuansanchez/iaw-practica-lamp-docker)
- [Jacobo Azmani](https://github.com/jacobo87)

[Subir](#top)
