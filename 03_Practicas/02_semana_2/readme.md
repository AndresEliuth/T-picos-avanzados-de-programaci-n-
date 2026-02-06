## Descripción del sistema ##
Este sistema es un registro sencillo de usuarios que permite capturar datos personales a través de un formulario web.  
La información ingresada se envía al servidor usando PHP, donde se verifica que los datos sean correctos antes de aceptarlos.  
El sistema muestra mensajes si hay errores en los campos y un mensaje de confirmación cuando el registro es correcto.  

## Eventos que se manejan ##
1.-Envío del formulario al presionar el botón Registrar.  
2.-Recepción de los datos enviados mediante el método POST en el archivo procesar.php.  
3.-Validación de la información en el servidor antes de procesarla.  
4.-Retorno al formulario mostrando mensajes de error o de registro exitoso.  
5.-Uso de sesiones para mantener los datos y errores entre cada envío del formulario.  

## Validación implementadas ##
*El nombre es obligatorio y debe tener al menos 3 caracteres.  
*El correo es obligatorio y debe tener un formato válido.  
*La edad es obligatoria, debe ser numérica y estar entre 15 y 99 años.  
*La contraseña es obligatoria y debe tener un mínimo de 6 caracteres.  
*La confirmación de contraseña debe coincidir con la contraseña original.  
*Se evita la ejecución de código malicioso al mostrar la información ingresada por el usuario.  