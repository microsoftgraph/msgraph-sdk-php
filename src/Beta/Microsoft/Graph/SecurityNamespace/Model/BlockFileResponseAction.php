<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BlockFileResponseAction File
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
* BlockFileResponseAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BlockFileResponseAction extends ResponseAction
{
    /**
    * Gets the deviceGroupNames
    *
    * @return string|null The deviceGroupNames
    */
    public function getDeviceGroupNames()
    {
        if (array_key_exists("deviceGroupNames", $this->_propDict)) {
            return $this->_propDict["deviceGroupNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceGroupNames
    *
    * @param string $val The value of the deviceGroupNames
    *
    * @return BlockFileResponseAction
    */
    public function setDeviceGroupNames($val)
    {
        $this->_propDict["deviceGroupNames"] = $val;
        return $this;
    }

    /**
    * Gets the identifier
    *
    * @return FileEntityIdentifier|null The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            if (is_a($this->_propDict["identifier"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FileEntityIdentifier") || is_null($this->_propDict["identifier"])) {
                return $this->_propDict["identifier"];
            } else {
                $this->_propDict["identifier"] = new FileEntityIdentifier($this->_propDict["identifier"]);
                return $this->_propDict["identifier"];
            }
        }
        return null;
    }

    /**
    * Sets the identifier
    *
    * @param FileEntityIdentifier $val The value to assign to the identifier
    *
    * @return BlockFileResponseAction The BlockFileResponseAction
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
         return $this;
    }
}
