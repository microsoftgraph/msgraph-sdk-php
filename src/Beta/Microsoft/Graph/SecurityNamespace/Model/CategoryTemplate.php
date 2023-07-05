<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CategoryTemplate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* CategoryTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CategoryTemplate extends FilePlanDescriptorTemplate
{

     /**
     * Gets the subCategories
    * Represents all subcategories under a particular category.
     *
     * @return array|null The subCategories
     */
    public function getSubCategories()
    {
        if (array_key_exists("subCategories", $this->_propDict)) {
           return $this->_propDict["subCategories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subCategories
    * Represents all subcategories under a particular category.
    *
    * @param SubCategoryTemplate[] $val The subCategories
    *
    * @return CategoryTemplate
    */
    public function setSubCategories($val)
    {
        $this->_propDict["subCategories"] = $val;
        return $this;
    }

}
