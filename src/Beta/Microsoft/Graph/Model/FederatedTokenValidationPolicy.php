<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FederatedTokenValidationPolicy File
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
* FederatedTokenValidationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FederatedTokenValidationPolicy extends DirectoryObject
{
    /**
    * Gets the validatingDomains
    *
    * @return ValidatingDomains|null The validatingDomains
    */
    public function getValidatingDomains()
    {
        if (array_key_exists("validatingDomains", $this->_propDict)) {
            if (is_a($this->_propDict["validatingDomains"], "\Beta\Microsoft\Graph\Model\ValidatingDomains") || is_null($this->_propDict["validatingDomains"])) {
                return $this->_propDict["validatingDomains"];
            } else {
                $this->_propDict["validatingDomains"] = new ValidatingDomains($this->_propDict["validatingDomains"]);
                return $this->_propDict["validatingDomains"];
            }
        }
        return null;
    }

    /**
    * Sets the validatingDomains
    *
    * @param ValidatingDomains $val The validatingDomains
    *
    * @return FederatedTokenValidationPolicy
    */
    public function setValidatingDomains($val)
    {
        $this->_propDict["validatingDomains"] = $val;
        return $this;
    }

}
