<?php
// Устанавливает статус ONLINE в файл status.json
$file = 'status.json';
$content = '{"online": true}';

if (file_put_contents($file, $content) !== false) {
    // Если запись прошла успешно
    http_response_code(200); 
    echo "✅ Статус сайта установлен: ONLINE. Вернуться на главную.";
} else {
    // Если не удалось записать (проверь права доступа!)
    http_response_code(500);
    echo "❌ Ошибка: Не удалось записать в файл status.json. Проверьте права доступа (CHMOD 666 или 777 для status.json).";
}
?>