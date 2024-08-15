# Curso de PHP y MYSQL - I #
En este curso se aprendido las variables que se pueden manejar en php, condicionales como el IF y SWITCH, bucles FOR y WHILE, y la conexion a una base de datos de MYSQL.
Las carpetas 2-4 contienen el contenido del curso tanto ejemplos como ejercicios.

## TRABAJO FINAL ##

#### Descripción del Proyecto y Capturas de la Ejecución ###
Se creó la base de datos y se realizaron las respectivas pruebas.
Base de datos: bd_zoologico, 
Tabla: ficha_tecnica:
 Codigo: 			integer,
 Nombre convencional:	varchar(40),
 Nombre científico: 		varchar(40),
 Clasificación: 			varchar(25),
 Familia:			varchar(25),
 Alimentación:			varchar(25),
 Peso:				integer,
 Longitud:			integer,
 Longevidad:			integer.

Agregando la columna Codigo para tener un mejor control de los registros.

![Captura de pantalla 2024-08-14 223358](https://github.com/user-attachments/assets/f5fecbf9-bb75-43ad-a4b1-f22d1289668a)

![Captura de pantalla 2024-08-14 212603](https://github.com/user-attachments/assets/7a1b639f-2fd8-4735-9ac4-8991bc210788)


Al ingresar al proyecto tendremos la siguiente vista en donde podemos ver los botones en el header los cuales son de “Formulario de Registro” (Nos permite agregar registros a la base de datos), “Ver Nómina” (Nos permite visualizar un tabla con todos los registros) y “Buscar” (Nos permite buscar según un atributo ej Clasificación).

![Captura de pantalla 2024-08-14 212833](https://github.com/user-attachments/assets/4ddddb2b-c1e2-4a8e-9cd1-8f06f2b216e0)


Ahora procedemos a ingresar los datos en el “Formulario de Registro” con la ayuda de la imagen y presionamos el botón “Registrar” para guardar los datos en la base de datos, el botón “Borrar” es para vaciar el formulario.

![Captura de pantalla 2024-08-14 213156](https://github.com/user-attachments/assets/10ba5e1b-ae3f-4b2a-8b66-9e707b5d7740)

![Captura de pantalla 2024-08-14 213220](https://github.com/user-attachments/assets/c17bf957-3e8a-4373-98ce-88bdbb06cd96)

Una vez presionado el botón “Registrar”, no vamos a hacer clic en “Ver Nómina” para visualizar la tabla con los datos y ver el registro que hicimos hace un momento.

![Captura de pantalla 2024-08-14 213346](https://github.com/user-attachments/assets/24e7802e-330a-400f-8f5a-6e4c9f7fc362)

Estando en la vista de “Ver Nómina” podemos hacer dos funciones de “Actualizar” y “Eliminar” por registro  presionando en la imagenes.
Primero la Actualización: Una vez haciendo click en la imagen nos enviará a un “Formulario de Actualización” en donde podemos hacer los cambios necesarios.

![Captura de pantalla 2024-08-14 213518](https://github.com/user-attachments/assets/733352d0-67a3-4c7f-9eff-20e996574c68)

![Captura de pantalla 2024-08-14 213609](https://github.com/user-attachments/assets/5f9547ea-a97a-4bcf-a8ad-4499fd4958c2)

![Captura de pantalla 2024-08-14 213728](https://github.com/user-attachments/assets/cffd15ec-dabb-40ce-baea-1a6eb794115c)


Una vez hacemos click en botón “Actualizar” nos enviará a la vista “Ver Nómina”, y podemos ver que efectivamente se realizó la actualización del registro.

![Captura de pantalla 2024-08-14 213752](https://github.com/user-attachments/assets/12680d8f-e8d4-4261-a8c9-d2aa1ee9eca1)

Segundo Eliminación:Una vez haciendo click en la imagen nos mostrará un alert para la confirmación de para efectuará la eliminación del registro.


![Captura de pantalla 2024-08-14 213840](https://github.com/user-attachments/assets/4ef2f5d5-924f-4be3-9a12-8f549ad78663)

![Captura de pantalla 2024-08-14 213855](https://github.com/user-attachments/assets/ad2ac57a-a935-48f4-9af0-78c6ec6005ba)

Cuando se haya concluido la eliminación no enviará a la vista “Ver Nómina” para ver que efectivamente se eliminó el registro.

![Captura de pantalla 2024-08-14 213915](https://github.com/user-attachments/assets/97861969-891d-4f81-9307-4367c8ff52db)

BUSCADOR (para la recuperación de los ejercicios de la primera clase ya que no pude asistir)

El buscador filtra por Clasificación, Familia y Alimentación y tendremos que poner un valor y presionar el botón “Buscar”.

![Captura de pantalla 2024-08-14 213945](https://github.com/user-attachments/assets/0318f788-4b9c-4485-a4de-c5d6dbb22164)

![Captura de pantalla 2024-08-14 214007](https://github.com/user-attachments/assets/342a33aa-48de-42ee-b28c-98fb7624c634)

Y al finalizar la búsqueda nos mostrará una tabla con el atributo y el valor buscados.

![Captura de pantalla 2024-08-14 214018](https://github.com/user-attachments/assets/33b3fe28-8261-4986-9d9a-45c28525e77c)

