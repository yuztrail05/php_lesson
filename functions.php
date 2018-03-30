<?php
require('connection.php');

function create($data) {
  insertDb($data['todo']);  
}

function index() {
  return $todos = selectAll();
}

function update($data) {
  updateDb($data['id'], $data['todo']);
}

function detail($id) {
  return getSelectData($id);
}

function checkRefer() {
  $httpArr = parse_url($_SERVER['HTTP_REFERER']);
  return $res = transition($httpArr['path']);
}

function transition($path) {
  $data = $_POST;
  if($path === '/new.php') {
    create($data);
  }else if($path === '/edit.php') {
    update($data);
  }
}
?>