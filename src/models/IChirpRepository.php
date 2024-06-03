<?php
  interface IChirpRepository
  {
    public function getAllChirps();
    public function getChirpByID(int $id);
  }
?>