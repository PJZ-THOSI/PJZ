#!/bin/bash

# Creador: Joel Vega Gómez 

# Script para iniciar el entorno de desarrollo.
# Ejecutar desde la carpeta raíz del proyecto.

# Iniciar el servidor PHP en el puerto 8081.
php -S localhost:8081 -t backend/public &

# Iniciar el servidor de desarrollo de Node.js.
npm run dev
