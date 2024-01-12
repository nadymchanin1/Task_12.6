<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

function getFullnameFromParts($surname, $name, $patronymic) {
    return "$surname $name $patronymic";
}

function getPartsFromFullname($fullname) {
    $parts = explode(' ', $fullname, 3);
    $result = [
        'surname' => $parts[0],
        'name' => $parts[1],
        'patronymic' => $parts[2],
    ];
    return $result;
}

foreach ($example_persons_array as $person) {
    $fullname = $person['fullname'];
    $parts = getPartsFromFullname($fullname);

    echo "Объединённое ФИО: $fullname<br>";
    echo "Разбитое ФИО: ", "Фамилия: {$parts['surname']}, Имя: {$parts['name']}, Отчество: {$parts['patronymic']}<br>";

    echo "<br>";
}

function getShortName($fullname) {
    $parts = getPartsFromFullname($fullname);

    $shortName = "{$parts['name']} " . mb_substr($parts['surname'], 0, 1, 'UTF-8') . ".";
    return $shortName;
}

// Вызываем каждое имя по очереди
foreach ($example_persons_array as $person) {
    $fullname = $person['fullname'];

    $shortName = getShortName($fullname);

    echo "Сокращенное ФИО: $shortName<br>";

    echo "<br>";
}
    