<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrustFramework File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* TrustFramework class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrustFramework extends Entity
{

     /** 
     * Gets the policies
     *
     * @return array The policies
     */
    public function getPolicies()
    {
        if (array_key_exists("policies", $this->_propDict)) {
           return $this->_propDict["policies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the policies
    *
    * @param TrustFrameworkPolicy $val The policies
    *
    * @return TrustFramework
    */
    public function setPolicies($val)
    {
		$this->_propDict["policies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the keySets
     *
     * @return array The keySets
     */
    public function getKeySets()
    {
        if (array_key_exists("keySets", $this->_propDict)) {
           return $this->_propDict["keySets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the keySets
    *
    * @param TrustFrameworkKeySet $val The keySets
    *
    * @return TrustFramework
    */
    public function setKeySets($val)
    {
		$this->_propDict["keySets"] = $val;
        return $this;
    }
    
}