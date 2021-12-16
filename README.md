<a name="top"></a>
> Jacobo Azmani  
> IES Celia Viñas (Almería) - Curso 2020/2021  
> Ciclo: CFGS Administración de Sistemas Informáticos en Red 

![Captura de pantalla 2021-12-16 a las 5 23 53](https://user-images.githubusercontent.com/58173221/146308999-e6df7316-2979-4f3b-a9ad-f56bb7de631b.png)

### Herramienta de ticketing para gestión de incidencias

## ÍNDICE

- [Proyecto](#item1)
   - Descripción del proyecto
   - Finalidad
- [Material Utilizado](#item2)
   - Servidor Web: Apache
   - SGBD: MySQL
   - [Lenguajes de Programación](#item3)
      - PHP
      - AJAX
      - SQL
      - JavaScript
   - [Lenguajes de Diseño](#item4)
      - HTML
      - CSS
   - [Otros](#item5)
      - Docker
         - Docker-Compose
         - Dockerfile: Yaml
      - Pila LAMP
      - AWS
- [Base de Datos](#item6)
   - Diagrama de la Base de Datos
   - Descripción de tablas y campos
   - Modelo vista controlador (MVC) en PHP
      - Modelo
      - Controlador
      - Vista
- [Árbol de Directorios](#item7)
- [Ejemplo de creación de instancias en AWS](#item8)
- [Ejemplo del funcionamiento del sitio](#item9)
- [Herramientas](#item10)
- [Conclusión](#item11)
- [Bibliografía](#item12)


# Sitio HelpDesk con Docker, Docker-Compose y AWS

<a name="item1"></a>
## Proyecto

El proyecto que quiero presentar se enfoca en una **Web de soporte Helpdesk**. Mi objetivo
es aplicar los conocimientos adquiridos a lo largo del curso implantando las diferentes
infraestructuras necesarias para levantar los servicios necesarios para una web de soporte
técnico.

Mi interés en este tipo de web viene de mi propia experiencia laboral como Helpdesk, en la
cual he podido trabajar con sistemas de ticketing y atención al cliente.

### Descripción del proyecto

Consiste en la realización de un portal Web de una empresa ficticia que gestiona
incidencias informáticas. Cuenta con dos roles diferenciados.

Los **usuarios registrados** podrán:
- Abrir nuevas peticiones
- Consultar los últimos registros
- Reportar fallos, etc..

Los **Administradores** podrán:
- Añadir nuevos registros, editar y/o cerrarlos.
- Dispondrán de un correo electrónico de soporte a los clientes.

### Finalidad

Facilitar la gestión de las incidencias que los usuarios abren, independientemente del equipo desde el que se trabaje.

<a name="item2"></a>

## Material Utilizado

### Servidor Web: Apache

Para la realización del proyecto se ha utilizado y testeado con el **servidor Web Apache**.

El servidor Apache es un servidor web HTTP gratuito y de código abierto que ofrece
contenidos web a través de Internet. Se le conoce comúnmente como Apache y, tras su
desarrollo, se convirtió rápidamente en el servidor HTTP más popular de la web.

Apache es sólo uno de los componentes que se necesitan en una pila de aplicaciones web
para ofrecer contenido web. Una de las pilas de aplicaciones web más comunes es LAMP,
es decir, Linux, Apache, MySQL y PHP.

### SGBD: MySQL

MySQL es un sistema de gestión de bases de datos relacionales desarrollado por Oracle
que se basa en el lenguaje de consulta estructurado (SQL). Sus principales ventajas son su
amplia compatibilidad, su facilidad de uso y que se trata de código abierto.

<a name="item3"></a>

### Lenguajes de Programación

#### PHP

PHP es un acrónimo recursivo que significa **PHP Hypertext Pre-processor**. PHP es un
lenguaje de programación interpretado, diseñado originalmente para la creación de páginas
Web dinámicas. Es usado principalmente en interpretación del lado del servidor (server-side
scripting)

#### AJAX

Ajax es la combinación de JavaScript asíncrono y XML. Sin ser exactamente un lenguaje de
programación, utiliza una combinación de:

- Un objeto XMLHttpRequest incorporado en el navegador (para solicitar datos de un
servidor web)
- JavaScript y HTML DOM (para mostrar o utilizar los datos)

AJAX permite actualizar las páginas web de forma asíncrona mediante el intercambio de
datos con un servidor web entre bastidores. Esto significa que es posible actualizar partes
de una página web, sin recargar toda la página lo que significa aumentar la interactividad,
velocidad y usabilidad en las aplicaciones.


Ajax es una técnica válida para múltiples plataformas y utilizable en muchos sistemas
operativos y navegadores dado que está basado en estándares abiertos como
JavaScript y Document Object Model (DOM).

#### SQL

El Lenguaje de consulta estructurado ( **Structured Query Language**) es un lenguaje
declarativo de acceso a bases de datos relacionales que permite especificar diversos
tipos de operaciones en éstas. Una de sus características es el manejo del álgebra y el cálculo relacional permitiendo efectuar consultas con el fin de recuperar -de una forma sencilla- información de interés de una base de datos, así como también hacer cambios sobre ella.

#### JavaScript

JavaScript es un lenguaje de programación interpretado, es decir, que no requiere
compilación. Es utilizado principalmente en páginas Web, con una sintaxis semejante a la del lenguaje Java y el lenguaje C y se considera un lenguaje orientado a objetos.

<a name="item4"></a>

### Lenguajes de Diseño.

#### HTML

HTML, siglas de **Hyper Text Markup Language** (Lenguajede Marcas de Hipertexto), es
el lenguaje de marcado predominante para la construcción de páginas Web.

Es usado para describir la estructura y el contenido en forma de texto, así como para complementar el texto con objetos tales como imágenes. HTML se escribe en forma
de "etiquetas", rodeadas por corchetes angulares ``(<,>)``. HTML también puede describir, hasta un cierto punto, la apariencia de un documento, y puede incluir un
script (por ejemplo JavaScript), el cual puede afectar el comportamiento de
navegadores Web y otros procesadores de HTML.

Por convención, los archivos de formato HTML usan la extensión ``.htm`` o ``.html``.

#### CSS

Las hojas de estilo en cascada ( **Cascading Style Sheets**),CSS es un lenguaje artificial
usado para definir la presentación de un documento estructurado escrito en HTML o
XML (y por extensión en ``XHTML``). El WWWC ( **World Wide Web Consortium**) es el
encargado de formular la especificación de las hojas de estilo que servirán de
estándar para los agentes de usuario o navegadores.

La idea que se encuentra detrás del desarrollo de CSS es separar la estructura de un
documento de su presentación. Esto ayuda a mejorar la experiencia del usuario con una
estética más uniforme y atractiva.


<a name="item5"></a>

### Otros

#### Docker

Docker empaqueta software en “contenedores” que incluyen en ellos todo lo necesario para que dicho software se ejecute, incluidas librerías. Con Docker se puede implementar y ajustar la escala de aplicaciones de una forma rápida en cualquier entorno con la garantía de que el código se ejecutará y se usan las funcionalidades del Kernel para encapsular un sistema, de esta forma el proyecto que corre dentro de él no tendrá conocimiento que está en un contenedor.

Los contenedores Docker tienen ventajas frente a las máquinas virtuales. Son más livianos, requieren menos recursos de la máquina, se anula la necesidad de instalar un sistema operativo por contenedor y además se ofrece total portabilidad.

En esta práctica se emplearán contenedores Docker para levantar servicios como la Pila LAMP, un balanceador de carga y desarrollar la web empleando HTML, PHP, CSS...

##### Docker-Compose

Es una herramienta que permite simplificar el uso de Docker. A partir de archivos ``YAML es
más sencillo crear contenedores, conectarlos, habilitar puertos, volúmenes.

Con Docker-Compose podemos crear diferentes contenedores y al mismo tiempo, en cada
contenedor, diferentes servicios, unirlos a un volúmen común, iniciarlos y apagarlos. Esto
resulta clave para la creación y escalabilidad de sistemas de contenedores complejos.

##### Dockerfile: Yaml

**YAML** es un estándar de serialización de datos legibles para el ser humano que se puede
utilizar junto con todos los lenguajes de programación y se utiliza a menudo para escribir
archivos de configuración. En este proyecto su función es configurar de manera sencilla y
legible los diferentes servicios desplegados.

#### Pila LAMP

LAMP es un acrónimo utilizado para describir los sistemas de infraestructura de Internet
utilizando las siguientes herramientas:

- **Linux**, el sistema operativo.
- **Apache**, servidor web.
- **MySQL**, MariaDB, administrador de bases de datos.
- **PHP**, Hypertext Pre-processor


#### AWS

**Amazon Web Services** se trata de una plataforma queofrece soluciones de computación en
la nube flexibles, fiables, escalables, fáciles de usar y rentables.

La plataforma se desarrolla con una combinación de ofertas de infraestructura como servicio
(IaaS), plataforma como servicio (PaaS) y software empaquetado como servicio (SaaS).

En este proyecto, AWS realizará una función de hosting para el sitio web PHP.


<a name="item6"></a>

## Base de Datos

### Diagrama de la Base de Datos

![HELPDESK](https://user-images.githubusercontent.com/58173221/142851931-b79d6ce6-86a5-40cc-8f5e-509bb20f0cfd.png)

### Descripción de tablas y campos
```
USUARIOS ( id, nombre ,apellido1, apellido2, email,contrasenya, rol_tipo, fecha_creacion, fecha_modificacion, fecha_eliminacion, estado)
CATEGORÍA ( id, nombre)
CASO ( id, usuario_id, categoria_id, título, descripción, estado)
```
> usuario_id = FK USUARIOS(id) 
> categoria_id= FK CATEGORIA(id)  

```
COMENTARIOS (id, usuarios_id. caso_id, comentario, fecha_creacion_comentario)
```
> usuario_id = FK USUARIOS(id) 
> caso_id= FK CASO(id) 

### Modelo vista controlador (MVC) en PHP
![image](https://user-images.githubusercontent.com/58173221/146309391-7c8edad0-ecb3-4d12-abfb-f650ad280cf7.png)

#### Definiciones

#### Modelo

Gestiona todo lo relacionado con la información y la iteración con los datos de nuestra
aplicación. Todas las peticiones de acceso a los datos pasarán por esta capa.

#### Controlador

Une la vista y el modelo. El usuario solicitará información por medio de la vista y esta hará
la petición al controlador. Posteriormente, este, realizará la petición al modelo.

#### Vista

Es la capa que nos mostrará la información formateada. También desde dónde el usuario
puede solicitar más información.


<a name="item7"></a>

## Árbol de Directorios

```
App web Helpdesk
├── README.md
├── docker-compose.yml
├── .env
├── apache
│ └── dockerfile
├── db
│ ├── db.sql
│ └── dbdatos.sql
├── documentos
│ ├── DATABASE HELPDESK.pdf
│ ├── HELPDESK.png
│ └── Sitio_Helpdesk_Jacobo.pdf
└──src
  ├── configuración
  │ 	└── index.php
  ├── controller
  │   ├── caso.php
  │   └── categoria.php
  ├── modelos
  │    ├── caso.php
  │    ├── usuario.php
  │    └── categoria.php
  ├── public
  │     ├── css
  │     ├── fonts
  │     ├── img
  │     └── js
  ├── vistas
  │      ├── consulta_entrada
  │      │   ├── index.php
  │      │   └── consulta.js
  │      ├── home
  │      │   ├── index.php
  │      │   └── home.js
  │      ├── logout
  │      │       └── logout.php
  │      ├── mainhead
  │      │   └── head.php
  │      ├── mainheader
  │      │   └── header.php
  │      ├── mainjs
  │      │   └── js.php
  │      ├── mainnav
  │      │   └── nav.php
  │      ├── nueva_entrada
  │      │   ├── index.php
  │      │   └── entrada.js
  │      └── perfil
  │           ├── index.php
  │           └── perfil.js
  ├── index.js
  └── index.php
```

<a name="item8"></a>

## Ejemplo de creación de instancias en AWS

```bash
aws ec2 run-instances --image-id ami-0472eef47f816e45d --count 1 --instance-type t2.micro --key-name vockey --security-group-ids sg-proyecto-sg
```
         
Donde: 
- ``ami-0472eef47f816e45d`` (64 bits x86), instancia **Ubuntu Server 20.04 LTS (HVM), SSD Volume Type**.
- ``--key-name vockey``, la clave de seguridad usadad para **AWS Learner Lab**.
- ``sg-proyecto-sg``, grupo de especifico para el proyecto, con las **reglas de entrada, para todos los puertos**, ``:22``, ``:80``,``:443``, ``:8080``. 

<a name="item9"></a>

## Ejemplo del funcionamiento del sitio

En primera instancia el usuario debe hacer login como cliente.

![image](https://user-images.githubusercontent.com/58173221/146309470-e07f48a8-c69c-46fa-b832-e298c1866a7b.png)

Una vez logueado, el usuario cliente puede crear nuevos casos o revisar las que ya tenga abiertas. En este ejemplo, el usuario cliente abre un nuevo caso.

![image](https://user-images.githubusercontent.com/58173221/146309485-83fe8219-c54b-4242-8ab9-16ec2e46ded2.png)

Tras elegir la naturaleza de su caso y redactar las instrucciones que sean precisas, deberá enviar el caso.

![image](https://user-images.githubusercontent.com/58173221/146309515-43c8b519-4850-4920-a200-9a9f4cfbba79.png)

Por su parte, cualquier usuario administrador puede visualizar todas las consultas que se encuentran actualmente abiertas y pendientes de gestionar.
![image](https://user-images.githubusercontent.com/58173221/146309537-1dd3cb6f-97f1-4bfa-999b-e9f418c558f0.png)
![image](https://user-images.githubusercontent.com/58173221/146309547-35bf049a-33cc-4ef8-83cd-e7a7f69e6626.png)


<a name="item10"></a>

## Herramientas

Para la puesta en marcha usaremos:

- **Raspberry PI.** Primera plataforma de pruebas durantela fase de desarrollo, sustituida más
tarde por VirtualBox.
https://www.raspberrypi.org/
- **Virtual Box**. Segunda plataforma de pruebas, ofrecíamás flexibilidad gracias al sistema
de instantáneas.
https://www.virtualbox.org/
- **Herramientas Git,** especialmente el repositorio Github.Empleado para el control de
versiones, facilidad en el despliegue y consultas mediante la pestaña ``issues``.
https://github.com/
- **Docker y Docker-compose.** Facilitan el lanzamientode los servicios y minimizan los
recursos de hardware.
https://www.docker.com/
- **AWS academy**. Permite el hosting en la nube y elaprendizaje de **AWS CLI**.
https://awsacademy.instructure.com/
- **Visual Studio Code.** Para desarrollo de código webcon diferentes extensiones
especializadas, como _Live Server_ e integración conGit.
https://code.visualstudio.com/
- **Balsamiq** para la creación del wireframe del sitio.
https://balsamiq.com/

<a name="item11"></a>

## Conclusión

Con conocimientos básicos sobre PHP y MySQL se puede diseñar un
portal interactivo dónde el propio visitante pueda participar y guardar registros
independientes en una pequeña base de datos.

### Dificultades e incidencias

Ha sido necesario emplear la herramienta ‘Buscar y reemplazar’ de VScode para localizar
inconsistencias y modificar los nombres de las variables según avanzaba el proyecto.

Lanzar la instancia de AWS fue difícil la primera vez, acostumbrado a la interfaz gráfica.
Tras entender los comandos se necesitó ayuda para saber cuál era el free tier correspondiente al programa _awsacademy_.

Lo más difícil ha sido programar el Panel de Administración y la integración de un buscador interno en Ajax ( Con la tecnología A _jax Live Search_ ,el buscador muestra el resultado de forma instantánea sin necesidad de recargar la página. )

<a name="item12"></a>

## Bibliografía

#### AWS

Sanchez, J. (2021). GitHub - josejuansanchez/practica-aws-cli: Scripts de bash para
experimentar con AWS CLI. Retrieved 12 December 2021, from
https://github.com/josejuansanchez/practica-aws-cli

#### Docker

Sanchez, J. (2021). GitHub - josejuansanchez/iaw-practica-lamp-docker: Aplicación sencilla
para hacer prácticas con el stack LAMP, en el módulo Implantación de Aplicaciones Web del
ciclo formativo de grado superior ASIR. Retrieved 12 December 2021, from
https://github.com/josejuansanchez/iaw-practica-lamp-docker

#### Lenguajes de diseño

HTML Web. (2021). Retrieved 12 December 2021, from
https://www.w3schools.com/html/default.asp

CSS Tutorial. (2021). Retrieved 12 December 2021, from
https://www.w3schools.com/css/default.asp

#### Lenguajes de programación

PHP | Manual de PHP - Manual. (2021). Retrieved 12 December 2021, from
https://www.php.net/manual/es/

Curso PHP | OpenWebinars. (2021). Retrieved 12 December 2021, from
https://openwebinars.net/academia/aprende/curso-php-2019/

PHP y MySQL: Creando sitios dinámicos | OpenWebinars. (2021). Retrieved 12 December
2021, from
https://openwebinars.net/academia/aprende/php-mysql/


AJAX Introduction. (2021). Retrieved 12 December 2021, from
https://www.w3schools.com/xml/ajax_intro.asp

#### MySQL

MySQL | MySQL 8.0 Reference Manual. (2021). Retrieved 12 December 2021, from
https://dev.mysql.com/doc/refman/8.0/en/

[Subir](#top)

[![Unlicense](https://img.shields.io/badge/License-Unlicense-blue.svg)](https://unlicense.org/)
[![made-with-Markdown](https://img.shields.io/badge/Made%20with-Markdown-1f425f.svg)](http://commonmark.org)
