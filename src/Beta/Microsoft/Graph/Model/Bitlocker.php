<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Bitlocker File
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
* Bitlocker class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Bitlocker extends 
{

     /** 
     * Gets the recoveryKeys
     *
     * @return array The recoveryKeys
     */
    public function getRecoveryKeys()
    {
        if (array_key_exists("recoveryKeys", $this->_propDict)) {
           return $this->_propDict["recoveryKeys"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the recoveryKeys
    *
    * @param BitlockerRecoveryKey $val The recoveryKeys
    *
    * @return Bitlocker
    */
    public function setRecoveryKeys($val)
    {
		$this->_propDict["recoveryKeys"] = $val;
        return $this;
    }
    
}