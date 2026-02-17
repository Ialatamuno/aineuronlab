    # AI Neuron Lab - Website

Sitio web corporativo moderno y futurista para **AI Neuron Lab**, empresa líder en soluciones de inteligencia artificial en Paraguay.

## 🚀 Características

- ✨ **Diseño Futurista**: Interfaz moderna con glassmorphism, gradientes y animaciones fluidas
- 📱 **Responsive**: Optimizado para todos los dispositivos (móvil, tablet, desktop)
- 🎨 **Paleta de Colores Tech**: Azules eléctricos (#00D9FF), violetas (#8B5CF6) y verdes (#10B981)
- ⚡ **Performance**: Carga rápida con optimización de assets
- 🔒 **SEO Friendly**: Meta tags optimizados y estructura semántica

## 💻 Stack Tecnológico

- **Backend**: PHP 8+
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework CSS**: Tailwind CSS (via CDN)
- **Iconos**: Font Awesome 6
- **Tipografías**: Space Grotesk + Inter (Google Fonts)

## 📁 Estructura de Archivos

```
aineuronlab.com/
├── index.php                 # Página principal
├── servicios.php             # Catálogo de servicios
├── contacto.php              # Formulario de contacto
├── includes/
│   ├── header.php           # Header con navegación
│   └── footer.php           # Footer con información
├── .htaccess                # Configuración Apache
└── README.md                # Este archivo
```

## ⚙️ Instalación y Deployment

### Requisitos Previos

- PHP 8.0 o superior
- Apache con mod_rewrite habilitado
- Conexión a internet (para CDNs de Tailwind y Font Awesome)

### Instalación Local

1. **Clona o descarga el proyecto**
   ```bash
   cd /ruta/a/tu/proyecto
   ```

2. **Inicia un servidor PHP local**
   ```bash
   php -S localhost:8000
   ```

3. **Abre en tu navegador**
   ```
   http://localhost:8000
   ```

### Deployment en Servidor

1. Sube todos los archivos a tu hosting vía FTP/SFTP
2. Asegúrate de que `.htaccess` esté en la raíz
3. Verifica que `mod_rewrite` esté habilitado en Apache
4. Configura el dominio para apuntar a la carpeta del proyecto
5. (Opcional) Habilita SSL y descomenta las líneas HTTPS en `.htaccess`

## 🎨 Personalización

### Cambiar Colores

Los colores están definidos en `includes/header.php` dentro del script de configuración de Tailwind:

```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#00D9FF',    // Color principal
                accent: '#8B5CF6',     // Color de acento
                secondary: '#10B981',  // Color secundario
            }
        }
    }
}
```

### Modificar Contenido

- **Hero Section**: Edita `index.php` líneas 10-50
- **Servicios**: Modifica `servicios.php` o edita las secciones en `index.php`
- **Información de Contacto**: Actualiza `contacto.php` y `includes/footer.php`

### Cambiar Imágenes

Las rutas de las imágenes están definidas en cada sección. Reemplaza las rutas absolutas con tus propias imágenes:

```php
<img src="ruta/a/tu/imagen.jpg" alt="Descripción">
```

## 📧 Configuración del Formulario de Contacto

El formulario en `contacto.php` actualmente es solo HTML. Para hacerlo funcional:

### Opción 1: PHP Mail (Básico)

Agrega este código al inicio de `contacto.php`:

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "aineuronlab@gmail.com";
    $subject = "Nuevo mensaje de contacto - $name";
    $body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mensaje enviado correctamente');</script>";
    }
}
?>
```

### Opción 2: API de Email (Recomendado)

Integra servicios como:
- **SendGrid**: Para envíos profesionales
- **Mailgun**: API robusta para email
- **AWS SES**: Servicio de Amazon

### Opción 3: Guardar en Base de Datos

Conecta con MySQL/PostgreSQL para almacenar los contactos:

```php
$conn = new PDO("mysql:host=localhost;dbname=aineuronlab", "user", "password");
$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->execute([$name, $email, $message]);
```

## 🔧 Mantenimiento

### Actualizar Información de Contacto

- **Teléfono**: Buscar y reemplazar `0982 602211` en todos los archivos
- **Email**: Buscar y reemplazar `aineuronlab@gmail.com`
- **Dirección**: Actualizar en `includes/footer.php` y `contacto.php`

### Agregar Nuevos Servicios

1. Abre `servicios.php`
2. Duplica un bloque de servicio existente
3. Modifica el contenido, icono y precio
4. Guarda y recarga la página

## 🌐 URLs Limpias

Gracias a `.htaccess`, las URLs funcionan sin extensión `.php`:

- ✅ `aineuronlab.com/servicios` (correcto)
- ❌ `aineuronlab.com/servicios.php` (también funciona, pero redirige)

## 📱 Redes Sociales

Actualiza los enlaces de redes sociales en `includes/footer.php`:

```html
<a href="https://linkedin.com/company/tu-empresa">LinkedIn</a>
<a href="https://instagram.com/tu-usuario">Instagram</a>
<a href="https://github.com/tu-usuario">GitHub</a>
```

## 🎯 SEO y Analytics

### Google Analytics

Agrega antes del cierre de `</head>` en `includes/header.php`:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

### Meta Tags

Cada página ya tiene meta tags básicos. Personalízalos según necesites:

```php
$page_title = "Tu Título | AI Neuron Lab";
$page_description = "Tu descripción SEO optimizada";
```

## 🐛 Troubleshooting

### Las URLs limpias no funcionan

- Verifica que `mod_rewrite` esté habilitado:
  ```bash
  sudo a2enmod rewrite
  sudo systemctl restart apache2
  ```
- Asegúrate de que `.htaccess` esté en la raíz
- Verifica permisos: `chmod 644 .htaccess`

### Los estilos no se cargan

- Verifica conexión a internet (Tailwind CSS es vía CDN)
- Revisa la consola del navegador para errores
- Confirma que los CDNs estén accesibles

### El menú móvil no funciona

- Verifica que JavaScript esté habilitado
- Abre la consola del navegador y busca errores
- Asegúrate de que `includes/header.php` esté incluido correctamente

## 📄 Licencia

© 2026 AI Neuron Lab. Todos los derechos reservados.

## 👨‍💻 Desarrollado con ❤️ por AI Neuron Lab

Para soporte técnico: aineuronlab@gmail.com
