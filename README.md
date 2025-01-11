# Aquasoluciones

Aquasoluciones es una plataforma para gestionar servicios relacionados con la distribución y administración del agua. La página incluye funcionalidades de presentación de la empresa, registro de información clave, y gestión de elementos asociados al suministro de agua. Este proyecto está diseñado para ejecutarse en un entorno local mediante **XAMPP**.

## Características principales

1. **Página de presentación:**
   - Secciones informativas como *Acerca de*, *Inicio*, y *Servicios*.
   - Uso de HTML y CSS para un diseño visual atractivo.
   - Recursos multimedia, incluyendo imágenes y banners para mejorar la experiencia del usuario.

2. **Gestión de información:**
   - Sistema de registro administrativo implementado en PHP.
   - Base de datos MySQL para almacenar datos esenciales de la empresa.

3. **Estructura organizada:**
   - Separación de archivos CSS, JS y multimedia para un mantenimiento eficiente.
   - Archivo SQL para configurar la base de datos rápidamente.

## Requisitos del sistema

Para ejecutar correctamente el proyecto, se necesita:
- **XAMPP** con el módulo Apache y MySQL habilitados.
- Un navegador web compatible con HTML5, CSS3 y JavaScript.

## Instalación y configuración

1. **Instalar XAMPP:**
   - Descarga e instala [XAMPP](https://www.apachefriends.org/).
   - Asegúrate de que los módulos Apache y MySQL estén activos.

2. **Configurar el proyecto:**
   - Descarga o clona este repositorio en la carpeta `htdocs` de XAMPP.
   - Importa el archivo SQL ubicado en `aquasoluciones/aquasoluciones.sql` desde phpMyAdmin para crear la base de datos necesaria.

3. **Acceder a la aplicación:**
   - Abre tu navegador y accede a `http://localhost/aquasoluciones`.

## Tecnologías utilizadas

- **Frontend:**
  - HTML5
  - CSS3
  - JavaScript (funciones básicas y efectos)

- **Backend:**
  - PHP 7.x para la lógica del registro y conexión con la base de datos.

- **Base de datos:**
  - MySQL con un archivo `.sql` para configuración inicial.

## Estructura del proyecto

aquasoluciones/ ├── acerca.html           # Página de "Acerca de" ├── inicio.html           # Página principal ├── servicios.html        # Página de servicios ├── registroadmin.php     # Lógica para el registro administrativo ├── aquasoluciones.sql    # Archivo de configuración de la base de datos ├── css/                  # Archivos de estilos y scripts │   ├── abririmg.js │   ├── acerca.css │   ├── disenore.css │   ├── estilos.css │   └── servicios.css ├── imagenes/             # Recursos multimedia │   ├── logo.jpeg │   ├── banner1.jpg │   └── ... (otros recursos visuales)

## Funcionalidades técnicas

- **Registro administrativo:**
  - Utiliza `registroadmin.php` para capturar y guardar datos en la base de datos.
  - Validaciones básicas para un correcto manejo de la información.

- **Base de datos:**
  - Estructura inicial proporcionada en el archivo `aquasoluciones.sql`.
  - Incluye tablas necesarias para gestionar la información empresarial.

- **Buenas prácticas:**
  - Código organizado y modular.
  - Uso de comentarios en los scripts para facilitar el mantenimiento.

## Créditos

Desarrollado por **Daniel Esteban Alegría Zamora** como parte de un proyecto personal para la gestión de servicios del agua.
