# Práctica 4  
## Tópicos Avanzados de Programación  
**Tema:** Componentes y Librerías  

---

## Introducción

En la presente práctica se desarrolló una aplicación web en PHP cuyo objetivo es registrar empleados temporales de una empresa, validar la información ingresada y generar un reporte estructurado.  

Durante el desarrollo se aplicaron componentes y librerías estándar del lenguaje PHP para optimizar el manejo de datos, realizar validaciones correctas y trabajar con formatos como JSON, cumpliendo con las buenas prácticas solicitadas en la actividad.

---

## ¿Qué es una librería estándar?

Una librería estándar es un conjunto de funciones que vienen integradas directamente en el lenguaje de programación, en este caso PHP. Estas funciones permiten realizar tareas comunes como validaciones, manejo de texto, fechas, arreglos y formatos de datos sin necesidad de programarlas manualmente.

El uso de librerías estándar es importante porque:
- Reduce errores
- Hace el código más limpio
- Mejora la seguridad
- Incrementa la eficiencia del programa

---

## Descripción general del sistema

El sistema desarrollado permite:

- Capturar datos de empleados mediante un formulario HTML  
- Validar los datos usando JavaScript y PHP  
- Procesar la información en un archivo diferente al formulario  
- Convertir los datos a formato JSON y luego volverlos a procesar  
- Generar un reporte en una tabla HTML con estadísticas básicas  

### Datos capturados:
- Nombre completo  
- Correo electrónico  
- Edad  
- Fecha de ingreso  
- Área de trabajo  

---

## Funciones utilizadas (librerías estándar)

### Manejo de Strings
- `trim()` → elimina espacios innecesarios  
- `strtolower()` → convierte texto a minúsculas  
- `ucfirst()` → convierte la primera letra en mayúscula  

Estas funciones se usaron para estandarizar el nombre del empleado.

---

### Validación con filtros
- `filter_var()` con `FILTER_VALIDATE_EMAIL`  

Se utilizó para validar que el correo electrónico tenga un formato correcto, evitando validaciones manuales.

---

### Manejo de fechas
- `strtotime()`  
- `time()`  

Estas funciones permiten convertir fechas a formato numérico y calcular los días transcurridos desde la fecha de ingreso hasta la fecha actual.

---

### Manejo de arreglos
- `array`  
- `foreach`  
- `count()`  

Se usaron para almacenar empleados, recorrer los registros, contar el total y realizar cálculos como el promedio de edad.

---

### Uso de JSON
- `json_encode()`  
- `json_decode()`  

Los datos del empleado se convierten a formato JSON y posteriormente se decodifican para volver a ser manipulados como un arreglo en PHP.

---

## ¿Qué es JSON y por qué se usa?

JSON (JavaScript Object Notation) es un formato ligero de intercambio de datos que permite estructurar información de manera clara y ordenada.

Se usa en aplicaciones web porque:
- Es fácil de leer y escribir  
- Es compatible con muchos lenguajes  
- Facilita el intercambio de datos entre sistemas  

En esta práctica, JSON permitió organizar la información del empleado antes de generar el reporte final.

---

## Diferencia entre objeto y arreglo al decodificar JSON

Al usar `json_decode()`:

- Si se decodifica como objeto, se accede a los datos con `->`  
- Si se decodifica como arreglo (usando `true`), se accede con índices `[]`  

En este proyecto se utilizó JSON como arreglo porque facilita su recorrido con `foreach`.

---

## Reporte generado

El sistema genera un reporte en una tabla HTML que incluye:

- Nombre transformado  
- Estado del correo (válido o inválido)  
- Edad  
- Días desde el ingreso  
- Área de trabajo  

Además, se muestran estadísticas como:
- Total de registros procesados  
- Promedio de edad  
- Cantidad de correos inválidos  

---

## Problemas encontrados y soluciones

Uno de los problemas que encontré durante el desarrollo de la práctica fue cómo llevar el conteo de los empleados registrados, ya que inicialmente solo estaba procesando un solo empleado y no sabía cómo obtener estadísticas como el total de registros o el promedio de edad.

Para resolverlo, utilicé un arreglo en PHP donde almacené los datos del empleado ya procesados y después recorrí ese arreglo con un ciclo `foreach`. De esta manera pude contar los registros utilizando la función `count()` y acumular las edades para calcular el promedio.

Otro problema fue la validación del correo electrónico y cómo mostrar el estado del correo en el reporte final. Al principio solo validaba el correo para permitir o no el envío de los datos, pero no sabía cómo indicar si el correo era válido o inválido dentro de la tabla. La solución fue utilizar la función `filter_var()` para validar el correo y guardar el resultado en una variable llamada estado del correo, la cual posteriormente se mostró en el reporte final.

Gracias a estas soluciones, el sistema pudo generar estadísticas completas y mostrar la información de forma clara y estructurada.

---

## Ventajas de utilizar funciones integradas

- Código más corto y legible  
- Menos errores  
- Mayor seguridad  
- Mejor rendimiento  
- Cumplimiento de buenas prácticas de programación  

---

## Conclusión personal

En esta práctica aprendí la importancia de utilizar librerías estándar en PHP para realizar validaciones y procesar información de forma correcta. También comprendí mejor el uso de JSON como formato de intercambio de datos y su utilidad en aplicaciones web.

El desarrollo del proyecto me ayudó a reforzar conocimientos sobre formularios, validaciones en JavaScript y PHP, manejo de arreglos y generación de reportes. A pesar de algunos problemas durante el proceso, logré solucionarlos investigando y probando diferentes opciones, lo cual fortaleció mi aprendizaje.

Considero que esta práctica fue útil para entender cómo se combinan diferentes tecnologías en una aplicación web real y cómo aplicar buenas prácticas de programación.