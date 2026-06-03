CRUD 02 - Exclusão de Usuários
Alunos: Arthur 
Data: 03/06/2026

Descrição
Evolução do CRUD 01 com a adição da funcionalidade de exclusão de usuários no banco de dados e readme.

Tecnologias

HTML5 + Bootstrap 5.3.3
PHP
MySQL


Como rodar

Clone o repositório
Importe o banco de dados no MySQL
Configure a conexão em config/conexao.php
Abra no navegador via XAMPP ou Laragon


Como a exclusão foi implementada
Na listagem de usuários, cada linha tem um botão Excluir que envia o id para o arquivo excluir.php, que executa o DELETE no banco.
php$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

Arquivos alterados

index.php — adicionado botão de excluir
excluir.php — arquivo criado com a lógica de exclusão
