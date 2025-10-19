<?php include 'header.php'; ?>

<div class="container mt-5">
    
    <div class="row justify-content-center"> 
        
        <div class="col-md-7 mx-auto p-4 rounded shadow bg-white text-center"> 
            
            <h1 class="text-center display-6 mb-3 text-primary">Quer descobrir o seu Signo?</h1>
            <p class="lead text-secondary text-center mb-4">
                Insira sua data de nascimento para calcular.
            </p>

            <form id="signo-form" method="POST" action="show_zodiac_sign.php">
                
                <div class="mb-3">
                    <label for="data_nascimento" class="form-label d-block text-center">
                        Digite conforme exemplo: (dd/mm/aaaa):
                    </label>
                    <input 
                        type="date" 
                        class="form-control mx-auto w-50" 
                        id="data_nascimento" 
                        name="data_nascimento" 
                        required
                    >
                    </div>

                <button type="submit" class="btn btn-primary btn-lg mt-3">
                    Descobrir Signo
                </button>
            </form>
            
        </div>
    </div> 
</div> 
<?php include 'footer.php'; ?>