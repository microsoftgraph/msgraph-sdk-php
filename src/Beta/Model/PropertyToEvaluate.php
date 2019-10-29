<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PropertyToEvaluate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* PropertyToEvaluate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PropertyToEvaluate extends Entity
{
    /**
    * Gets the propertyName
    *
    * @return string The propertyName
    */
    public function getPropertyName()
    {
        if (array_key_exists("propertyName", $this->_propDict)) {
            return $this->_propDict["propertyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyName
    *
    * @param string $val The value of the propertyName
    *
    * @return PropertyToEvaluate
    */
    public function setPropertyName($val)
    {
        $this->_propDict["propertyName"] = $val;
        return $this;
    }
    /**
    * Gets the propertyValue
    *
    * @return string The propertyValue
    */
    public function getPropertyValue()
    {
        if (array_key_exists("propertyValue", $this->_propDict)) {
            return $this->_propDict["propertyValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyValue
    *
    * @param string $val The value of the propertyValue
    *
    * @return PropertyToEvaluate
    */
    public function setPropertyValue($val)
    {
        $this->_propDict["propertyValue"] = $val;
        return $this;
    }
}
