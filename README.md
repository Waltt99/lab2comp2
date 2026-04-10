# Laboratorio 2 – Programación Computacional IV

## Descripción del proyecto

El presente proyecto consiste en el desarrollo de una aplicación web utilizando PHP y MySQL, la cual permite implementar un sistema de autenticación de usuarios y registro de datos.

El sistema permite a los usuarios iniciar sesión, ingresar información mediante formularios y visualizar los datos almacenados en una base de datos de forma organizada.

---

## Tecnologías utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP (entorno local)
- phpMyAdmin
- Git y GitHub

---

## Funcionalidades del sistema

- Inicio de sesión de usuarios
- Validación de credenciales
- Uso de sesiones para control de acceso
- Registro de datos en la base de datos
- Visualización de datos en una tabla
- Cierre de sesión

---

## Usuarios de prueba

El sistema cuenta con los siguientes usuarios para iniciar sesión:

| Usuario   | Contraseña |
|----------|-----------|
| admin    | 1234      |
| walter   | 1234      |
| franklin | 1234      |

---

## Estructura del proyecto

lab2/
│
├── index.php        # Página de login  
├── dashboard.php    # Panel principal  
├── conexion.php     # Conexión a la base de datos  
├── logout.php       # Cierre de sesión  
├── style.css        # Estilos  
└── laboratorio.sql  # Base de datos exportada  

---

## Base de datos

El sistema utiliza una base de datos llamada `laboratorio`, la cual contiene las siguientes tablas:

### Tabla: usuarios

- id (INT, clave primaria, autoincremental)
- username (VARCHAR)
- password (VARCHAR)

### Tabla: registros

- id (INT, clave primaria, autoincremental)
- nombre (VARCHAR)
- descripcion (TEXT)
- fecha (DATETIME)

---

## Instalación y ejecución

1. Clonar el repositorio:

git clone https://github.com/TU_USUARIO/lab2-php-mysql.git

2. Colocar la carpeta del proyecto en el directorio `htdocs` de XAMPP.

3. Iniciar los servicios de Apache y MySQL desde XAMPP.

4. Crear una base de datos con el nombre `laboratorio` en phpMyAdmin.

5. Importar el archivo `laboratorio.sql`.

6. Verificar la configuración del archivo `conexion.php`.

7. Acceder al sistema desde el navegador:

http://localhost/lab2

---

## Uso del sistema

1. Iniciar sesión con un usuario válido.
2. Acceder al panel principal.
3. Registrar datos mediante el formulario.
4. Visualizar los datos en la tabla.
5. Cerrar sesión.

---

## Manejo de sesiones

El sistema utiliza sesiones en PHP (`$_SESSION`) para mantener la autenticación del usuario durante la navegación, evitando accesos no autorizados a las páginas protegidas.

---

## Validaciones implementadas

- Validación de campos vacíos
- Verificación de credenciales
- Restricción de acceso sin sesión activa

---

## Integrantes

- Integrante 1: Walter Alexander Ramirez Benitez
- Integrante 2: Franklin Aldahir Portillo Flores

---

## Conclusión

Este laboratorio permitió aplicar conocimientos fundamentales de desarrollo web, incluyendo el uso de PHP, conexión con bases de datos y manejo de sesiones.

Se logró implementar un sistema funcional que cumple con los requisitos planteados, permitiendo la autenticación de usuarios y el almacenamiento persistente de información.