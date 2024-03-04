   <?php
        require_once 'produtos.php';
        require_once '01.php';
        require_once '02.PHP';
        
        function solicitar(){
        $cadastramentoDesc = readline("Diga a descricao que voce quer cadastrar: ");
        $cadastramentoPreco = (float) readline("Diga o preco que voce quer cadastrar: ");
        $cadastramentoEstoque = (int) readline("Diga a quantidade de estoque que voce quer cadastrar: ");
        $cadastramentoCodigo = (int) readline("Digite o codigo que voce quer cadastrar: ");

        $arrNovo = [
            'codigo' => $cadastramentoCodigo,
            'preco' => $cadastramentoPreco,
            'descricao' => $cadastramentoDesc,
            'Estoque' => $cadastramentoEstoque
        ];
    }

        function cadastrar( &$produtos){
            $arrNovo = solicitar();
            $produtos [] = $arrNovo;
        }
   ?>