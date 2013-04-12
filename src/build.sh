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
#cleancss -b -o ../estilos.css estilos.css
#cleancss -b -o ../fuentes.css fuentes.css
cat estilos.css fuentes.css | cleancss -b -o ../estilos.css
#echo "Minimizando JS..."
# se trata de librerías, que en principio no cambian
#uglifyjs bankia.js > ../bankia.js
#uglifyjs foros-bankia.js > ../foros-bankia.js
#cd ..
# Generamos los HTML
echo "Generando los HTML estáticos"
php index.php > ../index.html
php operacion.php > ../operacion.html
php rescate.php > ../rescate.html
php sisepuede.php > ../sisepuede.html
php toque.php > ../toque.html
cd ..
echo "GZIPeando..."
gzip -c -9 index.html > index.html.gz
gzip -c -9 operacion.html > operacion.html.gz
gzip -c -9 rescate.html > rescate.html.gz
gzip -c -9 sisepuede.html > sisepuede.html.gz
gzip -c -9 toque.html > toque.html.gz
gzip -c -9 estilos.css > estilos.css.gz
# Para que funcione el gzip estático de nginx los archivos tiene que tener la misma marca de tiempo
touch *
echo "Web comprimida con éxito"

