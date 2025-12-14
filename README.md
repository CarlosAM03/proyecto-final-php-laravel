# Proyecto Final – Curso de PHP con Laravel

Este proyecto corresponde a la entrega final del curso de PHP y fue desarrollado utilizando el framework Laravel, aplicando los conceptos vistos en clase sobre autenticación, manejo de vistas, uso de bases de datos y control de accesos.

---

## 📌 Descripción del proyecto

La aplicación consiste en un sistema web que permite a los usuarios autenticarse de dos maneras:

- Mediante correo electrónico y contraseña
- Mediante una cuenta de Google utilizando OAuth 2.0

El sistema diferencia claramente entre usuarios autenticados y no autenticados, mostrando interfaces distintas para cada caso.

---

## 🎯 Objetivos alcanzados

Durante el desarrollo del proyecto se logró:

- Crear un proyecto base en Laravel
- Implementar autenticación tradicional con usuario y contraseña
- Integrar autenticación con Google usando OAuth
- Proteger rutas mediante middleware de autenticación
- Diseñar una página de bienvenida para usuarios no registrados
- Diseñar un dashboard exclusivo para usuarios autenticados
- Utilizar control de versiones con Git y GitHub

---

## 🔐 Funcionalidades principales

### Autenticación de usuarios
Los usuarios pueden registrarse e iniciar sesión mediante un formulario tradicional utilizando correo electrónico y contraseña.

### Autenticación con Google (OAuth)
Se integró el servicio de Google OAuth utilizando Laravel Socialite, permitiendo a los usuarios iniciar sesión de forma segura con su cuenta de Google.

### Control de acceso
El acceso al dashboard está protegido mediante middleware, evitando que usuarios no autenticados accedan a áreas restringidas del sistema.

### Vistas diferenciadas
- Los usuarios no autenticados visualizan una página de bienvenida moderna y responsiva.
- Los usuarios autenticados acceden a un dashboard personalizado.

---

## 🛠️ Tecnologías utilizadas

- PHP 8.2
- Laravel 12
- MySQL (XAMPP)
- Laravel Breeze
- Laravel Socialite
- Bootstrap 5
- Git y GitHub

---

## 📂 Estructura general del proyecto

- `routes/web.php` → Definición de rutas del sistema
- `resources/views` → Vistas de la aplicación
- `config/services.php` → Configuración de servicios externos (Google OAuth)
- `.env` → Variables de entorno (excluido del repositorio)

---

## 📚 Aprendizajes obtenidos

Este proyecto permitió reforzar conocimientos sobre:

- Desarrollo de aplicaciones web con Laravel
- Implementación de sistemas de autenticación
- Integración de servicios externos mediante OAuth
- Uso de middleware para seguridad
- Buenas prácticas en el uso de Git y GitHub

---

## 👨‍💻 Autor

**Carlos Benjamín Armenta Márquez**  
Proyecto académico – Curso de PHP con Laravel
