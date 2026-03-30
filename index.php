<?php
// --- CONFIGURAÇÕES ---
$nomeSite = "Seu Projeto"; // Altere aqui o nome
$anoAtual = date('Y');

// --- SEO: AVISO DE MANUTENÇÃO (503) ---
http_response_code(503);
header('Retry-After: 86400');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Em Breve | <?php echo $nomeSite; ?></title>
    <style>
        /* Reset & Base */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #0f0f13;
            color: #e0e0e0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Efeito de Fundo (Orb) */
        .orb {
            position: absolute;
            width: 700px;
            height: 700px;
            background: radial-gradient(circle, rgba(68, 92, 233, 0.12) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            z-index: -1;
            animation: pulse 8s ease-in-out infinite;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Container de Conteúdo */
        .container {
            padding: 2rem;
            max-width: 700px;
            z-index: 1;
            animation: fadeIn 1.5s ease-out;
        }

        /* Título Principal */
        h1 {
            font-size: 4rem; /* Aumentei levemente para preencher o espaço */
            font-weight: 800;
            margin-bottom: 1rem;
            background: -webkit-linear-gradient(45deg, #fff, #777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -2px;
            line-height: 1.1;
        }

        /* Subtítulo */
        p.subtitle {
            font-size: 1.35rem;
            color: #888;
            font-weight: 300;
            line-height: 1.6;
        }

        /* Rodapé */
        footer {
            position: absolute;
            bottom: 30px;
            font-size: 0.85rem;
            color: #444;
            letter-spacing: 0.5px;
        }

        /* Animações */
        @keyframes pulse {
            0% { transform: translate(-50%, -50%) scale(1); opacity: 0.8; }
            50% { transform: translate(-50%, -50%) scale(1.15); opacity: 1; }
            100% { transform: translate(-50%, -50%) scale(1); opacity: 0.8; }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsividade */
        @media (max-width: 600px) {
            h1 { font-size: 2.8rem; }
            p.subtitle { font-size: 1.1rem; }
            .orb { width: 400px; height: 400px; }
        }
    </style>
</head>
<body>

    <div class="orb"></div>

    <div class="container">
        <h1><?php echo $nomeSite; ?></h1>
        <p class="subtitle">Estamos atualizando nossa plataforma.<br>O futuro chega em breve.</p>
    </div>

    <footer>
        &copy; <?php echo $anoAtual; ?> <?php echo $nomeSite; ?>.
    </footer>

</body>
</html>