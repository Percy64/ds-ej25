<?php
require_once 'modelo/provincia.php';
require_once 'modelo/direccion.php';
require_once 'modelo/titular.php';
require_once 'modelo/lineaprestamo.php';
require_once 'modelo/prestamo.php';

$l=new lineaprestamo();
$l->id=1;
$l->descripcion='Personal Sola Firma';
$l->tazaefectivamensual='15%';

$pr=new provincia();
$pr->id=1;
$pr->descripcion='santa fe';

$d=new direccion();
$d->id=1;
$d->calle='montevideo';
$d->numero=34;
$d->localidad='rosario';
$d->provincia=$pr;

$t=new titular();
$t->id=1;
$t->nombre='daniel';
$t->apellido='rodriguez';
$t->documento=123456789;
$t->direccion=$d;



$p=new prestamo;
$p->id=1;
$p->lineaprestamo=$l;
$p->titular=$t;
$p->fechaalta='21/08/2019';
$p->cantidadcuotas=36;
$p->montocapital=10000;
$p->mostrardatos();