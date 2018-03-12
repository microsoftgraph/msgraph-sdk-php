<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationIdentityMatchingConfiguration File
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
* EducationIdentityMatchingConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationIdentityMatchingConfiguration extends EducationIdentitySynchronizationConfiguration
{

    /**
    * Gets the matchingOptions
    *
    * @return EducationIdentityMatchingOptions The matchingOptions
    */
    public function getMatchingOptions()
    {
        if (array_key_exists("matchingOptions", $this->_propDict)) {
            if (is_a($this->_propDict["matchingOptions"], "Microsoft\Graph\Beta\Model\EducationIdentityMatchingOptions")) {
                return $this->_propDict["matchingOptions"];
            } else {
                $this->_propDict["matchingOptions"] = new EducationIdentityMatchingOptions($this->_propDict["matchingOptions"]);
                return $this->_propDict["matchingOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the matchingOptions
    *
    * @param EducationIdentityMatchingOptions $val The value to assign to the matchingOptions
    *
    * @return EducationIdentityMatchingConfiguration The EducationIdentityMatchingConfiguration
    */
    public function setMatchingOptions($val)
    {
        $this->_propDict["matchingOptions"] = $val;
         return $this;
    }
}
