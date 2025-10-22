# BOOKING PLANE  
**Sistema de Gestión de Reservas Aéreas**  
**Versión 1.0 – Documento Técnico del Proyecto**  

---

## 1. Descripción General

**Booking Plane** es un sistema web desarrollado para optimizar la gestión de vuelos, reservas, usuarios y pagos dentro del entorno aeroportuario.  
El sistema está diseñado bajo los principios de eficiencia, integridad de datos y facilidad de uso, permitiendo a los usuarios realizar reservas de forma intuitiva y a los administradores controlar toda la operación aérea desde una interfaz moderna.

**Tipos de usuario:**
- **Cliente:** consulta vuelos, selecciona asientos, ingresa datos y realiza pagos.  
- **Administrador:** gestiona vuelos, aviones, reservas, usuarios y reportes.

---

## 2. Objetivo General

Desarrollar un sistema web integral para la reserva y administración de vuelos, que optimice la experiencia del usuario final, agilice los procesos operativos y garantice la seguridad en las transacciones y el almacenamiento de la información.

---

## 3. Objetivos Específicos

1. Implementar un módulo de reserva con búsqueda, selección y confirmación de vuelos.  
2. Desarrollar un módulo administrativo para la gestión de usuarios, vuelos y aviones.  
3. Diseñar una interfaz moderna, responsiva y de fácil uso mediante **Tailwind CSS**.  
4. Garantizar la integridad y seguridad de los datos mediante validaciones y cifrado.  
5. Automatizar la generación de tiquetes electrónicos en formato PDF.

---

## 4. Alcance del Sistema

El sistema **Booking Plane** abarca las siguientes funcionalidades:

- Búsqueda y filtrado de vuelos según origen, destino y fecha.  
- Selección de asientos con control de disponibilidad.  
- Registro de pasajeros y del pagador.  
- Procesamiento de pagos simulados (tarjeta o PSE).  
- Generación de tiquetes electrónicos descargables.  
- Panel administrativo con control total de vuelos, reservas y usuarios.  
- Validación de datos y autenticación segura.  
- Interfaz adaptable a diferentes tamaños de pantalla.

---

## 5. Equipo de Desarrollo

| Nombre                     | Rol Principal                    |
|-----------------------------|----------------------------------|
| Andrés Stiven Cebay Ceballos | Analista, Diseñador, Programador |
| Cristian de Jesús Utria      | Analista, Diseñador, Programador |

---

## 6. Tecnologías Utilizadas

**Frontend**
- Blade (Laravel Views)  
- Tailwind CSS  
- JavaScript  

**Backend**
- Laravel (Framework PHP)  
- MySQL  

**Infraestructura**
- Git y GitHub (control de versiones)  
- XAMPP / Hostinger (entorno local y de despliegue)

---

## 7. Arquitectura del Sistema

El proyecto se desarrolló bajo el patrón **MVC (Modelo - Vista - Controlador)**, asegurando modularidad, escalabilidad y mantenimiento.