<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessLocations File
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
* ConditionalAccessLocations class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessLocations extends Entity
{
    /**
    * Gets the includeLocations
    *
    * @return string The includeLocations
    */
    public function getIncludeLocations()
    {
        if (array_key_exists("includeLocations", $this->_propDict)) {
            return $this->_propDict["includeLocations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeLocations
    *
    * @param string $val The value of the includeLocations
    *
    * @return ConditionalAccessLocations
    */
    public function setIncludeLocations($val)
    {
        $this->_propDict["includeLocations"] = $val;
        return $this;
    }
    /**
    * Gets the excludeLocations
    *
    * @return string The excludeLocations
    */
    public function getExcludeLocations()
    {
        if (array_key_exists("excludeLocations", $this->_propDict)) {
            return $this->_propDict["excludeLocations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeLocations
    *
    * @param string $val The value of the excludeLocations
    *
    * @return ConditionalAccessLocations
    */
    public function setExcludeLocations($val)
    {
        $this->_propDict["excludeLocations"] = $val;
        return $this;
    }
}
