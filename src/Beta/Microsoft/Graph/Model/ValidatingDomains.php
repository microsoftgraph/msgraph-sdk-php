<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ValidatingDomains File
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
* ValidatingDomains class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ValidatingDomains extends Entity
{

    /**
    * Gets the rootDomains
    *
    * @return RootDomains|null The rootDomains
    */
    public function getRootDomains()
    {
        if (array_key_exists("rootDomains", $this->_propDict)) {
            if (is_a($this->_propDict["rootDomains"], "\Beta\Microsoft\Graph\Model\RootDomains") || is_null($this->_propDict["rootDomains"])) {
                return $this->_propDict["rootDomains"];
            } else {
                $this->_propDict["rootDomains"] = new RootDomains($this->_propDict["rootDomains"]);
                return $this->_propDict["rootDomains"];
            }
        }
        return null;
    }

    /**
    * Sets the rootDomains
    *
    * @param RootDomains $val The value to assign to the rootDomains
    *
    * @return ValidatingDomains The ValidatingDomains
    */
    public function setRootDomains($val)
    {
        $this->_propDict["rootDomains"] = $val;
         return $this;
    }
}
