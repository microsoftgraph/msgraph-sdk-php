<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppliedCategory File
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
* AppliedCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppliedCategory extends FilePlanDescriptorBase
{

    /**
    * Gets the subCategory
    * Represents the file plan descriptor for a subcategory under a specific category, which has been assigned to a particular retention label.
    *
    * @return SubCategory|null The subCategory
    */
    public function getSubCategory()
    {
        if (array_key_exists("subCategory", $this->_propDict)) {
            if (is_a($this->_propDict["subCategory"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubCategory") || is_null($this->_propDict["subCategory"])) {
                return $this->_propDict["subCategory"];
            } else {
                $this->_propDict["subCategory"] = new SubCategory($this->_propDict["subCategory"]);
                return $this->_propDict["subCategory"];
            }
        }
        return null;
    }

    /**
    * Sets the subCategory
    * Represents the file plan descriptor for a subcategory under a specific category, which has been assigned to a particular retention label.
    *
    * @param SubCategory $val The value to assign to the subCategory
    *
    * @return AppliedCategory The AppliedCategory
    */
    public function setSubCategory($val)
    {
        $this->_propDict["subCategory"] = $val;
         return $this;
    }
}
