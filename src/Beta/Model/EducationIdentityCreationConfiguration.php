<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationIdentityCreationConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* EducationIdentityCreationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationIdentityCreationConfiguration extends EducationIdentitySynchronizationConfiguration
{

    /**
    * Gets the userDomains
    *
    * @return EducationIdentityDomain The userDomains
    */
    public function getUserDomains()
    {
        if (array_key_exists("userDomains", $this->_propDict)) {
            if (is_a($this->_propDict["userDomains"], "Microsoft\Graph\Beta\Model\EducationIdentityDomain")) {
                return $this->_propDict["userDomains"];
            } else {
                $this->_propDict["userDomains"] = new EducationIdentityDomain($this->_propDict["userDomains"]);
                return $this->_propDict["userDomains"];
            }
        }
        return null;
    }

    /**
    * Sets the userDomains
    *
    * @param EducationIdentityDomain $val The value to assign to the userDomains
    *
    * @return EducationIdentityCreationConfiguration The EducationIdentityCreationConfiguration
    */
    public function setUserDomains($val)
    {
        $this->_propDict["userDomains"] = $val;
         return $this;
    }
}
