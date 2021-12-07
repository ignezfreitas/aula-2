<?php

/* Criar variáveis

$nomeDaVariavel = conteúdo;

Regras :
- inicializar com $ 
- Não pode começar por número
- utilizar o tratamento CamelCase
- Não pode ter acentos, espaços, símbolos *(_ + # @ ! >)
1bim - errado
$bim1 = 7.5; -  certo
$nome do aluno = "Juan"; - Errado
$nomedoaluno = "Juan Pablo"; - é correto mas não tá certo
$nomeDoAluno = "Márcia";
*/
$bim1 = 8.2;
$nome = "Ignez Rodrigues";
$idade = 31;
$profissao = "estudante";
$salario = 5000.00;
#comando de saída de tela
echo "{$bim1} <br>";
echo $nome;
/* linha de comentário*/
# Comentário de linha única
echo "Me chamo {$nome} tenho {$idade} sou {$profissao} e ganho R$ {$salario}";
echo "<hr>";

$nota1 = 5;
$nota2 = 5;
$nota3 = 5;
$nota4 = 5;
$media = ($nota1+$nota2+$nota3+$nota4)/4;
echo " sua média final foi: {$media}";
echo "<hr>";



