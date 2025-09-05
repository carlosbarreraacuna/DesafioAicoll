# Desafío AICOLL PHP — API de Empresas (Laravel)

API REST en **Laravel** para gestionar la tabla `empresas`:

- Crear empresa (estado por defecto **Activo**)
- Listar empresas
- Consultar empresa por **NIT**
- Actualizar empresa (`nombre`, `direccion`, `telefono`, `estado`)
- Eliminar **solo** si la empresa está **Inactivo**

**Reglas clave**
- `nit` **único** (no duplicado)
- `estado`  {`Activo`, `Inactivo`} y por defecto **Activo**
- Validación de datos de entrada (tipo, longitud, valores permitidos)

---

## Requisitos

- **PHP** 8.2+
  - Extensiones según BD de **app** (por ejemplo `pdo_pgsql` para PostgreSQL)
  - Para **tests**: `sqlite3` y `pdo_sqlite`
- **Composer** 2.x
- **Laravel** 11.x
- **Base de datos**
  - **App (desarrollo):** PostgreSQL (recomendado)
  - **Tests:** SQLite (en memoria o en archivo dentro del proyecto)

---

##  Instalación
1) Clonar e instalar dependencias:

```bash
git clone https://github.com/carlosbarreraacuna/DesafioAicoll.git
cd DesafioAicoll

composer install
cp .env.example .env
php artisan key:generate
```

2) Crea la base empresas_api en tu servidor PostgreSQL y luego ejecuta:

php artisan migrate
php artisan db:seed   # opcional


