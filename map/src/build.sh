#!/bin/bash
#
# Utiliza:
# npm install -g uglify-js
# npm install -g clean-css
# gzip
#
# GPL 2013, Iván Eixarch

# Si se produce cualquier error se aborta la ejecución
set -e

# Nos aseguramos que nos encontramos en el directorio donde está el script
SCRIPTPATH=$( cd $(dirname $0) ; pwd -P)
cd "$SCRIPTPATH"
echo "Minimizando CSS..."
cleancss -b -o ../estilos.css estilos.css
cleancss -b -o ../estilos.ie.css estilos.ie.css
echo "Minimizando JS..."
uglifyjs bankia.js > ../bankia.js
cd ..
echo "GZIPeando..."
gzip -c -9 index.html > index.html.gz
gzip -c -9 estilos.css > estilos.css.gz
gzip -c -9 estilos.ie.css > estilos.ie.css.gz
gzip -c -9 bankia.js > bankia.js.gz
# Para que funcione el gzip estático de nginx los archivos tiene que tener la misma marca de tiempo
touch *
echo "Web comprimida con éxito"

