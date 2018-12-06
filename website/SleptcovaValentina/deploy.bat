cd ..\..
<<<<<<< HEAD


echo Глобальная настйрока переменных, достаточно выполнить 1 раз

git config --global user.name NEFUmasters
git config --global user.email study.svfu@gmail.com


echo Добавим трекинг всех новых файлов

git add -A


=======
echo Глобальная настйрока переменных, достаточно выполнить 1 раз
git config --global user.name NEFUstudent
git config --global user.email study.svfu@gmail.com
echo Добавим трекинг всех новых файлов
git add -A
>>>>>>> 581510716b3d0a4b4551d11eee96c0887cead388
echo Коммит всех локальных изменений, не забываем в комментарии указывать суть внесенных изменений

git commit -a -m "comething new"


echo Объединяем все изменения из удаленного репозитория с локальной версией

git pull origin master


echo Применение коммита, мерж локальных измнений в удаленный репозиторий
git push origin master
