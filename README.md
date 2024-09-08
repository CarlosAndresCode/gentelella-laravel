<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Guía para instalar el proyecto
Este es un proyecto libre, basado en laravel 11 que implementa la plantilla de administracion [Gentelella](https://colorlib.com/polygon/gentelella/). sientase libre de ajustarlo o mejorarlos a su gusto.

1. Descarga el repositorio
2. Descromprime la carpeta dentro del directorio de Valet/Laragon
3. Renombra la carpeta (Opcional)
4. Entra a la carpeta desde la terminal `cd directorio/de/la/carpeta`
5. Copia el contenido del archivo `.env.example` a un nuevo archivo llamado `.env`
    * Si estás en Liunx o Mac puedes ejecutar el comando: `cp .env.example .env`
6. Crea una base de datos para el proyecto
7. Modifica las variables de conexión del nuevo archivo `.env`
    * Define los datos de conexión
        * DB_DATABASE=
        * DB_USERNAME=
        * DB_PASSWORD=
    * Define las credenciales de [Mailtrap](https://mailtrap.io/) (Opcional)
    * Define las credenciales de [Sendgrid](https://sendgrid.com/) (Para enviar emails en producción)
8. Ejecuta `composer install`
9. Ejecuta `php artisan key:generate`
10. Ejecuta `php artisan migrate`
13. Abre la aplicación en el navegador

