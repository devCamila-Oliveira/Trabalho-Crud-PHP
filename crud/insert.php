<?php
    $use trabalhophp;

    $CREATE TABLE `pessoa` (
      `CPF` varchar(20) NOT NULL,
      `nomePessoa` varchar(100) NOT NULL,
      `idadePessoa` varchar(2) NOT NULL
    );
    
    $INSERT INTO `pessoa` (`CPF`, `nomePessoa`, `idadePessoa`) VALUES
    ('987654321', 'John B', 29),
    ('123098543', 'JayJay', 19);

?>
