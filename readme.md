# Хелперы для Laravel Framework

## Хелперы пользователя

- is_auth()
- user()

## Денежные хелперы

- format_price($value)
- str_price($value)

## Хелперы для работы с датой и временем

- dateFormat($format, $date)
- milliseconds()

## Хелперы для работы с JSON

Всё отличие от стандартных функций в том, что они передаются с опцией `JSON_UNESCAPED_UNICODE` для читабельности кириллицы

- jsonEncode($value)
- jsonDecode($json, $assoc = false)
- responseJson($data = [], $status = 200)
