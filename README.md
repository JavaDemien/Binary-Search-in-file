# Test OOP Binary Search by Demien
Бинарный поиск в файле (Class BinarySearch).
При обновлении страницы создается файл с ключами и значениями keydata.txt (Class KeyGenerator).
Принцип работы: 
В поле Enter the searchable key вводится ключ.
Далее через AJAX запрос форма направляет данные в контроллер (controler.php).
Файл загружается на сервер в папку data
Вызывается метод класса BinarySearch (binarySearchByKey()), который принимает два параметра локальный адрес файла и введенный в форме ключ.
Результат поиска возвращается через AJAX в форму.




