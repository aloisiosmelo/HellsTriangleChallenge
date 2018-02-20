<?php
class HellsTriangleChallenge {
  // Função que calcula a soma
  public function somaTriangulo($triangulo){

    /*
      A grande sacada está no fato de usar a técnica de programação dinâmica e
      percorrendo de baixo pra cima do array do triângulo.

    */

  	for($row = count($triangulo) - 2; $row >=0; $row--) {

  		for($column=0;$column <=$row;$column++) {

  			$esquerda  = $column;
  			$direita   = $column+1;
        // Aqui se escolhe o maior de dois
  			$triangulo[$row][$column] += max($triangulo[$row+1][$esquerda], $triangulo[$row + 1][$direita]);

  		}
  	}
  	return $triangulo[0][0];
  }
}
