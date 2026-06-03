<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit;
}

include("../infra/db/connect.php");

if (!isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    header('Location: home.php?erro=id_invalido');
    exit;
}

$id = (int) $_GET['id'];

$stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header('Location: home.php?sucesso=1');
} else {
    header('Location: home.php?erro=1');
}

$stmt->close();
$conn->close();
exit;

<a href="excluir.php?id=<?= $row['id'] ?>"
   onclick="return confirm('Deseja excluir o usuário <?= htmlspecialchars($row['usuario']) ?>?')">
    Excluir
</a>

<?php if (isset($_GET['sucesso'])): ?>
    <p>Usuário excluído com sucesso!</p>
<?php endif; ?>