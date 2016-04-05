<?php

class ToDoList
{
  private $user;
  private $completed;
  private $text;

  public functiion gettext()
  {
    return $this->text;
  };

  public functiion erasetask()
  {
    unset $this->completed;
    unset $this->text;
  };

  public functiion modify()
  {
    return $this->text;
  };

  public functiion complete()
  {
      return $this->completed;
  };

};

$todolist = new todolist ();
