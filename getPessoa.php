<?php

    include_once 'conexao.php';

    // Consulta para selecionar os dados
    $query = "SELECT * FROM pessoas";
    $result = mysqli_query($connection, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['sobrenome'] . "</td>";
            echo "<td>" . $row['idade'] . "</td>";
            echo "</tr>";
        }

        // Liberar resultado
        mysqli_free_result($result);
    } else {
        echo "Erro na consulta: " . mysqli_error($connection);
    }

    // Fechar conexão
    mysqli_close($connection);
    

?>