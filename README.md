# Plataforma Web Inclusiva para la Comunicación y Aprendizaje

## Descripción

Este proyecto busca desarrollar una plataforma web inclusiva para facilitar la comunicación y el aprendizaje de personas con trastornos del lenguaje como el Trastorno del Espectro Autista (TEA), la afasia, la disartria, entre otros. La plataforma estará diseñada con herramientas visuales, auditivas, táctiles y recursos multilingües para promover la autonomía de los usuarios, además de ser accesible para docentes, terapeutas y cuidadores.

## Funcionalidades

La plataforma contará con las siguientes características:

### 1. **Gestión de usuarios y roles**
- Registro de usuarios con roles: **usuario** y **administrador**.
- Inicio de sesión con protección de rutas por middleware.
- Asignación automática de lecciones diarias al iniciar sesión.

### 2. **Tarjetas de comunicación**
- CRUD completo de tarjetas con:
  - Imagen asociada.
  - Frase clave.
  - Traducción por idioma.
  - Audio por idioma (mínimo 1 por idioma).
  - Método de interacción (visual, auditivo, táctil).
  - Código RFID o UUID único (simulado como prototipo).
  - Reproducción automática de audio al visualizar, interactuar con una tarjeta o al buscar por su código único.

### 3. **Multilenguaje y accesibilidad**
- Soporte para múltiples idiomas con Laravel Localization.
- Asociación de archivos de audio por idioma.
- Interfaz visual amigable, con íconos grandes y texto claro.
- Métodos de comunicación sensorial adaptados al usuario (visual, auditivo, táctil).

### 4. **Lecciones y progreso**
- Módulo de lecciones diarias asignadas automáticamente.
- Módulo de lecciones de refuerzo, basado en el uso y rendimiento del usuario.
- Registro del progreso del usuario: tarjetas usadas, lecciones completadas.
- Visualización de avances desde el panel del usuario o del administrador.

### 5. **Métodos de comunicación**
- Registro y gestión de métodos de comunicación sensorial.
- Filtros para ver tarjetas según el canal preferido (visual, auditivo, táctil).
- Adaptación dinámica del contenido según el método seleccionado.

### 6. **API RESTful**
Endpoints para:
- Obtener tarjetas por idioma, método o categoría.
- Registrar uso de tarjetas.
- Ver progreso de usuario.
- Consultar y guardar lecciones.

### 7. **Frontend**
- Accesibilidad visual y auditiva: representación de tarjetas mediante íconos, imágenes grandes, colores contrastantes y audios.
- Interacción directa: el usuario puede tocar una tarjeta, escuchar la frase, acceder a la traducción y ver una representación visual.
- Aprendizaje guiado: las lecciones deben estar presentadas de manera progresiva con botones grandes y retroalimentación visual o sonora.
- Panel administrativo usable para gestionar tarjetas, audios, progreso y asignación de lecciones.

## Requisitos Técnicos

### Backend:
- **Framework**: Laravel 11 con Eloquent ORM y migraciones.
- **Base de datos**: MySQL o PostgreSQL.
- **Autenticación**: PDO y sentencias preparadas.
- **Middleware**: Protección de rutas administrativas.
- **Patrones**: SOLID, Repository Pattern, Strategy Pattern.
- **Multilenguaje**: Laravel Localization.

### Frontend:
- **Tecnologías**: HTML5, CSS3, JavaScript.
- **Accesibilidad**: Implementación de accesibilidad visual y auditiva.

### Herramientas:
- **Gestión de dependencias**: Composer.
- **Almacenamiento de archivos**: Laravel File Storage (opcional para audios).
- **Pruebas de API**: Postman.
- **Control de versiones**: Git/GitHub.

## Requisitos no funcionales
- Estructura modular siguiendo principios de **SOLID**.
- Uso de **autoloader** con Composer PSR-4.
- **Repository Pattern** para la gestión de datos.
- **Validación de datos** con FormRequest.
- Protección de rutas administrativas con middleware de roles.
- Documentación de la API con **Swagger** o **Postman**.


