<?php

require_once 'repositorioFrases.php';

use acme\repositorioException as repositorioException;
use acme\repositorioFrases as repositorioFrases;

class repositorioEmBancoDeDados implements repositorioFrases
{
  private $pdo = null;

  function __construct(Pdo $pdo)
  {
    $this->pdo = $pdo;
  }

  function removerFraseComNotaMenorOuIgualA(int $nota)
  {
    try {
      $this->pdo->beginTransaction();
      $ps = $this->pdo->prepare('DELETE FROM FRASES WHERE NOTA <= ?');
      $ps->execute([$nota]);
      $this->pdo->commit();
      if ($ps->rowCount() < 1) {
        return false;
      }
      return true;
    } catch (PDOException $e) {
      $this->rollback();
      return false;
      throw new repositorioException($e->getMessage());
    }
  }


  function atualizar($autor, $frase, $id)
  {
    try {
      $sql = 'UPDATE FRASES SET AUTOR = ? FRASE = ? WHERE ID = ?';
      $ps = $this->pdo->prepare($sql);
      $ps->execute([$autor, $frase, $id]);
      return true;
    } catch (PDOException $e) {
      return false;
      throw new repositorioException($e->getMessage());
    }
  }

  function cadastrar($autor, $frase)
  {
    try {
      $sql = 'INSERT INTO FRASES(AUTOR, FRASE) VALUES(?, ?)';
      $ps = $this->pdo->prepare($sql);
      $ps->execute([$autor, $frase]);
      return true;
    } catch (PDOException $e) {
      return false;
      throw new repositorioException($e->getMessage());
    }
  }

  function obterTodos()
  {
    $ps = $this->pdo->prepare('SELECT * FROM game');
    $ps->setFetchMode(
      PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
      'Game'
    );
    $ps->execute();
    return $ps->fetchAll();
  }
}
