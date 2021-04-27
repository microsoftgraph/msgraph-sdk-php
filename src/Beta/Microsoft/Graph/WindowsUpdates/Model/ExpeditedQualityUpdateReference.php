<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpeditedQualityUpdateReference File
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
* ExpeditedQualityUpdateReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExpeditedQualityUpdateReference extends QualityUpdateReference
{

    /**
    * Gets the equivalentContent
    *
    * @return EquivalentContentOption The equivalentContent
    */
    public function getEquivalentContent()
    {
        if (array_key_exists("equivalentContent", $this->_propDict)) {
            if (is_a($this->_propDict["equivalentContent"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\EquivalentContentOption")) {
                return $this->_propDict["equivalentContent"];
            } else {
                $this->_propDict["equivalentContent"] = new EquivalentContentOption($this->_propDict["equivalentContent"]);
                return $this->_propDict["equivalentContent"];
            }
        }
        return null;
    }

    /**
    * Sets the equivalentContent
    *
    * @param EquivalentContentOption $val The value to assign to the equivalentContent
    *
    * @return ExpeditedQualityUpdateReference The ExpeditedQualityUpdateReference
    */
    public function setEquivalentContent($val)
    {
        $this->_propDict["equivalentContent"] = $val;
         return $this;
    }
}
