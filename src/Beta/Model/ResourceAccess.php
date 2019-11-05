<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResourceAccess File
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
* ResourceAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ResourceAccess extends Entity
{
    /**
    * Gets the id
    * The unique identifier for one of the oauth2PermissionScopes or appRole instances that the resource application exposes.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The unique identifier for one of the oauth2PermissionScopes or appRole instances that the resource application exposes.
    *
    * @param string $val The value of the id
    *
    * @return ResourceAccess
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the type
    * Specifies whether the id property references an oauth2PermissionScopes or an appRole. Possible values are 'scope' or 'role'.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * Specifies whether the id property references an oauth2PermissionScopes or an appRole. Possible values are 'scope' or 'role'.
    *
    * @param string $val The value of the type
    *
    * @return ResourceAccess
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
