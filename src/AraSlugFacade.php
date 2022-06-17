<?php
namespace Alik\Araslug;
use Illuminate\Support\Facades\Facade;
class AraSlugFacade extends Facade{

    protected static function getFacadeAccessor(){
        return 'slug';
    }
}