<?php

  class Crud{
    public $con;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'jquery';

    //객체가 생성될때 호출
    function __construct(){
      $this->database_connect();
    }

    //db연결 함수
    public function database_connect(){
      $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    //퀴리실행함수
    public function execute_query($query){
      return mysqli_query($this->con, $query);
    }

    //퀴리실행함수
    public function execute_query_cnt($query){
      return mysqli_num_rows(mysqli_query($this->con, $query));
    }

  }

 ?>
