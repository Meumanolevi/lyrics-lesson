<?php
$numero = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada em PHP com Bootstrap</title>
    <!-- Importando Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    
    <div class="card shadow-lg p-4" style="width: 400px; border-radius: 15px;">
        <h2 class="text-center mb-3 text-dark">Gerador de Tabuada</h2>
        
        <form method="post" action="">
            <div class="mb-3">
                <input type="number" name="numero" class="form-control" placeholder="Digite um número" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Gerar</button>
            </div>
        </form>

        <?php if ($numero !== null): ?>
            <div class="mt-4">
                <h5 class="text-center text-dark">Tabuada do <?php echo $numero; ?>:</h5>
                <ul class="list-group mt-2">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <li class="list-group-item">
                            <?php echo "$numero x $i = " . ($numero * $i); ?>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
