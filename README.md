# ExLazWebFMySQL

Учебная программа, показывающая на примере, как можно сделать свой Web server в среде разработки Lazarus с использованием библиотеки Synapse и подключением препроцессора PHP.

Главное окно программы, где можно управлять своим веб-сервером:

![scr1](https://user-images.githubusercontent.com/10297748/172843539-8bf65628-db09-4902-b7b3-77bdd74b482c.png)

Исходники показывают, как можно обойтись без сервера Apache. Для работы программы необходимо выполнить скрипт test.sql из каталога с исходниками и отредактировать путь к PHP в файле print.bat - при необходимости. Результат работы веб-сервера с подключением к MySQL из PHP (драйвер PDO) демонстрируется в браузере, далее.

![scr2](https://user-images.githubusercontent.com/10297748/159930903-0414bccd-eb22-4f0e-a5fa-41020514b909.png)

Программа гарантированно компиллируется в среде разработки Lazarus 2.0.12 с подключением библиотеки Synapse 40 и предустановленным PHP из комплекта XAMPP Control Panel 3.2.4. 
