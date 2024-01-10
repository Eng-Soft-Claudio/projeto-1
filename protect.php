
        <?php       
        
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['id'])){
                die("Não foi encontrado um login válido!<p><a href=\"index.php\">Voltar</a></p>");        
            } 
        
        ?>
   