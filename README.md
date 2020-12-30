# rom-api
Приложение представляет собой демо-версию API системы
## Описание директорий
server - тут располагается условная серверная часть приложения<br>
|-fsw - файлы прошивок<br>
public - условная публичная часть приложения, отображаемая пользователю<br>
|-js - js скрипты<br>
api - API система сайта<br>
|-config - файлы конфигурации<br>
|-core - базовые файлы<br>
|-cron - файлы которые необходимо добавить в планировщик<br>
|-modules - вызываемые через API исполняемые скрипты<br>
## Добавление модулей
Для добавления модулей нужно создать папку с его названием в папке modules. точкой входа
в модуль служит файл index.php, в котором создан класс одинаковый с именем директории.
При необходимости работы с бд необходимо наследоваться от класса component.
## Выполнение запроса
Перед выполненим запроса нужно получить идентификатор сессии. Для этого нужно выполнить запрос

POST /api/index.php HTTP/1.1<br>
Content-Type: application/x-www-form-urlencoded<br>
Host: rom-api.lsite<br>
cmd=connect<br>

ответ:<br>
{"result":"success","session_id":"1e9f6d0507b2ec6f95788c73889f87b0"}

session_id необходимо вставлять в каждом запросе:

POST /api/index.php HTTP/1.1<br>
Content-Type: application/x-www-form-urlencoded<br>
Host: rom-api.lsite<br>
cmd=ping&uid=f603d182049dc18155e877c1a6d15919<br>