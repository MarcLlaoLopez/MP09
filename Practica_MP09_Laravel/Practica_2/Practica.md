# Practica MP09

## Crear migració a la taula tasks. Ha de tenir els camps (id, name, description i completed)
El que farem serà anar a l'apartat de database i fer clic dret en l'apartat de tables

![Captura1](Capturas/Selección_001.png)

I afegirem una nova taula anomenada tasks

![Captura2](Capturas/Selección_002.png)

A la qual a la definició d'aquesta afegirem els camps id, name, description i completed

![Captura3](Capturas/Selección_003.png)


## Crear factory

Tindrem que crear un fitxer php anomenat TaskFactorie prenent com a referéncia el fitxer UserFactory,
simplement tindrem que copiar el fitxer i pegar

![Captura4](Capturas/Selección_004.png)

I el mostrem

![Captura5](Capturas/Selección_005.png)

## Crear model de tasks

El que farem primer serà crear el model de Task

![Captura6](Capturas/Selección_006.png)

I afegirem la següent linea

![Captura7](Capturas/Selección_007.png)
## Crear seed

Crearem la seed que servirà per a la taula Task que hem creat anteriorment

![Captura8](Capturas/Selección_008.png)

La qual tindrem que plenar amb el següent contingut

![Captura9](Capturas/Selección_009.png)

## Crear inserts a partir del seed

Afegim la linea següent dins de **database/migrations/2023_12_19_190450_tasks.php**

![Captura10](Capturas/Selección_010.png)

Farem us de la següent comanda

![Captura11](Capturas/Selección_011.png)

I podem veure que creant la base de dades de sqlite

![Captura12](Capturas/Selección_012.png)

Ho migrem tot amb la comanda **php artisan migrate**

![Captura13](Capturas/Selección_013.png)

I la comanda ens funcionaria

![Captura14](Capturas/Selección_014.png)


## Crear controlador de tasks

Crearem el controller fent ús de la següent comanda

![Captura15](Capturas/Selección_015.png)


## Crear ruta a routes/web.php i afegir la nova ruta al navegador al fitxer resources/views/components/layout.blade.php crear la vista tasks.blade.php

Anirem a routes/web.php i afegim la següent ruta

![Captura16](Capturas/Selección_016.png)

L'afegirem també a layout.blade.php

![Captura17](Capturas/Selección_017.png)

I crearem la vista de task.blade.php

![Captura18](Capturas/Selección_018.png)
