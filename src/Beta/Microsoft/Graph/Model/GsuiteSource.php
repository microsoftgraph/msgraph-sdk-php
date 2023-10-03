<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GsuiteSource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* GsuiteSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GsuiteSource extends AuthorizationSystemIdentitySource
{
    /**
    * Gets the domain
    *
    * @return string|null The domain
    */
    public function getDomain()
    {
        if (array_key_exists("domain", $this->_propDict)) {
            return $this->_propDict["domain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domain
    *
    * @param string $val The value of the domain
    *
    * @return GsuiteSource
    */
    public function setDomain($val)
    {
        $this->_propDict["domain"] = $val;
        return $this;
    }
}
