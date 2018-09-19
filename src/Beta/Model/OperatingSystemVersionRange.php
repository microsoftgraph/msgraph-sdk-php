<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OperatingSystemVersionRange File
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
* OperatingSystemVersionRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OperatingSystemVersionRange extends Entity
{
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The value of the description
    *
    * @return OperatingSystemVersionRange
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the lowestVersion
    *
    * @return string The lowestVersion
    */
    public function getLowestVersion()
    {
        if (array_key_exists("lowestVersion", $this->_propDict)) {
            return $this->_propDict["lowestVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowestVersion
    *
    * @param string $val The value of the lowestVersion
    *
    * @return OperatingSystemVersionRange
    */
    public function setLowestVersion($val)
    {
        $this->_propDict["lowestVersion"] = $val;
        return $this;
    }
    /**
    * Gets the highestVersion
    *
    * @return string The highestVersion
    */
    public function getHighestVersion()
    {
        if (array_key_exists("highestVersion", $this->_propDict)) {
            return $this->_propDict["highestVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the highestVersion
    *
    * @param string $val The value of the highestVersion
    *
    * @return OperatingSystemVersionRange
    */
    public function setHighestVersion($val)
    {
        $this->_propDict["highestVersion"] = $val;
        return $this;
    }
}
