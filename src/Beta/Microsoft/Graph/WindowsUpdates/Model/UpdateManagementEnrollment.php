<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UpdateManagementEnrollment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* UpdateManagementEnrollment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UpdateManagementEnrollment extends UpdatableAssetEnrollment
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.windowsUpdates.updateManagementEnrollment");
    }


    /**
    * Gets the updateCategory
    *
    * @return UpdateCategory The updateCategory
    */
    public function getUpdateCategory()
    {
        if (array_key_exists("updateCategory", $this->_propDict)) {
            if (is_a($this->_propDict["updateCategory"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\UpdateCategory")) {
                return $this->_propDict["updateCategory"];
            } else {
                $this->_propDict["updateCategory"] = new UpdateCategory($this->_propDict["updateCategory"]);
                return $this->_propDict["updateCategory"];
            }
        }
        return null;
    }

    /**
    * Sets the updateCategory
    *
    * @param UpdateCategory $val The value to assign to the updateCategory
    *
    * @return UpdateManagementEnrollment The UpdateManagementEnrollment
    */
    public function setUpdateCategory($val)
    {
        $this->_propDict["updateCategory"] = $val;
         return $this;
    }
}
