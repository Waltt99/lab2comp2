# Laboratorio 2 – Segundo Cómputo
### Programación Computacional IV

---

## Integrantes

| Nombre | Carné |
|--------|-------|
| Walter Alexander Ramirez Benitez | SMSS082124 |
| Franklin Aldahir Portillo Flores | SMSS011624 |

---

## Estructura del proyecto

lab2/  
│  
├── index.php        (Login)  
├── dashboard.php    (Panel principal)  
├── conexion.php     (Conexión a la base de datos)  
├── logout.php       (Cerrar sesión)  
├── style.css        (Estilos CSS)  
└── laboratorio.sql  (Base de datos)  

---

## Base de datos

La base de datos se llama `laboratorio` y contiene las siguientes tablas:

### Tabla `usuarios`

| Campo     | Tipo         | Descripción                        |
|----------|-------------|----------------------------------|
| id       | INT AI PK    | Identificador único del usuario  |
| username | VARCHAR(50)  | Nombre de usuario                |
| password | VARCHAR(255) | Contraseña encriptada            |

### Tabla `registros`

| Campo        | Tipo         | Descripción                        |
|-------------|-------------|----------------------------------|
| id          | INT AI PK    | Identificador del registro       |
| nombre      | VARCHAR(100) | Nombre del registro              |
| descripcion | TEXT         | Descripción del dato             |
| fecha       | DATETIME     | Fecha de creación automática     |

---

## Preguntas de Análisis

### 1. ¿De qué forma manejaste el login de usuarios?

El login se implementó mediante un formulario donde el usuario ingresa su nombre de usuario y contraseña. Estos datos son enviados al servidor usando el método POST, donde se realiza una consulta a la base de datos para verificar si existe un usuario con esas credenciales.

Si las credenciales son correctas, se inicia una sesión utilizando `$_SESSION`, almacenando el usuario autenticado y permitiendo el acceso al panel principal. En cada página protegida se valida la existencia de esta sesión; en caso contrario, el usuario es redirigido al login.

Este mecanismo funciona porque permite mantener el estado del usuario autenticado durante la navegación, a pesar de que HTTP es un protocolo sin estado.

---

### 2. ¿Por qué es necesario para las aplicaciones web utilizar bases de datos en lugar de variables?

Las variables en PHP solo existen durante la ejecución de una solicitud, por lo que la información se pierde una vez finaliza el proceso. En cambio, las bases de datos permiten almacenar información de forma permanente.

Esto es fundamental en aplicaciones web, ya que los datos deben persistir para ser utilizados posteriormente, como los usuarios registrados o los datos ingresados. Además, las bases de datos permiten organizar la información, realizar consultas eficientes y mantener la integridad de los datos.

---

### 3. ¿En qué casos sería mejor utilizar bases de datos y en cuáles cookies o sesiones?

Las bases de datos se utilizan cuando se requiere almacenar información de forma permanente, como usuarios, registros o historial.

Las sesiones se utilizan para almacenar información temporal del usuario durante su navegación, como el estado de autenticación.

Las cookies se utilizan para guardar información en el navegador del usuario, como preferencias o recordar datos de acceso.

En resumen:
- Base de datos: almacenamiento permanente  
- Sesiones: almacenamiento temporal en el servidor  
- Cookies: almacenamiento temporal en el cliente  

---

### 4. Descripción de tablas y justificación de tipos de dato

Tabla `usuarios`:
- id INT AUTO_INCREMENT: permite identificar de forma única a cada usuario.
- username VARCHAR(50): adecuado para almacenar nombres de usuario de longitud variable.
- password VARCHAR(255): permite almacenar contraseñas encriptadas.

Tabla `registros`:
- id INT AUTO_INCREMENT: identificador único del registro.
- nombre VARCHAR(100): adecuado para textos cortos.
- descripcion TEXT: permite almacenar contenido más extenso.
- fecha DATETIME: registra la fecha y hora exacta del ingreso.

Los tipos de datos fueron seleccionados para optimizar el almacenamiento, permitir flexibilidad en los datos y facilitar su manejo.

---

---

## Credenciales de acceso

| Usuario   | Contraseña |
|----------|-----------|
| admin    | 1234      |
| walter   | 1234      |
| franklin | 1234      |
