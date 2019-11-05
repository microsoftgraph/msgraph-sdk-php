<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityContainer File
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
* IdentityContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IdentityContainer extends Entity
{

     /** 
     * Gets the userFlows
     *
     * @return array The userFlows
     */
    public function getUserFlows()
    {
        if (array_key_exists("userFlows", $this->_propDict)) {
           return $this->_propDict["userFlows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userFlows
    *
    * @param IdentityUserFlow $val The userFlows
    *
    * @return IdentityContainer
    */
    public function setUserFlows($val)
    {
		$this->_propDict["userFlows"] = $val;
        return $this;
    }
    

     /** 
     * Gets the featureConfigurations
     *
     * @return array The featureConfigurations
     */
    public function getFeatureConfigurations()
    {
        if (array_key_exists("featureConfigurations", $this->_propDict)) {
           return $this->_propDict["featureConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the featureConfigurations
    *
    * @param FeatureConfiguration $val The featureConfigurations
    *
    * @return IdentityContainer
    */
    public function setFeatureConfigurations($val)
    {
		$this->_propDict["featureConfigurations"] = $val;
        return $this;
    }
    
}