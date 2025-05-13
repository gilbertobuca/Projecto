<?php
$data = ['nome' => 'Boss', 'missão' => 'Dominar o PHP'];

ob_start();
print_r($data);
$debugOutput = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
.caixa-debug {
    background-color: #1e1e1e;
    color: #00ff88;
    padding: 15px;
    border-radius: 10px;
    font-family: 'Courier New', monospace;
    font-size: 14px;
    white-space: pre-wrap; /* quebra de linha bonitinha */
    overflow-x: auto;      /* scroll horizontal se precisar */
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    margin-top: 20px;
}
</style>
</head>
<body>
<div class="caixa-debug"><?php echo htmlspecialchars($debugOutput); ?></div>
</body>
</html>