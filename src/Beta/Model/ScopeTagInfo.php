<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScopeTagInfo File
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
* ScopeTagInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ScopeTagInfo extends Entity
{
    /**
    * Gets the scopeTagName
    * Scope Tag Display name.
    *
    * @return string The scopeTagName
    */
    public function getScopeTagName()
    {
        if (array_key_exists("scopeTagName", $this->_propDict)) {
            return $this->_propDict["scopeTagName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeTagName
    * Scope Tag Display name.
    *
    * @param string $val The value of the scopeTagName
    *
    * @return ScopeTagInfo
    */
    public function setScopeTagName($val)
    {
        $this->_propDict["scopeTagName"] = $val;
        return $this;
    }
    /**
    * Gets the scopeTagId
    * Scope Tag Id.
    *
    * @return string The scopeTagId
    */
    public function getScopeTagId()
    {
        if (array_key_exists("scopeTagId", $this->_propDict)) {
            return $this->_propDict["scopeTagId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeTagId
    * Scope Tag Id.
    *
    * @param string $val The value of the scopeTagId
    *
    * @return ScopeTagInfo
    */
    public function setScopeTagId($val)
    {
        $this->_propDict["scopeTagId"] = $val;
        return $this;
    }
}
