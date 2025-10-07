# 💼 Sistema de Facturación Electrónica con Detracciones, Caja y Cuentas por Cobrar/Pagar

![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?logo=javascript&logoColor=black)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)
![SUNAT](https://img.shields.io/badge/SUNAT-Integrado-red)
![License](https://img.shields.io/badge/Licencia-Open%20Source-green)

---

### 📘 Descripción general

El **Sistema de Facturación Electrónica con Detracciones y Control de Caja** es una solución completa desarrollada en **PHP, MySQL y JavaScript**, pensada para **empresas o negocios que requieren emitir comprobantes electrónicos y gestionar su flujo financiero**.

Permite emitir **facturas y notas de crédito** conectadas al **facturador SUNAT**, además de manejar **detracciones, cuentas por cobrar, cuentas por pagar, y arqueos de caja diarios**.  
Cuenta con una interfaz moderna, responsiva y amigable, ideal para pequeñas y medianas empresas.

---

### 🚀 Funcionalidades principales

#### 🧾 Facturación electrónica (SUNAT)
- Emisión de **facturas, boletas, notas de crédito y débito**.
- Generación automática de **XML, PDF y CDR**.
- Envío automático a **SUNAT** y descarga de comprobantes validados.
- Registro de **series y correlativos** personalizados.
- Enlace con **clientes y productos** desde la base de datos.

#### 💰 Módulo de detracciones
- Cálculo automático del **porcentaje de detracción según tipo de servicio**.
- Registro de número de cuenta y constancia de detracción.
- Reporte de detracciones aplicadas por período.

#### 💵 Cuentas por cobrar
- Seguimiento de facturas pendientes de pago.
- Registro de abonos parciales y actualización automática de saldos.
- Reporte de clientes con deudas y vencimientos próximos.

#### 🧾 Cuentas por pagar
- Registro de facturas de proveedores.
- Control de pagos y fechas de vencimiento.
- Historial financiero completo por proveedor.

#### 💳 Módulo de caja
- Registro de ingresos y egresos diarios.
- Arqueo y cierre de caja con saldo inicial y final.
- Reportes consolidados por día, semana o mes.
- Conciliación con bancos o cuentas contables.

#### 📊 Reportes y estadísticas
- Reportes filtrados por rango de fechas, tipo de comprobante o cliente.
- Gráficos dinámicos de ventas, cobros y pagos.
- Exportación de reportes a **Excel y PDF**.

---

### 🧩 Tecnologías utilizadas

| Tecnología | Descripción |
|-------------|-------------|
| **PHP 8.1+** | Backend principal y lógica del facturador. |
| **MySQL** | Base de datos relacional para comprobantes y transacciones. |
| **JavaScript (ES6)** | Interactividad y validaciones dinámicas. |
| **Bootstrap 5** | Interfaz moderna y adaptable a móviles. |
| **AJAX / JSON** | Comunicación asíncrona sin recargar páginas. |
| **cURL + XML** | Conexión directa con API del facturador SUNAT. |

---

### ⚙️ Módulos principales

1. **Facturación Electrónica**
   - Emisión y validación de comprobantes.
   - Integración con SUNAT.
   - Gestión de clientes y productos.

2. **Detracciones**
   - Configuración automática por tipo de servicio.
   - Registro y control contable.

3. **Cuentas por Cobrar**
   - Seguimiento de pagos y abonos.
   - Reportes de saldos pendientes.

4. **Cuentas por Pagar**
   - Control de obligaciones y vencimientos.
   - Registro de pagos a proveedores.

5. **Caja y Bancos**
   - Movimientos de ingresos y egresos.
   - Cierre y arqueo diario.

6. **Reportes**
   - Reportes de ventas, pagos y caja.
   - Exportación a Excel y PDF.

---

---

### 🔒 Seguridad del sistema

- Inicio de sesión con roles: **Administrador, Caja, Contabilidad, Ventas**.  
- Control de permisos por módulo.  
- Validación de sesiones activas y protección contra inyecciones SQL.  
- Cifrado de contraseñas con **password_hash()**.  
- Conexión segura y validada con **SSL / HTTPS** (si está disponible).

---

### 🧠 Beneficios

- Automatiza el proceso de facturación con la SUNAT.  
- Facilita el control de **caja y flujo de efectivo**.  
- Mejora la **gestión contable y de proveedores**.  
- Evita errores de registro con cálculos automáticos de detracción.  
- Permite tomar decisiones financieras con reportes detallados.  

---

### 🧾 Ejemplo de flujo de uso

1. El usuario crea un cliente y agrega los productos/servicios.  
2. Emite una **factura electrónica** → se genera el **XML**.  
3. El sistema envía el comprobante a **SUNAT** y obtiene el **CDR**.  
4. Si aplica detracción, se calcula automáticamente y se registra.  
5. Los cobros y pagos se registran en los módulos de **Cuentas por Cobrar/Pagar**.  
6. Se consolida todo en el **Reporte de Caja y Flujo de Efectivo**.

---

### 🧑‍💻 Autor

**Desarrollado por:** Miguel Rosas  
💼 *Sistema integral de gestión y facturación electrónica para empresas peruanas.*

