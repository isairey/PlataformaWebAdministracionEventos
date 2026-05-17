<div align="center">

<img width="220" src="https://cdn-icons-png.flaticon.com/512/3503/3503781.png" />

# 🎉 EventRentals System

### Plataforma web de renta y administración de eventos 🚀

<p align="center">
  <b>EventRentals System</b> es una plataforma desarrollada para gestionar la renta de artículos, mobiliario y servicios para eventos mediante un sistema moderno, dinámico y centralizado.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/EventRental-WebPlatform-E91E63?style=for-the-badge">
  <img src="https://img.shields.io/badge/Booking-System-9C27B0?style=for-the-badge">
  <img src="https://img.shields.io/badge/PHP-FullStack-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
</p>

<p align="center">
  <a href="#-acerca-del-proyecto">Acerca</a> •
  <a href="#-módulos-del-sistema">Módulos</a> •
  <a href="#-características">Características</a> •
  <a href="#-tecnologías-utilizadas">Tecnologías</a> •
  <a href="#-vista-previa">Vista previa</a>
</p>

</div>

---

# 🌌 Acerca del proyecto

**EventRentals System** es un sistema web orientado a la administración y renta de artículos para eventos, permitiendo a usuarios reservar productos y gestionar servicios mediante una plataforma eficiente y fácil de utilizar.

El sistema fue diseñado para:

- 🎉 Gestionar eventos
- 🪑 Administrar productos de renta
- 🛒 Gestionar carrito de compras
- 📅 Controlar reservaciones
- 👥 Administrar usuarios
- 📊 Supervisar operaciones
- 🔐 Gestionar accesos
- 🌐 Automatizar procesos de alquiler

---

# ✨ Características

## 🛒 Sistema de carrito

- 🛍️ Agregar productos
- 📦 Gestión dinámica del carrito
- 💰 Cálculo automático
- ⚡ Actualización rápida
- 📋 Confirmación de pedidos

---

## 📅 Sistema de reservaciones

- 📆 Reservaciones online
- 🎉 Gestión de eventos
- 📊 Control de disponibilidad
- 🔔 Confirmaciones automáticas
- 📋 Historial de pedidos

---

## 📦 Sistema de inventario

- 🏷️ Registro de productos
- 📦 Gestión de stock
- 💰 Administración de precios
- 📊 Control de disponibilidad
- 🔄 Actualización dinámica

---

## 📊 Panel administrativo

- 📈 Dashboard administrativo
- 👥 Gestión de usuarios
- 📦 Administración de inventario
- 📅 Supervisión de reservaciones
- 🔐 Gestión de permisos

---

# 👨‍💼 Módulos del sistema

## 🛠️ Admin Module

Este módulo funciona como administrador principal del sistema.

### Funcionalidades:

- 👥 Gestión de usuarios
- 📦 Administración de productos
- 📅 Gestión de reservaciones
- 📊 Control administrativo
- ⚡ Moderación del sistema
- 🔐 Gestión de accesos

---

## 👤 Customer Module

Este módulo es utilizado por clientes que desean rentar artículos para eventos.

### Funcionalidades:

- 🔍 Buscar productos
- 🛒 Agregar artículos al carrito
- 📅 Reservar productos
- 📋 Consultar detalles
- 📞 Contactar administradores

---

## 📦 Inventory Module

Este módulo administra todos los artículos y productos disponibles para renta.

### Funcionalidades:

- 📦 Gestión de inventario
- 🪑 Registro de artículos
- 💰 Configuración de precios
- 📊 Control de stock
- ⚡ Actualización dinámica

---

# 🛠️ Tecnologías utilizadas

## 🎨 Frontend

<p>
  <img src="https://skillicons.dev/icons?i=html,css,bootstrap,js" />
</p>

- HTML5
- CSS3
- Bootstrap
- JavaScript

---

## ⚙️ Backend

<p>
  <img src="https://skillicons.dev/icons?i=php" />
</p>

- PHP
- CRUD System
- Gestión de sesiones
- Arquitectura web

---

## 🗄️ Base de datos

<p>
  <img src="https://skillicons.dev/icons?i=mysql" />
</p>

- MySQL
- Relaciones SQL
- Persistencia de datos
- Gestión de reservaciones

---

