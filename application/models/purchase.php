<?php
/**
* Модель Закупка
*/
class Purchase extends Eloquent
{

    const ST_START = 1;
    const ST_STOP  = 0;
    
    /**
    * Возвращает статус закупки
    * 
    */
    public function status()
    {
        return self::ST_START;
    }
}