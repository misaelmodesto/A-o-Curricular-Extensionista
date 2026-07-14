<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube de Ciências Cafeína - Calculadora de CO₂</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        /* Estilos Personalizados para o visual lúdico/científico */
        :root {
            --verde-principal: #198754;
            --amarelo-detalhe: #f6e05e;
            --fundo: #edf2f7;
            --fonte-titulo: 'Inter', sans-serif;
        }

        body {
            background-color: var(--fundo);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            color: #2d3748;
        }

        /* Jumbotron/Cabeçalho Amigável */
        .jumbotron {
            background-color: white;
            border-radius: 20px;
            padding: 3rem;
            margin-bottom: 3rem;
            border: 2px solid var(--amarelo-detalhe);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        /* Estilo para a Calculadora Principal */
        .card-calc {
            border: none;
            border-radius: 25px;
            overflow: hidden;
            background-color: white;
        }
        
        .card-calc .card-header {
            background-color: var(--verde-principal);
            color: white;
            padding: 2rem;
            text-align: center;
            border-bottom: 5px solid var(--amarelo-detalhe);
        }

        .card-calc h2 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        /* Campos de Entrada Estilizados */
        .form-label {
            font-weight: bold;
            color: #4a5568;
            font-size: 1.1rem;
        }

        .form-control {
            border-radius: 12px;
            padding: 0.8rem;
            border: 2px solid #e2e8f0;
            font-size: 1.1rem;
        }
        
        .form-control:focus {
            border-color: var(--verde-principal);
            box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
        }

        .btn-success-lg {
            background-color: var(--verde-principal);
            border-radius: 15px;
            padding: 1rem 2rem;
            font-size: 1.3rem;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .btn-success-lg:hover {
            transform: scale(1.05);
            background-color: #157347;
        }

        /* Seção de Dicas (Educação) */
        .secao-dicas {
            background-color: white;
            border-radius: 20px;
            padding: 3rem;
            margin-top: 3rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>

<div class="container py-5">
    
    <header class="jumbotron shadow-lg text-center">
        <div class="row align-items-center">
            <div class="col-lg-8 text-lg-start">
                <h1 class="display-4 text-success fw-bold">Olá, Jovem Cientista! 🔬</h1>
                <p class="lead text-muted">Bem-vindo à ferramenta oficial do Clube de Ciências Cafeína. Na Escola Municipal Miguel Arraes, nós transformamos dados em ação! Vamos descobrir a pegada de carbono dos resíduos que geramos?</p>
                <a href="#calculadora" class="btn btn-warning fw-bold btn-lg">Começar Agora! <i class="bi bi-calculator"></i></a>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0 text-center">
                <i class="bi bi-trash3" style="font-size: 8rem; color: #cbd5e0;"></i>
                <p class="text-secondary fw-bold">Análise de Resíduos ♻️</p>
            </div>
        </div>
    </header>

    <div id="calculadora" class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-7">
            <div class="card shadow card-calc">
                <div class="card-header">
                    <h2>Calculadora de CO₂ <span class="badge bg-warning text-dark">Beta v0.1</span></h2>
                    <p class="mb-0">Insira a quantidade pesada (kg) de cada resíduo.</p>
                </div>
                
                <div class="card-body p-5">
                    
                    <form method="POST" action="">
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><i class="bi bi-receipt-cutoff text-success"></i> Papel e Papelão (kg)</label>
                                <input type="number" step="0.01" name="papel" class="form-control" placeholder="0.00 kg" required>
                                <small class="text-muted">Ex: Cadernos velhos, caixas.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><i class="bi bi-droplet-half text-success"></i> Plásticos (kg)</label>
                                <input type="number" step="0.01" name="plastico" class="form-control" placeholder="0.00 kg" required>
                                <small class="text-muted">Ex: Garrafas, copos descartáveis.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><i class="bi bi-apple text-success"></i> Orgânico/Restos de Comida (kg)</label>
                                <input type="number" step="0.01" name="organico" class="form-control" placeholder="0.00 kg" required>
                                <small class="text-muted">Ex: Cascas, sobras de refeições.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><i class="bi bi-cup-straw text-success"></i> Rejeitos/Misto (kg)</label>
                                <input type="number" step="0.01" name="rejeito" class="form-control" placeholder="0.00 kg" required>
                                <small class="text-muted">Ex: Guardanapos sujos, embalagens mistas.</small>
                            </div>
                        </div>
                        
                        <div class="text-center mt-3">
                            <button type="submit" name="calcular" class="btn btn-success-lg w-100 shadow">Calcular Impacto Ambiental! <i class="bi bi-thermometer-half"></i></button>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['calcular'])) {
                        // Coleta de dados
                        $papel = floatval($_POST['papel']);
                        $plastico = floatval($_POST['plastico']);
                        $organico = floatval($_POST['organico']);
                        $rejeito = floatval($_POST['rejeito']);

                        // ⚠️ Fatores de emissão fictícios e simplificados (necessário pesquisa científica real ⚠️)
                        // kg de CO2e por kg de resíduo
                        $fator_papel = 0.60; 
                        $fator_plastico = 1.35;
                        $fator_organico = 0.25; // Principalmente Metano se não for compostado
                        $fator_rejeito = 0.80; // Média para aterros

                        // Cálculo
                        $emissoes_individuais = [
                            'Papel' => $papel * $fator_papel,
                            'Plástico' => $plastico * $fator_plastico,
                            'Orgânico' => $organico * $fator_organico,
                            'Rejeito' => $rejeito * $fator_rejeito
                        ];

                        $total_emissao = array_sum($emissoes_individuais);

                        // Visualização UX do Resultado
                        echo "<div class='mt-5'>";
                        echo "<div class='alert alert-light border-success p-4 shadow-sm' role='alert'>";
                        echo "<h4 class='alert-heading text-success'><i class='bi bi-patch-exclamation-fill'></i> Resultado da Pesquisa</h4>";
                        echo "<p class='lead mb-1'>A escola emitiu aproximadamente <strong>" . number_format($total_emissao, 2, ',', '.') . " kg de CO₂ equivalente</strong>.</p>";
                        echo "</div>";
                        
                        // Barra de Progresso/Comparações Lúdicas
                        echo "<div class='card card-body bg-light mt-3'>";
                        echo "<p class='fw-bold'>Isso equivale aproximadamente a:</p>";
                        echo "<ul>";
                        echo "<li>" . number_format($total_emissao / 12, 1, ',', '.') . " dias de absorção de carbono por uma árvore adulta madura.</li>";
                        echo "</ul>";
                        echo "<p class='small text-muted'>Nota: Cálculos baseados em fatores de emissão provisórios. Fale com os cientistas do Clube Cafeína!</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <section class="secao-dicas">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="text-success fw-bold">E agora, o que fazemos com esses dados? 💡</h2>
                <p class="text-muted">A ciência não apenas calcula, ela propõe soluções! Veja como você pode agir:</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <i class="bi bi-trash2-fill text-warning" style="font-size: 4rem;"></i>
                <h4 class="mt-3">Reduzir</h4>
                <p class="text-muted">Se a quantidade de papel é alta, que tal incentivarmos mais atividades digitais ou o uso do verso das folhas?</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-patch-question-fill text-warning" style="font-size: 4rem;"></i>
                <h4 class="mt-3">Reaproveitar</h4>
                <p class="text-muted">Muitas caixas de papelão? Podemos transformá-las em materiais didáticos ou itens para oficinas de robótica!</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-recycle text-warning" style="font-size: 4rem;"></i>
                <h4 class="mt-3">Separar Corretamente</h4>
                <p class="text-muted">Se o orgânico é o problema, uma composteira na escola pode transformar restos de comida em adubo para a horta!</p>
            </div>
        </div>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>