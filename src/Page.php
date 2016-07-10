<?php
/**
 * Contains the Page.php class.
 *
 * @copyright   Copyright (c) 2016 Attila Fulop
 * @author      Attila Fulop
 * @license     Proprietary
 * @since       2016-07-10
 *
 */


namespace Konekt\Kontent\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Konekt\Kontent\ContentInterface;
use Konekt\Kontent\SingularInterface;
use Konekt\Kontent\SingularTrait;

class Page extends Model implements ContentInterface, SingularInterface
{
    use SingularTrait;

    protected $guarded = ['id'];

    public function translationOf()
    {
        
    }

}