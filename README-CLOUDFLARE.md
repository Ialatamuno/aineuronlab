# AI Neuron Lab - Sitio Web Estático

Sitio web corporativo para **AI Neuron Lab** - Soluciones de Inteligencia Artificial en Paraguay.

## 🚀 Despliegue en Cloudflare Pages

Este sitio está optimizado para **Cloudflare Pages** con HTML, CSS y JavaScript puros.

### Pasos para Deploy:

1. **Conecta tu repositorio de GitHub**
   - Ve a [Cloudflare Pages](https://pages.cloudflare.com/)
   - Click en "Create a project"
   - Conecta con GitHub y selecciona el repositorio `aineuronlab`

2. **Configuración del Build**
   ```
   Build command: (dejar vacío)
   Build output directory: /
   Root directory: (dejar vacío)
   ```

3. **Deploy**
   - Click en "Save and Deploy"
   - Tu sitio estará en: `https://aineuronlab.pages.dev`

4. **Dominio Personalizado**
   - En Cloudflare Pages, ve a "Custom domains"
   - Agrega `aineuronlab.com`
   - Cloudflare configurará automáticamente el DNS

## 📁 Estructura del Proyecto

```
aineuronlab.com/
├── index.html          # Página principal
├── servicios.html      # Página de servicios (pendiente)
├── contacto.html       # Página de contacto (pendiente)
├── styles.css          # Estilos personalizados
├── script.js           # JavaScript
├── images/             # Imágenes del sitio
│   ├── hero.jpg
│   ├── workspace.jpg
│   ├── deeplearning.jpg
│   ├── automation.jpg
│   └── chatbot.jpg
└── README-CLOUDFLARE.md
```

## 🎨 Tecnologías

- **HTML5** - Estructura semántica
- **Tailwind CSS** (CDN) - Framework CSS
- **JavaScript Vanilla** - Interactividad
- **Font Awesome 6** - Iconos
- **Google Fonts** - Tipografías (Space Grotesk + Inter)

## ✨ Características

- ✅ Diseño futurista con glassmorphism
- ✅ Totalmente responsive
- ✅ Menú móvil funcional
- ✅ Animaciones suaves
- ✅ SEO optimizado
- ✅ Carga rápida (CDN)

## 🌐 Dominio

- **Producción**: `aineuronlab.com`
- **Cloudflare Pages**: `aineuronlab.pages.dev`

## 📝 Notas

- Las imágenes están optimizadas para web
- El sitio no requiere backend (100% estático)
- Compatible con todos los navegadores modernos

## 🔧 Desarrollo Local

Para ver el sitio localmente, simplemente abre `index.html` en tu navegador o usa un servidor local:

```bash
# Con Python
python -m http.server 8000

# Con Node.js
npx http-server

# O simplemente abre index.html en el navegador
```

## 📧 Contacto

- **Email**: aineuronlab@gmail.com
- **Ubicación**: Korea Office: 309 Gangnam-daero, Seocho-gu, Seoul, Republic of Korea

---

**Desarrollado con ❤️ por AI Neuron Lab**
