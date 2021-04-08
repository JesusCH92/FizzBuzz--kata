# Objetivo

El objetivo de este ejercicio, es imprimir por pantalla una lista ordenada de números del 1 al 100 sustituyendo:

* Los múltiplos de 3 por la cadena "Fizz".
* Los múltiplos de 5 por la cadena "Buzz".
* Y los múltiplos de 3 y 5 por "FizzBuzz".

Todo esto se realizará trabajando con una filosofía de clean code (Arquitectura hexagonal, Clausulas de guarda, Principios SOLID, KISS).

# Requisitos del sistema

Para realizar este ejercicio se trabajó con PHP en un entorno dockerizado, así que es necesario tener instalado:
* Docker

# Ejecución del proyecto

## **Linux o Mac**
Si está trabajando con un S.O. de la familia de Unix (Linux o Mac), puede utilizar ejecutar lo siguiente:

**1. Instalar las dependencias**

Primero instale las dependencias con el siguiente comando:
```
make install
```

**2. Ejecutar el script**

Después de instalar las dependencias, puede ejecutar el script con el siguiente comando:
```
make run
```

**3. Ejecutar los tests**

Para ejecutar los tests, ingrese el siguiente comando:
```
make run-test
```

## **Windows**

Si está trabajado con windows, siga los siguientes pasos:

**1. Instalar las dependencias**

Para instalar las dependencias, ejecute lo siguiente en este orden:
```
docker run --rm --interactive --tty --volume "$PWD":/app composer install
```
```
docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli vendor/bin/phpunit
```

**2. Ejecutar el script**

Después de instalar las dependencias, puede ejecutar el script con el siguiente comando:
```
docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php numberPrinter.php
```

**3. Ejecutar los tests**

Para ejecutar los tests, ingrese el siguiente comando:
```
docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp  -w /usr/src/myapp php:7.4-cli vendor/bin/phpunit --testdox
```