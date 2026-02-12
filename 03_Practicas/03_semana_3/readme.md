## Descripción del sistema ##
Este sistema implementa un Formulario de Preferencias Personales que permite al usuario seleccionar su animal favorito, las plataformas de redes sociales que utiliza y su rango de edad mediante un formulario web.  
El formulario está desarrollado con HTML y CSS para la estructura y el diseño visual, JavaScript para la validación del lado del cliente y PHP para el procesamiento y validación de los datos en el servidor.  
Los datos se envían mediante el método POST al archivo procesar.php, donde se verifican antes de ser mostrados al usuario, garantizando que la información esté completa y correctamente estructurada.  

## ¿Qué valida JavaScript? ##
JavaScript se encarga de la validación del lado del cliente, verificando que el usuario complete correctamente el formulario antes de enviarlo.  
En este sistema valida que:   
*Se seleccione un animal favorito.   
*Se elija al menos una plataforma de red social.  
*Se seleccione un rango de edad.  
*Evita el envío del formulario si falta algún dato, mostrando mensajes de alerta.  
## ¿Qué valida PHP?## 
PHP realiza la validación del lado del servidor, asegurando que los datos recibidos sean correctos y seguros, incluso si JavaScript es deshabilitado o alterado.
En este sistema valida que:  
*El animal seleccionado no esté vacío.  
*Las plataformas seleccionadas sean un arreglo válido.  
*El rango de edad haya sido enviado.  
*Se controlen y muestren los errores detectados al usuario.  

## ¿Por qué JavaScript y PHP no deben mezclarse? ##
JavaScript y PHP cumplen funciones distintas:  
*JavaScript se ejecuta en el navegador y mejora la experiencia del usuario.  
*PHP se ejecuta en el servidor y garantiza la seguridad de los datos.  
*Mezclarlos provoca código desordenado, difícil de mantener y con posibles fallos de seguridad.  
*Separarlos permite un sistema más claro, seguro y fácil de escalar.  