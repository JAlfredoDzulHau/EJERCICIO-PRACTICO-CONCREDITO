# Sistemas Web para el Seguimiento de Prospectos a Ser Clientes  ![Status badge](https://img.shields.io/badge/status-%20terminado-green)
## Comenzando 🚀
✨ Sistema web que permita a los promotores el seguimiento de sus prospectos a ser
clientes, así como una pantalla para el departamento de evaluación de prospectos donde se pueda
visualizar la información del prospecto, donde le permita la autorización o rechazo del mismo.
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150862805-1e31a953-d947-4d33-91c3-8b28247f0eec.png)

### Requisitos 📋
1. Xampp V3.2.4
3. Bootstrap 5
4. PHP
5. MYSQL
6. jQuery
7. Ajax

### Instalación 🔧
1. Clona este proyecto.
2. Ve a la carpeta
`C:\xampp\htdocs`
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150866937-076b7e37-6119-4c45-b9fc-0e642ded9d55.png)

3. Crea una Carpeta llamada CONCREDITO y pega todos los Archivos dentro de la carpeta
`C:\xampp\htdocs\CONCREDITO`
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150867061-28147b34-ed92-44d6-b627-70afd09bc6fc.png)

4. Crear base de datos en ``phpmyadmin`` llamado "concredito"
<BR></BR>
![screencapture-localhost-phpmyadmin-index-php-2022-01-24-15_24_41](https://user-images.githubusercontent.com/70233261/150868665-6b386e2a-b593-4aaa-8748-b86063177207.png)

6. Importar ``clientes.sql`` a la base de datos recién creada en el paso 4
<BR></BR>
![screencapture-localhost-phpmyadmin-index-php-2022-01-24-15_36_00](https://user-images.githubusercontent.com/70233261/150869078-6a88eaac-9121-482b-a19e-0782bbf1b3ce.png)

8. Configurar la conexión a la base de datos en `conexion.php` (está dentro de la carpeta config)
<BR></BR>
![conexion a la base de datos](https://user-images.githubusercontent.com/70233261/150870916-9bff7d96-6b7a-465f-b22d-2b5a6c988627.png)


10. Corre el ambiente local, ingresando en tu navegador de preferencia y teclear
`http://localhost/CONCREDITO/`
## 🛠 Despliegue
1. Una vez instalado todo lo anterior, podemos ver nuestro proyecto funcionando
<BR></BR>
``MÓDULO HOME``
<BR></BR>
_Este apartado solo muestra información de Bienvenida, y todo lo relacionado con la empresa CONCRÉDITO._
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150872525-32bed362-43ca-4947-b2f1-a7ca11310eee.png)

<BR></BR>
``PANTALLA CAPTURA DE PROSPECTO``
<BR></BR>
_En este módulo el promotor podrá capturar la información del prospecto, así como los
documentos necesarios para su expediente._
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150873365-6b415d34-9bb5-4d28-bb44-3c0741592d0c.png)
<BR></BR>
_A continuación, vamos a realizar la captura de un nuevo prospecto para apreciar la funcionalidad del sistema web☑️_
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150287892-9bcbec71-a67f-4369-9e78-22eeaa1de35b.png)
<BR></BR>
_Una vez captura el prospecto comprobamos que se haya guardo en la tabla llamado "clientes"☑️_
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150288206-46ac17e0-f55a-4640-9635-a9e73742a541.png)
<BR></BR>
_``Opción Salir:`` Saldrá de la pantalla de captura de prospectos ningún dato será guardado, se
le avisará al usuario por medio de un mensaje de advertencia que si sale perderá toda la
captura._
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150875126-d8cb8bc6-9c76-47af-9610-e2cef95ac45e.png)
<BR></BR>
_Al darle ``Aceptar`` nos se guardan los datos en la base de datos y se redirecciona a Home._
<BR></BR>
``PANTALLA LISTADO DE PROSPECTOS``
<BR></BR>
_En este módulo el promotor podrá visualizar a sus prospectos capturados, la información a
mostrar será:_ 

1. Nombre del prospecto 
2. Primero apellido 
3. Segundo apellido  
4. Estatus.
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150288435-40defe2a-1a08-4f48-a045-f9cf1e121238.png)
<BR></BR>
_Seleccionamos en ``VER`` a unos de los prospectos de la tabla para observar más a detalle sus datos:_
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150288730-e14e1bf1-ca80-437f-8de6-c3c11dac4d26.png)
<BR></BR>
_Seguidamente seleccionamos a un prospecto con un estatus ``RECHAZADO`` para observa la diferencia entre estatus._
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150288922-675ff9a6-caf3-4f15-be7e-4e244dac0c0b.png)
<BR></BR>
``PANTALLA EVALUACIÓN DEL PROSPECTO``
<BR></BR>
_En esta pantalla se podrá visualizar toda la información capturada del prospecto y la opción
``Autorizar`` o ``Rechazar``, así como un campo de observaciones de rechazo que será obligatorio._
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150289189-532e88ff-533e-4177-a81b-5ba7c2099f8f.png)
<BR></BR>
_Elijamos la acción de ``EDITAR``_
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150289318-70c01eb1-0a86-48df-8f8a-1ff1c38b8d01.png)
<BR></BR>
_Ahora bien, vamos a modificar el estatus de unos de los prospectos lo pasaremos al estatus RECHAZADO y le agregaremos su observación_
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150289680-7ad0ff22-547a-42f2-b7e4-6c7861aa6165.png)
<BR></BR>
_Observamos los cambios en la tabla de evaluación de prospectos._
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150289808-81839934-348d-47a2-a804-fcf0aa4ef3ca.png)
<BR></BR>
_Nos aseguramos de que se hayan actualizado el registro en la base de datos, así que nos dirigimos a consultarlo:_
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/150289970-6c8ce6ca-6dd4-4cbd-b29d-7d1fe1e80c41.png)

## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles

## Autores ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Jose Alfredo Dzul Hau** - *Trabajo Inicial*
* **Jose Alfredo Dzul Hau** - *Documentación*
---
⌨️ con ❤️ por [JAlfredoDzulHau](https://github.com/JAlfredoDzulHau) 😊
