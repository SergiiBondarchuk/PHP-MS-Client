<?php
/**
 * Created by PHPStorm.
 * User: Serhii Kondratovec
 * Email: sergey@spheremall.com
 * Date: 13.10.2017
 * Time: 19:10
 */

namespace SphereMall\MS\Resources\Products;

use SphereMall\MS\Entities\AttributeDisplayType;
use SphereMall\MS\Resources\Resource;

/**
 * Class AttributeDisplayTypesResource
 * @package SphereMall\MS\Resources\Products
 * @method AttributeDisplayType get(int $id)
 * @method AttributeDisplayType[] all()
 * @method AttributeDisplayType update($id, $data)
 * @method AttributeDisplayType create($data)
 */
class AttributeDisplayTypesResource extends Resource
{
    public function getURI()
    {
        return "attributedisplaytypes";
    }

}