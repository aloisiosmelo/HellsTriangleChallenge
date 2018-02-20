<?php
 require_once 'atoum'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'autoloader.php';
 require_once 'HellsTriangleChallenge.php';
 use mageekguy\atoum;
 use vendor\project;

  class HellsTriangleChallengeTest extends atoum\test
  {
      public function testSay()
      {
        $HellsTriangleChallenge = new HellsTriangleChallenge();

        // Triângulo :)
      	$triangulo = array(
      		array(6),
      		array(3,5),
      		array(9,7,1),
      		array(4,6,8,4)
      	);

        // Teste de Saída
        $this->string((string)$HellsTriangleChallenge->somaTriangulo($triangulo))->isEqualTo('26');
      }
  }
