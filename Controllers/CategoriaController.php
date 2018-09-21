<?php
/**
 * Created by William Tahira Rabaldeli Santos.
 * Company: 2mundos.net
 * Date: 20/09/18
 * Time: 21:01
 */

include_once "/var/www/html/Models/NoticiaModel.php";

class CategoriaController
{
    public function pegaCategorias()
    {
        $model = new NoticiaModel();
        return $model->pegaCategoriaTudo();
    }
}