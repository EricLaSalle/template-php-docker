# Boilerplate de PHP 🐘

Este repositorio es tu punto de partida ideal para proyectos basados en PHP. Está configurado con herramientas modernas y servicios que harán de tu desarrollo una experiencia más agradable y profesional.

## 🌟 Características

- **Docker 🐳**: Proporciona un entorno de desarrollo uniforme y sin complicaciones. Equipado con Apache, MariaDB y phpMyAdmin para una experiencia de desarrollo completa.
- **Composer 🎼**: Administrador de dependencias para PHP, facilitando la gestión de librerías y paquetes.
- **phpcs con el estándar PSR12 📏**: Asegura que tu código PHP cumpla con las mejores prácticas definidas en el estándar PSR12.
- **GitHub Actions 🤖**: Automatiza tus flujos de trabajo (linting y pruebas) solo cuando se abre o actualiza un Pull Request hacia main.
- **VS Code ⚡**: Incluye configuración recomendada (settings.json) y extensiones recomendadas (extensions.json) para un entorno de desarrollo consistente entre colaboradores.

## 🚀 Configuración inicial

1. **Crea tu repositorio 🛠️**:

   En vez de clonar este repositorio directamente, haz clic en el botón "Use this template" (Usar esta plantilla) en la página principal del repositorio para crear un nuevo repositorio basado en esta plantilla.

2. **Docker 🐳**:

   Es necesario instalar Docker y Docker Compose para establecer y manejar tu entorno de desarrollo. Aunque puedes instalar ambas herramientas por separado, se recomienda optar por Docker Desktop. Esta herramienta unifica Docker y Docker Compose en una única interfaz, facilitando su manejo, ofreciendo una integración más fluida con el sistema operativo y proporcionando herramientas adicionales útiles para la gestión y visualización de tus contenedores.

   Una vez instalado, puedes levantar los servicios (Apache, MariaDB, phpMyAdmin) con:

   ```bash
   docker-compose up
   ```

   Si prefieres correr los servicios en segundo plano, puedes utilizar la opción `-d`:

   ```bash
   docker-compose up -d
   ```

   Esta opción permite que los servicios se ejecuten en modo "detached", liberando la terminal.

3. **Composer 🎼**:

   Una vez dentro del contenedor de PHP, puedes utilizar Composer como lo harías normalmente para gestionar dependencias:

   ```bash
   composer install
   ```

4. **GitHub Actions 🤖**:

   Las acciones ya están preconfiguradas. Encuentra los detalles en `.github/workflows`.

5. **phpcs con el estándar PSR12 📏**:

   Asegúrate de que tu código PHP cumpla con el estándar PSR12. Las GitHub Actions se encargarán de validar automáticamente tu código usando este estándar en cada push o pull request. Es importante siempre adherirse a estas mejores prácticas para mantener la calidad del código.

6. **Visual Studio Code ⚡**:

    Este repositorio incluye un directorio .vscode/ con:
    - settings.json: configuración para aplicar formato automático, validar PHP y usar el estándar PSR-12 en cada guardado.
    - extensions.json: lista de extensiones recomendadas, como:
        - [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client): autocompletado y análisis avanzado.
        - [phpcs](https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs): integración de **PHP_CodeSniffer** con VS Code.
    👉 De esta forma, cualquiera que clone el repositorio tendrá el mismo entorno base en VS Code.

## 📢 Reglas de Git

Para mantener un flujo de trabajo limpio:

1. **Nunca hagas push directamente a la rama `main`**. Esta rama debería tener restricciones de push ya que cualquier cambio directo puede causar conflictos y complicaciones.

2. **Crea siempre una rama aparte** para tus cambios y características. Asegúrate de que sus nombres sean descriptivos y sigan las convenciones establecidas.

3. **Realiza Pull Requests (PRs) para integrar tus cambios**. Una vez que tu rama esté lista y hayas realizado tus commits, crea una Pull Request en GitHub. Esto desencadenará las GitHub Actions (PSR-12) para validar tu código antes de la integración.
