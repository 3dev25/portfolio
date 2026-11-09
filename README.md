# 3dev25 — Web Development Portfolio

Восемь самостоятельных демонстрационных проектов для российского малого бизнеса и SaaS.

## Проекты

| Папка | Проект | Стек |
|---|---|---|
| [sever-stroy](sever-stroy/) | Север Строй | PHP, MySQL, JavaScript |
| [forma-dent](forma-dent/) | Forma Dent | PHP, MySQL, JavaScript |
| [mesto](mesto/) | Место | PHP, MySQL, JavaScript |
| [nord-home](nord-home/) | Nord Home | PHP, MySQL, JavaScript |
| [orbit-crm](orbit-crm/) | Orbit CRM | React, Node.js, PostgreSQL |
| [smena](smena/) | Смена | React, Node.js, PostgreSQL |
| [kvadrat](kvadrat/) | Квадрат | React, Node.js, PostgreSQL |
| [pravo](pravo/) | Право на дело | PHP, MySQL, JavaScript |

## Просмотр
Откройте [главную страницу портфолио](index.html). Каждый каталог содержит свой интерфейс и README с инструкцией запуска.

## Текущая реализация
- PHP-сайты отправляют формы в PHP API, который валидирует входные данные и сохраняет заявки через PDO в MySQL.
- React-проекты используют Express REST API и PostgreSQL для создания, чтения, обновления статусов и удаления записей.
- Для React-проектов предусмотрен Vite dev proxy на API порт 3001.

Это учебные/портфолио-демонстрации. Для публичной эксплуатации добавьте аутентификацию, разграничение ролей, защиту от CSRF, rate limiting, production-конфигурацию CORS и резервное копирование БД. Не используйте демонстрационные интерфейсы как готовую защищённую CRM или систему бронирования.
