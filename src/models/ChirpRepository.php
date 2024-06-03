<?php

  require_once 'IChirpRepository.php';
  require_once  'Chirp.php';

  class ChirpRepository implements IChirpRepository
  {
    private PDO $db;

    public function __construct(PDO $db)
    {
      $this->db = $db;
    }

    private function generateChirpObject (int $id, string $message, string $author, DateTime $publishDate, int $likes)
    {
      return new Chirp($id, $message, $author, $publishDate, $likes);
    }

    public function getAllChirps()
    {
      try {
        $request = $this->db->prepare("
          SELECT id, message, author, date, likes
          FROM chirp
        ");

        $request->execute();

        $data = $request->fetchAll(
          PDO::FETCH_FUNC,
          array($this, 'generateChirpObject')
        );

        return $data;
      } catch(PDOException $err) {
        echo $err->getMessage();
      }
    }

    public function getChirpByID(int $id)
    {
      try {
        $request = $this->db->prepare("
          SELECT id, message, author, date, likes
          FROM chirp
          WHERE id = :id
        ");

        $request->execute(array(
          'id' => $id
        ));
        
        $chirp = $request->fetch(PDO::FETCH_OBJ);

        if(empty($chirp)) {
          return null;
        }

        $data = $this->generateChirpObject($chirp->id, $chirp->message, $chirp->author, $chirp->publishDate, $chirp->likes);

        return $data;
      } catch(PDOException $err) {
        echo $err->getMessage();
      }
    }
  }
?>