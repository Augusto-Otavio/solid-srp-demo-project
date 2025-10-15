<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Application\UserService;
use App\Domain\UserValidator;
use App\Infra\FileUserRepository;

$file = __DIR__ . '/../storage/users.txt';

$service = new UserService(new FileUserRepository($file), new UserValidator);

$success = $service->register($_POST);

if ($success) {
    http_response_code(201);
    echo 'Usuário cadastrado com sucesso! <br><br> <a href="users.php">Ver usuários cadastrados</a>';
} else {
    http_response_code(422);
    echo 'Falha no cadastro. Verifique os dados e tente novamente. <br><br> <a href="index.php">Voltar</a>';
}
