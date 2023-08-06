<?php

$menus = [
    [
        'url' => 'base.php?page=home',
        'icon' => '<i class="fa-solid fa-house" ></i>',
        'description' => 'Home',
    ],
    [
        'url' => 'base.php?page=acervo',
        'icon' => '<i class="fa-solid fa-book"></i>',
        'description' => 'Acervo',
    ],
    [
        'url' => 'base.php?page=alunos',
        'icon' => '<i class="fa-solid fa-graduation-cap"></i>',
        'description' => 'Alunos',
    ],
    [
        'url' => 'base.php?page=emprestimo',
        'icon' => '<i class="fa-solid fa-arrow-right-arrow-left"></i>',
        'description' => 'Empréstimos',
    ],
    [
        'url' => 'base.php?page=atribuidos',
        'icon' => '<i class="fa-solid fa-hourglass-half"></i>',
        'description' => 'Atribuídos',
    ],
    [
        'url' => 'base.php?page=pendentes',
        'icon' => '<i class="fa-solid fa-circle-exclamation"></i>',
        'description' => 'Pendentes',
    ],
    [
        'url' => 'base.php?page=entregues',
        'icon' => '<i class="fa-solid fa-user-check"></i>',
        'description' => 'Entregues',
    ],                     
];


foreach ($menus as $key => $value) {

    echo '<a href="' . $value['url'] . '" > 
    <button class=" bntPag mx-3">
    ' . $value['description'] . '
    <span style="font-size:15px">' . $value['icon'] . '</span>
    </button>
</a>';
};