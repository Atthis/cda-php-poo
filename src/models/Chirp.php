<?php
  class Chirp 
  {
    private int $id;
    private string $message;
    private string $author;
    private DateTime $publishDate;
    private int $likes;

    public function __construct(int $id, string $message, string $author, DateTime $publishDate, int $likes)
    {
      $this->id = $id;
      $this->message = $message;
      $this->author = $author;
      $this->publishDate = $publishDate;
      $this->likes = $likes;
    }

    // public function getId(): int {
    //   return $this->id;
    // }

    // public function getMessage(): string{
    //   return $this->message;
    // }

    // public function getAuthor(): string{
    //   return $this->author ;
    // }

    // public function getPublishDate(): DateTime {
    //   return $this->publishDate;
    // }

    // public function getLikes(): int {
    //   return $this->likes;
    // }
  }
?>