# company-database

cely projekt rozbehneme pomocou príkazu `make start-project` v termináli do priečinka,
kde sa nachádza súbor `Makefile` (v našom prípade do priečinka `company-database`)

je potrebne aby sme mali volne porty `90`, `8080` a `3306` (ak ich nemáme, tak ich musíme uvoľniť,
alebo upravíme podla potreby docker-compose.yml)

ak všetko prebehne v poriadku, tak sa v termináli zobrazí nasledovné:

```bash
make start-project
docker-compose up -d --build --force-recreate --remove-orphans
Building php
Recreating company-database_db_1 ... done
Recreating company-database_adminer_1 ... done
Recreating company-database_php_1     ... done
Creating company-database_web_1       ... done
docker-compose exec php su --command="composer -n install --prefer-dist" www-data
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Generating autoload files
@stats:{cmd:"make start-project" sys:0,31s usr:1,93s cpu:19% wall:11,638s mem:43k}
```

ak sa vyskytne chyba, tak je potrebne zistiť, čo ju spôsobuje a odstrániť ju

webserver je dostupný na adrese [http://localhost:90](http://localhost:90)
adminer je dostupný na adrese [http://localhost:8080](http://localhost:8080)
prihlasovacie údaje pre adminer sú:
- system: MySQL
- server: db
- username: root
- password: toor
- database: company

pomocou `docker exec -it --user www-data company-database_php_1 bash`
sa dostaneme do kontajnera pre pripadne spustenie dalsich prikazov.

--------------------------------------------------------------------------------------------


## EN
We will start the entire project using the command `make start-project` in the terminal within the folder where the `Makefile` is located (in our case, in the `company-database` folder).

It is necessary to have the ports `90`, `8080`, and `3306` available (if they are not available, they need to be released or adjusted as needed in the `docker-compose.yml` file).

If everything goes well, the following output will be displayed in the terminal:

```bash
make start-project
docker-compose up -d --build --force-recreate --remove-orphans
Building php
Recreating company-database_db_1 ... done
Recreating company-database_adminer_1 ... done
Recreating company-database_php_1     ... done
Creating company-database_web_1       ... done
docker-compose exec php su --command="composer -n install --prefer-dist" www-data
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Generating autoload files
@stats:{cmd:"make start-project" sys:0.31s usr:1.93s cpu:19% wall:11.638s mem:43k}
```

If an error occurs, it is necessary to identify the cause and resolve it.

The web server is accessible at [http://localhost:90](http://localhost:90).
Adminer is accessible at [http://localhost:8080](http://localhost:8080).
The login credentials for Adminer are:
- System: MySQL
- Server: db
- Username: root
- Password: toor
- Database: company

Using `docker exec -it --user www-data company-database_php_1 bash`, we can enter the container to run additional commands.

