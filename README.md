# Inspector de SAPI de PHP
Un Server Application Programming Interface (SAPI) es una interfaz de programación de aplicaciones proveida por el servidor web, con el propósito de ayudar a los desarrolladores a extender las capacidades del servidor. 

Para poder entregar páginas web, PHP necesita una conexión con un servidor web, con la línea de comandos o con otra aplicación. Esa conexión es la SAPI. Recibe los datos de la petición, los pasa a la Zend Engine, y después devuelve la salida.

## Cómo ejecutar
Clona este repositorio y en tu terminal navega hacia el directorio. Después, haz cualquiera de los siguientes:

### Servidor web desde tu terminal
Ejecuta `php -S localhost:<puerto>` e ingresa a localhost con el puerto especificado en tu navegador web. En la página, deberías ver la SAPI _cli-server_. Esto demuestra un uso del SAPI del web server integrado con tu instalación de PHP.

### Index.html generado con PHP
Ejecuta `php index.php > index.html` y haz doble clic en el archivo html generado. En la página, deberías ver la SAPI _cli_. Esto demuestra un uso de PHP ejecutado desde tu terminal.

### Accediendo con entorno de desarrollo (ej. XAMPP)
Mueve tu clon del repositorio dentro de htdocs e inicia el servicio Apache de XAMPP. Una vez listo, accede a la ruta en tu navegador (por ejemplo, coloqué mi clon dentro de una carpeta _dev_ y la ruta es _localhost/dev/checkphp_). Si ves _apache2handler_ en SAPI actual, esto demuestra un uso de PHP compilado como un modulo de Apache.

### Accediendo con entorno contenerizado (ej. Docker)
Ejecuta `docker compose up --build` y espera a que se terminen de construir las imagenes y ejecutar los contenedores de `php-fpm` y `httpd`. Una vez listo, accede a _localhost:8000_ en tu navegador. Deberías observar en la sección SAPI actual la etiqueta _fpm-fcgi_. Esto demuestra un uso de PHP con el servicio FastCGI Process Manager.

> [!NOTE]
> Puedes modificar el puerto definido en la sección de _apache_ dentro del archivo _docker-compose.yaml_ para abrir localhost en el puerto que necesites.