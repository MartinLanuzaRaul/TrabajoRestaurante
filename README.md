<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# TrabajoRestaurante 🍽️

Este proyecto es una práctica del módulo **Desarrollo Web en Entorno Servidor** correspondiente a la 2ª evaluación. Consiste en la creación de un sistema básico de gestión para un restaurante, desarrollado utilizando el framework **Laravel**.

## Descripción 📄

La aplicación permite gestionar platos, pedidos y clientes, ofreciendo también la posibilidad de realizar pedidos ficticios a través de diferentes empresas de delivery. Incluye todas las funcionalidades básicas necesarias para completar un flujo de compra simulado, con sus correspondientes modelos, controladores, vistas y rutas.

## Estructura del proyecto 📂

El proyecto sigue el patrón estándar de Laravel. A continuación se detalla la estructura y los archivos principales:

### Modelos
- **Cliente.php** (`id`, `nombre`, `teléfono`, `tarjetaCredito`)
- **EmpresaDelivery.php** (`id`, `nombre`, `email`)
- **Plato.php** (`id`, `nombre`, `precio`)
- **Pedido.php** (`id`, `idCliente`, `precioTotal`)
- **Plato_Pedido.php** (`idPlato`, `idPedido`)

### Vistas
- `Inicio.blade.php`
- `Platos.blade.php`
- `Empresas.blade.php`
- `Pedidos.blade.php`
- `FormularioCliente.blade.php`
- `FinPedido.blade.php`

### Controladores
Controladores asociados a cada uno de los modelos (excepto `Plato_Pedido`).

### Migraciones
Migraciones para crear las tablas correspondientes a todos los modelos, utilizando el tipado adecuado para cada atributo.

### Factories
- **ClienteFactory**: Genera 10 clientes aleatorios con nombre, teléfono y número de tarjeta válidos.
- **EmpresaDeliveryFactory**: Genera 10 empresas con nombres y correos corporativos aleatorios.
- **PlatoFactory**: Genera 20 platos con nombres y precios aleatorios.

### Requests
- `DatosCliente.php`: Validación de los datos del cliente (teléfono y tarjeta de crédito).

### Rutas
Definidas en `web.php`, siguiendo la estructura vista en clase y adaptadas a las necesidades de la aplicación.

## Funcionalidad principal ⚙️

### Vista Inicio
- Nombre e imágenes del restaurante.
- Botón para acceder al listado de platos.

### Vista Platos
- Tabla paginada con todos los platos (5 por página).
- Opción para añadir platos al pedido del cliente.
- Enlace al formulario del cliente.
- Navegación a Empresas y Pedidos.

### Vista FormularioCliente
- Formulario para introducir nombre, teléfono y tarjeta de crédito.
- Selección de empresa de delivery.
- Validación del formato del teléfono y la tarjeta.
- Acceso a FinPedido tras completar el formulario.

### Vista FinPedido
- Mensaje confirmando el pedido.
- Botones para regresar al Inicio o ver los Platos.

### Vista Empresas
- Tabla paginada con las empresas de delivery (5 por página).
- Navegación entre Platos, Empresas y Pedidos.

### Vista Pedidos
- Tabla con los 10 últimos pedidos, mostrando cliente y precio total.
- Navegación entre Platos, Empresas y Pedidos.

### Bootstrap
La aplicación incorpora al menos 5 elementos estilizados mediante Bootstrap, incluyendo:
- Botones personalizados.
- Cards para presentar información.
- Navigation Bars para la navegación.
- Alerts informativas.
- Formularios estilizados.

## Consideraciones adicionales 📝
- Cada vez que un cliente finaliza un pedido, se guarda en la base de datos un nuevo registro de cliente, su pedido correspondiente, y los platos asociados a dicho pedido.
- Aunque se ha usado Laravel como base, se ha aplicado también conocimiento general de PHP aprendido durante el curso.

