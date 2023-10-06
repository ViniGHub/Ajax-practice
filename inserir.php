<?php
/**
 * @var PDO $pdo
 */
header('Content-Type: application/json');
require_once 'conexao.php';

$name = $_POST['name'];
$comment = $_POST['comment'];

$stmt = $pdo->prepare('INSERT INTO TB_COMMENTS (nome, comments) VALUES (:na, :co)');
$stmt->bindValue(':na', $name);
$stmt->bindValue(':co', $comment);

if ($stmt->execute()) {
    echo json_encode('Comentário Salvo com Sucesso');
} else {
    echo json_encode('Falha ao salvar comentário');
}
