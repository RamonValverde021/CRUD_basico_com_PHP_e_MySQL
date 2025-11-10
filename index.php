<pre>
    <?php
    $host = "localhost"; // host = onde está hospedado meu banco de dados
    $usuario = "root";   // usuario = usuario do servidor de banco de dados (XAMPP)
    $senha = "";         // senha = senha do servidor (XAMPP)
    $nome_banco = "bd_crud"; // banco = nome do banco de dados

    $banco = new mysqli($host, $usuario, $senha, $nome_banco); // banco é um novo objeto que vem da classe mysqli

    if ($banco->connect_errno) {  // -> referencia ao objeto, em JAVA usa (.)
        echo "<p>Encontrei um erro: $banco->errno --> $banco->connect_error</p>";
        die();   // Finaliza todo o programa para ele parar de tentar se conectar ao banco de dados
    } else {
        //echo "<p>Tudo ok na conexão com o banco de dados!</p>";
    }

    $busca = $banco->query("SET NAMES 'utf8'");
    $busca = $banco->query("SET character_set_connection=utf8");
    $busca = $banco->query("SET character_set_client=utf8");
    $busca = $banco->query("SET character_set_results=utf8");

    /*
    // Listagem simples com filtro por nome
    $nome = "Patrícia Castro' or '1'='1";                               // Query de SQL Injection (nome = '' or '1'='1') que faz retornar todos os elemento da tabela
    $query = "SELECT * FROM usuarios WHERE nome = '{$nome}'";
    $busca = $banco->query($query);                                     // Executa a query SQL completa no banco de dados.
    if (!$busca) {                                                      // Verifica se a consulta ao banco de dados falhou.
        echo "<tr><td>Falha na busca! " . $banco->error . "</td></tr>"; // Exibe uma mensagem de erro se a consulta falhar.
    } else {                                                            // Se a consulta foi bem-sucedida...
        if ($busca->num_rows == 0) {                                    // Verifica se a consulta não retornou nenhum registro (nenhum jogo encontrado).
            echo "<tr><td>Nenhum registro encontrado!</td></tr>";       // Exibe uma mensagem informando que nenhum jogo foi encontrado.
        } else {                                                        // Se encontrou um ou mais jogos...
            while ($linha = $busca->fetch_object()) {
                echo "<pre>{$linha->nome} - {$linha->idade} - {$linha->email} <br>";
            }
            echo "</pre>";
        }
    }
*/

    // Listagem simples com proteção contra SQL Injection
    //$nome = "Patrícia Castro' or '1'='1";    // Query de SQL Injection (nome = '' or '1'='1') que faz retornar todos os elemento da tabela
    $nome = "Patrícia Castro";
    $query = "SELECT * FROM usuarios WHERE nome = ?"; // Query de proteção contra SQL Injection

    $stmt = $banco->prepare($query);  // Preparar a query para ser executada no banco de dados
    $stmt->bind_param("s", $nome);
    $busca = $stmt->execute(); // Executa a query SQL completa no banco de dados.
    $busca = $stmt->get_result();

    if (!$busca) {                                                      // Verifica se a consulta ao banco de dados falhou.
        echo "<tr><td>Falha na busca! " . $banco->error . "</td></tr>"; // Exibe uma mensagem de erro se a consulta falhar.
    } else {                                                            // Se a consulta foi bem-sucedida...
        if ($busca->num_rows == 0) {                                    // Verifica se a consulta não retornou nenhum registro (nenhum jogo encontrado).
            echo "<tr><td>Nenhum registro encontrado!</td></tr>";       // Exibe uma mensagem informando que nenhum jogo foi encontrado.
        } else {                                                        // Se encontrou um ou mais jogos...
            while ($linha = $busca->fetch_object()) {
                echo "<pre>{$linha->nome} - {$linha->idade} - {$linha->email} <br>";
            }
            echo "</pre>";
        }
    }

    ?>
</pre>