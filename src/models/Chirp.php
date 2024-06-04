<?php
  namespace Models;
  use DateTime;

  class Chirp 
  {
    private int $id;
    private string $message;
    private string $author;
    private DateTime $publishDate;
    private int|null $likes;

    public function __construct(int $id, string $message, string $author, DateTime $publishDate, int|null $likes)
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

    public function getMessage(): string{
      return $this->message;
    }

    public function getAuthor(): string{
      return $this->author ;
    }

    // public function getPublishDate(): DateTime {
    //   return $this->publishDate;
    // }

    // public function getLikes(): int|null {
    //   return $this->likes;
    // }
  }
?>