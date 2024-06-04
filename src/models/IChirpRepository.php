<?php
  namespace Models;

  use Models\Chirp;

  interface IChirpRepository
  {
    public function getAll();
    public function getByID(int $id);
    public function create(Chirp $chirp);
    // public function update(Chirp $chirp);
    // public function delete(int $id);
  }
?>