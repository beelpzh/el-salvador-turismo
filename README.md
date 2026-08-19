### Aplicación de Turismo El Salvador (Patrón MVC en Laravel)

Proyecto evaluado sobre la implementación del patrón arquitectónico Modelo-Vista-Controlador (MVC) en Laravel utilizando una estructura de datos simulada de forma estática como fuente de información. 

### 🚀 Instrucciones de Instalación

1. **Clonar el repositorio:** 

bash

git clone <URL_DE_TU_REPOSITORIO>
cd el-salvador-turismo

Usa el código con precaución.
2. **Instalar las dependencias de Composer:** 

bash

composer install --no-audit

Usa el código con precaución.
3. **Configurar el archivo de entorno:** 

  * Duplica el archivo .env.example y renómbralo a .env.
  * Desactiva el bloqueo de auditoría de seguridad si es necesario ejecutando: 

bash

composer config --global audit.block-insecure false

Usa el código con precaución.
4. **Generar la clave de la aplicación:** 

bash

php artisan key:generate

Usa el código con precaución.
5. **Iniciar el servidor de desarrollo:** 

bash

php artisan serve

Usa el código con precaución.
6. **Acceder a la aplicación:**
Abre tu navegador e ingresa a [http://127.0.0.1:8000](http://127.0.0.1:8000) para explorar el catálogo de destinos turísticos de El Salvador.

### 🛠️ Tecnologías Utilizadas

* **Framework:** Laravel 11
* **Lenguaje:** PHP 8.2+
* **Diseño:** Bootstrap 5 (a través de CDN)
* **Arquitectura:** Modelo-Vista-Controlador (MVC)


### 🔄 Flujo del Ciclo de Vida de una Petición HTTP (MVC)

El sistema procesa cada solicitud de los usuarios siguiendo estrictamente el patrón arquitectónico **Modelo-Vista-Controlador**: 

1. **Petición HTTP (Cliente -> Router):** El usuario ingresa a una URL (por ejemplo, /lugar/1). La ruta definida en el archivo routes/web.php intercepta la solicitud.
2. **Controlador (LugarController):** El enrutador transfiere el control de la petición al controlador, invocando el método correspondiente (en este caso, show($id)).
3. **Modelo (Lugar):** El controlador invoca al modelo mediante Lugar::find($id). El modelo se encarga de abstraer y procesar la fuente de datos local.
4. **Vista (show.blade.php):** El modelo retorna los datos procesados al controlador. Este se los inyecta a la vista, renderizando la plantilla Blade junto con los estilos de Bootstrap.
5. **Respuesta HTTP:** El servidor envía la página HTML final completamente estructurada de vuelta al navegador del usuario para su visualización.

### 📂 Archivos Clave del Proyecto

La implementación del patrón MVC y la gestión de la aplicación se distribuye en los siguientes archivos principales: 

* **Modelo:** app/Models/Lugar.php — Gestiona los datos simulados y la lógica de consulta.
* **Controlador:** app/Http/Controllers/LugarController.php — Conecta los datos con las interfaces visuales.
* **Rutas:** routes/web.php — Intercepta las solicitudes HTTP y las deriva al controlador.
* **Vistas:** resources/views/lugares/ — Contiene las plantillas Blade con el diseño en Bootstrap.
* **Fuente de Datos:** storage/app/lugares.json — Archivo estructurado con la información de los destinos.

## 📸 Capturas de Pantalla del Sistema

A continuación se muestra el correcto funcionamiento de la interfaz gráfica y la navegación del sistema:

### Catálogo Principal de Destinos
![Catálogo de Destinos](principal.png)

### Vista de Detalle y Formulario de Contacto
![Detalle del Destino](boqueron info.png)
![Detalle del Destino](boqueron soli.png)