## 🧰 Herramientas

<p>
  <img src="https://skillicons.dev/icons?i=git,github,vscode" />
</p>

- Git
- GitHub
- Visual Studio Code
- XAMPP / WAMP

---

# 📂 Estructura del proyecto

```bash
PlataformaWebAdministracionEventos/
│
├── admin/                    # Panel administrativo
├── customer/                 # Módulo cliente
├── cart/                     # Sistema de carrito
├── booking/                  # Sistema de reservaciones
├── inventory/                # Gestión de productos
├── assets/                   # Recursos frontend
├── database/                 # Scripts SQL
├── uploads/                  # Imágenes y archivos
├── includes/                 # Configuración del sistema
├── index.php                 # Página principal
├── README.md
└── LICENSE
```

---

# ⚡ Instalación

## 📋 Requisitos

- PHP 7+
- MySQL
- Apache
- XAMPP5 o WAMP
- Google Chrome o Microsoft Edge

---

# 🚀 Configuración del proyecto

## 1️⃣ Clonar repositorio

```bash
git clone https://github.com/isairey/PlataformaWebAdministracionEventos.git
```

---

## 2️⃣ Crear carpeta del proyecto

Crear carpeta:

```bash
Events/
```

---

## 3️⃣ Extraer archivos

- 📦 Descomprimir todos los archivos ZIP
- 📂 Colocar todos los archivos dentro de la carpeta `Events`

---

## 4️⃣ Mover proyecto

Copiar proyecto hacia:

```bash
xampp/htdocs/PlataformaWebAdministracionEventos/
```

---

## 5️⃣ Crear base de datos

Crear base:

```bash
events
```

---

## 6️⃣ Importar SQL

Importar:

```bash
events.sql
```

---

## 7️⃣ Configurar conexión

Editar:

```bash
includes/config.php
```

Agregar:

```php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','events');
```

---

## 8️⃣ Ejecutar proyecto

Abrir:

```bash
http://localhost/PlataformaWebAdministracionEventos/
```

---

# 🔐 Credenciales de administrador

## 👨‍💼 Acceso Admin

```bash
Usuario: admin
Contraseña: admin
```

---

# 📊 Funcionalidades principales

## 🎉 Gestión de eventos

- Organización de eventos
- Reservaciones online
- Gestión de productos
- Administración de pedidos

---

## 🛒 Sistema de carrito

- Agregar productos
- Actualizar pedidos
- Gestión de compras
- Confirmación dinámica

---

## 👥 Administración de usuarios

- Registro y autenticación
- Gestión de perfiles
- Roles administrativos
- Control de accesos

---



# 🧠 Objetivos del proyecto

## 🎯 Aprendizaje y administración

- Desarrollo web full stack
- Gestión de inventarios
- Bases de datos relacionales
- CRUD administrativos
- Sistemas de autenticación
- Arquitectura web
- Automatización de reservaciones

---

# 🚧 Roadmap

## 🔮 Próximas mejoras

- 📱 Aplicación móvil
- ☁️ Infraestructura cloud
- 💳 Pagos electrónicos
- 📊 Dashboard avanzado
- 🤖 Recomendaciones inteligentes
- 🌐 API REST moderna
- 🔔 Notificaciones en tiempo real

---

# 🤝 Contribuciones

Las contribuciones son bienvenidas ❤️

## Cómo contribuir

1. Fork del proyecto

```bash
git checkout -b feature/nueva-funcionalidad
```

2. Commit

```bash
git commit -m "✨ Nueva funcionalidad"
```

3. Push

```bash
git push origin feature/nueva-funcionalidad
```

4. Pull Request 🚀

---

# 👨‍💻 Desarrollador

<div align="center">

## Isai Reyes — Full Stack Developer

Desarrollador apasionado por plataformas de eventos, sistemas administrativos y arquitectura web moderna 🚀

</div>

---

# 🌟 Apoya el proyecto

⭐ Dale una estrella  
🍴 Haz fork  
📢 Comparte el proyecto

---

# 📜 Licencia

Proyecto open source orientado al aprendizaje y administración de sistemas de renta y reservaciones para eventos.

---

<div align="center">

### 🎉 EventRentals System — administración inteligente de eventos y reservaciones 🚀

</div>
