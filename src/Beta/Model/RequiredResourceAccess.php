<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequiredResourceAccess File
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
* RequiredResourceAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RequiredResourceAccess extends Entity
{
    /**
    * Gets the resourceAppId
    *
    * @return string The resourceAppId
    */
    public function getResourceAppId()
    {
        if (array_key_exists("resourceAppId", $this->_propDict)) {
            return $this->_propDict["resourceAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceAppId
    *
    * @param string $val The value of the resourceAppId
    *
    * @return RequiredResourceAccess
    */
    public function setResourceAppId($val)
    {
        $this->_propDict["resourceAppId"] = $val;
        return $this;
    }

    /**
    * Gets the resourceAccess
    *
    * @return ResourceAccess The resourceAccess
    */
    public function getResourceAccess()
    {
        if (array_key_exists("resourceAccess", $this->_propDict)) {
            if (is_a($this->_propDict["resourceAccess"], "Microsoft\Graph\Beta\Model\ResourceAccess")) {
                return $this->_propDict["resourceAccess"];
            } else {
                $this->_propDict["resourceAccess"] = new ResourceAccess($this->_propDict["resourceAccess"]);
                return $this->_propDict["resourceAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceAccess
    *
    * @param ResourceAccess $val The value to assign to the resourceAccess
    *
    * @return RequiredResourceAccess The RequiredResourceAccess
    */
    public function setResourceAccess($val)
    {
        $this->_propDict["resourceAccess"] = $val;
         return $this;
    }
}
