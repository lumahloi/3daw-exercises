<?php
session_start();

$autenticado = isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] === true ? 1 : 0;