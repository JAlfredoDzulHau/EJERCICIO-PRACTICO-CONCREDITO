# EJERCICIO-PRACTICO-CONCREDITO
PARA EL DESALLO DE LA PRACTICA OCUPE:
-php
-mysl
-ajax
-jquery
-Bootstrap 5
-Xampp V3.2.4

INSTRUCCIONES PARA SU INSTALACIÓN:
Se require clonar o decargar el repositorio desde GITHUB
Seguidamente, copia todos los archivo en su servido web en la el directorio C:\xampp\htdocs(puede ser xampp, wampp, etc)
Ahora, teclea procese a importar la base de datos llamada "clientes" en phpmyadmin
Una vez exportado la base de datos, configura su conexion con la base de datos, eso se realizad desde el archivo conexion.php
Y por ultimo, se dirige a su navegador y teclea: http://localhost/CONCREDITO/home.php y !LISTO!, ya tiene el sistem web funcionando. 

Este es un sistema web que permite CAPTURA DE PROSPECTO, LISTADO DE PROSPECTOS y EVALUACIÓN DEL PROSPECTO.

Permita a los promotores el seguimiento de sus prospectos a ser
clientes, así como una pantalla para el departamento de evaluación de prospectos donde se pueda
visualizar la información del prospecto, donde le permita la autorización o rechazo del mismo.

En primera instancia el sistema web de prospectos contiene un apartado de Bienvenida, como se muestra a continuación:

 ![image](https://user-images.githubusercontent.com/70233261/150287278-b8865329-4528-4237-9af1-3a62f67a6ef2.png)


PANTALLA DE CAPTURA DE PROSPECTO.

En esta pantalla el promotor podrá capturar la información del prospecto, así como los
documentos necesarios para su expediente.

![image](https://user-images.githubusercontent.com/70233261/150287399-14f9282a-40eb-4ef8-a66f-98b4302bf215.png)

Acontinuación vamos a realizar la captura de un nuevo prospecto para que se aprecie la funcionalidad de sistema:
![image](https://user-images.githubusercontent.com/70233261/150287892-9bcbec71-a67f-4369-9e78-22eeaa1de35b.png)

Una vez captura el prospectos comprobamos se se guardo en la  base de datos llamado "clientes".
![image](https://user-images.githubusercontent.com/70233261/150288206-46ac17e0-f55a-4640-9635-a9e73742a541.png)

Ahora nos dirimos el módulo de LISTADO DE PROSPECTOS: En esta pantalla el promotor podrá visualizar a sus prospectos capturados, la información a
mostrar será: Nombre del prospecto, Primero apellido, Segundo apellido y Estatus.
![image](https://user-images.githubusercontent.com/70233261/150288435-40defe2a-1a08-4f48-a045-f9cf1e121238.png)
Seleccionamos a unos de los prospectos de la tabla para observar más a detalle sus datos:
![image](https://user-images.githubusercontent.com/70233261/150288730-e14e1bf1-ca80-437f-8de6-c3c11dac4d26.png)
Seguidamente seleccionamos a un propecto con un estatus RECHAZADO para observa la dierencia entre estatus.
![image](https://user-images.githubusercontent.com/70233261/150288922-675ff9a6-caf3-4f15-be7e-4e244dac0c0b.png)

PANTALLA EVALUACIÓN DEL PROSPECTO

En esta pantalla se podrá visualizar toda la información capturada del prospecto y la opción
Autorizar o Rechazar para autorizar o rechazar al prospecto, así como un campo de observaciones
de rechazo que será obligatorio.
Nos dirigimos al módulo de evaluación 
![image](https://user-images.githubusercontent.com/70233261/150289189-532e88ff-533e-4177-a81b-5ba7c2099f8f.png)

elegimos la acción de EDITAR
![image](https://user-images.githubusercontent.com/70233261/150289318-70c01eb1-0a86-48df-8f8a-1ff1c38b8d01.png)

Ahora bien, vamos a modificar el estatus de unos de los prospectos lo psaremos al estatus RECHAZADO y le agregaremos su observación
![image](https://user-images.githubusercontent.com/70233261/150289680-7ad0ff22-547a-42f2-b7e4-6c7861aa6165.png)

Observamos los cambios en la tabla de evaluación de prospectos.
![image](https://user-images.githubusercontent.com/70233261/150289808-81839934-348d-47a2-a804-fcf0aa4ef3ca.png)

Nos aseguramos que se hayan actulizado el registro en la base de datos, así que nos dirigimos a consultarlo:
![image](https://user-images.githubusercontent.com/70233261/150289970-6c8ce6ca-6dd4-4cbd-b29d-7d1fe1e80c41.png)




