<?php include 'header.php'; ?> 
    
<div class="container mt-5">
    <div class="row justify-content-center"> 
        <div class="col-md-8 mx-auto p-4 rounded shadow bg-white text-center"> 
            
            <?php 
            $data_nascimento = $_POST['data_nascimento']; 
            $signos = simplexml_load_file("signos.xml");
            $data_nascimento = new DateTime($data_nascimento);
            $signo_encontrado = false;

            foreach ($signos->signo as $signo) {

                $data_Inicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
                $data_Fim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);

                if ($data_Inicio === false || $data_Fim === false) {
                    continue;
                }

                $data_Inicio->setDate($data_nascimento->format('Y'), $data_Inicio->format('m'), $data_Inicio->format('d'));
                $data_Fim->setDate($data_nascimento->format('Y'), $data_Fim->format('m'), $data_Fim->format('d'));

                $encontrou = false;

                if ($data_Inicio > $data_Fim) {
                    if ($data_nascimento >= $data_Inicio || $data_nascimento <= $data_Fim) {
                        $encontrou = true;
                    }
                } 
                else {
                    if ($data_nascimento >= $data_Inicio && $data_nascimento <= $data_Fim) {
                        $encontrou = true;
                    }
                }

                if ($encontrou) {
                    $signo_encontrado = true;
                    break;
                }
            }
            ?>

            <h1 class="display-5 text-dark">Seu signo é:</h1>

            <?php if ($signo_encontrado): ?>
                
                <h2 class="display-4 text-success my-4">
                    <?php echo $signo->signoNome; ?> 
                </h2>
                
                <p class="text-muted text-justify mb-4">
                    <?php echo $signo->descricao; ?> 
                </p>

            <?php else: ?>

                <p class="alert alert-danger p-3 my-4">
                    Não foi possível determinar seu signo. Por favor, verifique a data informada!
                </p>

            <?php endif; ?>

            <a href="index.php" class="btn btn-secondary mt-3">
                Voltar
            </a>
            
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>