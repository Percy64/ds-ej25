<?php
class prestamo{
    public $id;
    public $lineaprestamo;
    public $titular;
    public $fechaalta;
    public $cantidadcuotas;
    public $montocapital;
    

    public function mostrardatos()
    {
        

        echo 'id:'. $this->id . '<br>';
        echo 'fecha de alta :'. $this->fechaalta . '<br>';
        echo 'cantidadcuotas'. $this->cantidadcuotas . '<br>';
        echo 'montocapital'. $this->montocapital . '<br>';

        echo 'id:'. $this->titular->id . '<br>';
        echo 'nombre:'. $this->titular->nombre . '<br>';
        echo 'apellido:'. $this->titular->apellido . '<br>';
        echo 'documento'. $this->titular->documento . '<br>';
        echo 'id:'. $this->titular->direccion->id . '<br>';
        echo 'calle:'. $this->titular->direccion->calle . '<br>';
        echo 'numero:'. $this->titular->direccion->numero . '<br>';
        echo 'localidad:'. $this->titular->direccion->localidad . '<br>';
        echo 'id:'. $this->titular->direccion->provincia->id . '<br>';
        echo 'descripcion:'. $this->titular->direccion->provincia->descripcion . '<br>';


        echo 'id:'. $this->lineaprestamo->id . '<br>';
        echo 'descripcion'. $this->lineaprestamo->descripcion . '<br>';
        echo 'taza efectiva mensual'. $this->lineaprestamo->tazaefectivamensual . '<br>';
    }
}