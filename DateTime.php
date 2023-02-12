<?php

date_default_timezone_set("Asia/Jakarta");
$dateTime = new DateTime();
$dateTime->setDate(2002, 07, 02);
$dateTime->setTime(12, 12, 12);

/**
 * menambahkan 1 tahun
 */
$dateTime->add(new DateInterval('P1Y'));
/**
 * menambahkan 1 bulan
 */
$dateTime->add(new DateInterval('P1M'));
/**
 * menambahkan 1 MINGGU
 */
$dateTime->add(new DateInterval('P1W'));

/**
 * UNTUK MENGURANGI BISA DENGAN
 */
$minus = new DateInterval('P1Y');
$minus->invert = 1;
$dateTime->add($minus);

var_dump($dateTime);