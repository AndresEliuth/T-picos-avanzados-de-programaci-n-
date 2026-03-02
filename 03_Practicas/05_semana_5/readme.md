# Práctica 5  
## Desarrollo de Componentes Reutilizables  
### Tema: Librería Propia y Conexión a Base de Datos  

---

## Introducción

En la presente práctica se desarrolló un mini-sistema web en PHP que permite registrar y consultar empleados dentro de una base de datos MySQL.

El objetivo principal fue diseñar e implementar una librería definida por el usuario e integrarla dentro de un sistema modular que incluye:

- Conexión a base de datos  
- Separación de responsabilidades  
- Reutilización de componentes  

Durante el desarrollo se aplicaron principios como:

- Organización estructurada del código  
- Uso de clases  
- Conexión mediante PDO  
- Validaciones centralizadas en una librería propia  

---

## Propósito General

Diseñar e implementar una librería definida por el usuario e integrar sus componentes en un mini-sistema conectado a una base de datos, aplicando principios de modularidad, reutilización y organización estructurada del código.

---

## Competencia Desarrollada

Desarrollo e integración de componentes reutilizables mediante librerías propias, aplicando separación de responsabilidades y conexión básica a base de datos en aplicaciones web.

---

## Descripción General del Sistema

El sistema desarrollado permite:

- Capturar datos de empleados mediante un formulario HTML  
- Validar los datos utilizando una librería propia  
- Conectarse a una base de datos MySQL mediante PDO  
- Insertar registros en la tabla `empleados`  
- Consultar todos los empleados registrados  
- Mostrar una tabla dinámica con estadísticas  

### Datos capturados

- Nombre  
- Correo electrónico  
- Edad  
- Fecha de ingreso  
- Puesto  

---

# Librería Definida por el Usuario

## Nombre de la librería
`EmpleadoHelper`

Ubicación:
```
libreria/EmpleadoHelper.php
```

---

## Métodos incluidos

### `validarCorreo($correo)`
Valida que el correo tenga formato correcto.

### `formatearNombre($nombre)`
Convierte el nombre a mayúsculas y elimina espacios innecesarios.

### `calcularAntiguedad($fecha)`
Calcula los días transcurridos desde la fecha de ingreso hasta la fecha actual.

### `validarEdad($edad)`
Verifica que la edad esté dentro de un rango válido.

---

## ¿Cómo se importa la librería?

```php
require_once "libreria/EmpleadoHelper.php";
```

## ¿Cómo se invoca?

```php
EmpleadoHelper::validarCorreo($correo);
EmpleadoHelper::formatearNombre($nombre);
EmpleadoHelper::calcularAntiguedad($fecha);
EmpleadoHelper::validarEdad($edad);
```

---

# Componente de Conexión a Base de Datos

Archivo:
```
config/Conexion.php
```

## Contiene:

- Clase `Conexion`
- Método estático `conectar()`
- Uso de PDO
- Manejo básico de errores con `try-catch`

### Ejemplo de uso

```php
require_once "config/Conexion.php";

$conexion = Conexion::conectar();
```

---

# Base de Datos Utilizada

Motor: MySQL  
Base de datos: `empresa_db`

## Tabla: `empleados`

| Campo           | Descripción |
|---------------|------------|
| id | Identificador único |
| nombre | Nombre del empleado |
| correo | Correo electrónico |
| edad | Edad |
| fecha_ingreso | Fecha de ingreso |
| puesto | Puesto laboral |
| fecha_registro | Fecha de registro en sistema |

---

# Funcionamiento del Sistema

El sistema cumple con los siguientes requisitos:

- Validar datos usando la librería creada  
- Insertar datos en la base de datos  
- Consultar todos los empleados  
- Mostrar tabla dinámica  
- Calcular estadísticas como:
  - Total de empleados  
  - Promedio de edad  
  - Empleado con mayor antigüedad  

---

# Diferencia entre Librería Estándar y Librería Definida por el Usuario

| Librería Estándar | Librería Definida por el Usuario |
|-------------------|----------------------------------|
| Viene incluida en PHP (ej. PDO, DateTime) | Es creada por el programador |
| Uso general | Uso específico del proyecto |
| No se modifica | Se adapta a necesidades del sistema |

---

# Ventajas de usar Componentes Reutilizables

- Permiten reutilizar código en otros proyectos  
- Mejoran la organización del sistema  
- Facilitan mantenimiento  
- Aplican separación de responsabilidades  
- Reducen duplicación de código  

---

# Problemas Encontrados y Soluciones

### Centralización de Validaciones
Uno de los principales retos fue evitar colocar validaciones directamente en `procesar.php`, ya que la práctica exige que todas las validaciones se realicen mediante la librería propia.

Solución:  
Se centralizó toda la lógica dentro de la clase `EmpleadoHelper` y únicamente se invocan sus métodos desde el archivo de procesamiento.

---

### Conexión con PDO
Otro reto fue implementar correctamente la conexión mediante PDO y manejar errores básicos.

Solución:  
Se utilizó un bloque `try-catch` dentro de la clase `Conexion`, garantizando una conexión segura y estructurada.

---

### Cálculo de Estadísticas
Fue necesario calcular estadísticas sin mezclar demasiado código SQL con HTML.

Solución:  
Los cálculos se realizaron en PHP antes de imprimir la tabla en la vista.

---

# Conclusión Personal

En esta práctica comprendí la importancia de crear componentes reutilizables y organizar correctamente un proyecto web.

Aprendí que una librería propia permite centralizar validaciones y lógica de negocio, lo que mejora la claridad del sistema y facilita futuras modificaciones.

También reforcé mis conocimientos en:

- Conexión a base de datos con PDO  
- Consultas SQL  
- Separación de archivos  
- Buenas prácticas de programación  

Considero que esta práctica fue importante porque simula el desarrollo de un sistema real donde no solo se programa, sino que se estructura correctamente el proyecto siguiendo principios profesionales.