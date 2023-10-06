<?php

/**
 * @var PDO $pdo
 */

header('Content-Type: application/json');
require_once 'conexao.php';

$stmt = $pdo->prepare('SELECT * FROM TB_COMMENTS');


if ($stmt->execute()) {
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} else {
    echo json_encode('Nenhum comentário encontrado');
}
