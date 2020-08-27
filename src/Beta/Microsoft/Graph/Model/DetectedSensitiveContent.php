<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectedSensitiveContent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* DetectedSensitiveContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectedSensitiveContent extends DetectedSensitiveContentBase
{

    /**
    * Gets the scope
    *
    * @return SensitiveTypeScope The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "Beta\Microsoft\Graph\Model\SensitiveTypeScope")) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new SensitiveTypeScope($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }

    /**
    * Sets the scope
    *
    * @param SensitiveTypeScope $val The value to assign to the scope
    *
    * @return DetectedSensitiveContent The DetectedSensitiveContent
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
         return $this;
    }
}
