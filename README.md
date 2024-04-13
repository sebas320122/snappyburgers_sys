# SnappyBurgers System | V 1.0 
-----
Sistema web desarrollado para el restaurante de comida rapida "SnappyBurgers"

#### Descripcion del sistema
-----
Este sistema tiene como proposito manejar las siguientes operaciones del negocio:
- Tomar ordenes
- Control de ordenes
- Administrar la disponibilidad de productos
- Administrar solicitudes de productos a proveedores
- Administrar items del menu
- Ver ingresos del dia actual asi como de los pasados 7 dias
- Administrar empleados

#### Requisitos previos
-----
- Instalar NodeJS https://nodejs.org/en/download/current
- Instalar Composer https://getcomposer.org/download/
- Instalar Vscode https://code.visualstudio.com/download

#### Instalacion y ejecución
-----
- Descargar este proyecto en .zip
- Extraer en escritorio
- Mover proyecto a la carpeta C:\xampp\htdocs
- Abrir Vscode y abrir el proyecto "snappyburgers_sys"
- Abrir terminal y ejecutar el siguiente comando:
> php artisan migrate

- Despues aparecera un mensaje informandonos si queremos crear las tablas, a lo que deberemos introducir lo siguiente en consola:
> y

- Una vez creada las BD introducir el siguiente comando (llena las tablas con datos, siendo el del usuario administrador el que esta habilitado por defecto):
> php artisan migrate:fresh --seed

- Para ejecutar el sistema se introduce en consola lo siguiente:
> php artisan serve

- Ingrese a http://127.0.0.1:8000/ingresar
- Introduzca el correo y contraseña proporcionados en database\seeders\EmpleadoSeeder.php para poder ingresar
- Para apagar el sistema seleccione la consola y presione ctl + c

##### Notas
- Cambie todos los datos de la cuenta "Gerente local" en cuanto ingrese al sistema
- Para poder realizar ordenes ocupa agregar los items deseados desde la opcion "Items" para que estos aparezcan en la opción "Cobrar"
- Solo los empleados con rol "Gerente" puden admnistrar tablas de registros y ver las ventas y gastos

##### Adicional: Contar con datos al arrancar de 0 el sistema
- Si quiere introducir items del menu de manera predeterminada 
  - Asegurarse que el sistema este apagado    
  - Vaya a database\seeders\ItemSeeder.php
  - Descomente el codigo
  - Cambie los items siguiendo el formato presentado
  - Introduzca en consola: php artisan migrate:fresh --seed
  - Vuelva a ejecutar el sistema
- Si quiere visualizar el programa con datos antes de su implementacion
  - Asegurarse que el sistema este apagado
  - Vaya a database\seeders\RegistrosMuestraSeeder.php
  - Descomente el codigo
  - Cambie los registros siguiendo el formato presentado
  - Introduzca en consola: php artisan migrate:fresh --seed
  - Vuelva a ejecutar el sistema

#### Instrucciones de uso
-----
##### Tomar ordenes 
- Seleccionar opción "Cobrar"
- Seleccionar el campo "buscar" e introducir el nombre del item
- Presionar el boton de agregar para enlistarlo 
- En el recuadro Orden indicar en el campo "mesa" el numero de mesa del cliente y en el campo "Cantidad" indicar el numero correspondiente
- Una vez listo pulsar boton "Siguiente"
- En la vista Ticket seleccionar "Confirmar" o "Cancelar" segun lo indique el cliente y luego presionar el boton "Listo"

##### Control de ordenes
- Seleccionar la opción "Ordenes"
- Aqui se visualisan las ordenes que recientemente fueron tomadas, siendo el orden de la fila de mas viejo a mas nuevo
- Cuando la orden del cliente este hecha seleccionar la opcion "Preparado" lo que hara que deje de aparecer en esa vista

##### Administrar tablas de registros 
- Seleccionar opción segun la tabla que quiera manejar (Disponibilidad, Proveedores, Items,  Empleados)
- En la vista inicial podra ver todos los registros
- Para agregar un registro:
  - Selccionar boton "Agregar"
  - Llenar todos los campos de datos
  - Pulsar el boton "Agregar"
- Para editar un registro:
  - Selccionar el boton "Ver" del registro que desee editar
  - Seleccionar el boton "Editar"
  - Cambiar los datos que desee
  - Cuando haya finalizado, presione el boton "Editar"
- Para eliminar un registro:
  - Seleccionar el boton "Ver" del registro que desee eliminar
  - Seleccionar el boton "Eliminar"
##### Ver ingresos
- Seleccionar la opción "Ingresos"
- En la vista inicial se veran las ganancias del dia, asi como las de hace 7 dias
- Para ver las ventas
  - Seleccionar boton "Ventas"
  - En el recuadro superior se muestran las ventas del dia actual, en el recuadro inferior se muestran las de los pasados 7 dias.
- Para ver los gastos
  - Seleccionar boton "Gastos" 
  - En el recuadro superior se muestran los gastos del dia actual, en el recuadro inferior se muestran los de los pasados 7 dias.

#### Registro de actualizaciones
-----

- 11/03 - 20/03 | v 0.1
  - Se crearon los archivos del proyecto
  - Se integraron los layouts en carpeta views
  - Se realizo la funcion para registrar los pedidos 
- 20/03 | v 0.2
  - Realizar despliegue de las ordenes confirmadas en vista ordenes
- 21/03 | v 0.3
  - Habilitar funcion de filltro para tabla
- 21/03  - 31/03 | v 0.4
  - Se realizo las funciones de la vista disponibilidad
- 31/03 - 02/04 | v 0.5
  - Se realizo las funciones de la vista proveedores
- 02/04 - 05/04 | v 0.6
  - Se realizo las funciones de la vista Items
- 05/04 - 08/04 | v 0.7
  - Se realizo las funciones de la vista Ingresos
- 08/04 - 09/04 | v 0.8
  - Se realizo las funciones de la vista Empleados
- 09/04 - 12/04 | v 1.0
  - Se implemento el login asi como los permisos para realizar operaciones