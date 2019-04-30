<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtection File
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
* InformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class InformationProtection extends Entity
{

     /** 
     * Gets the sensitivityLabels
     *
     * @return array The sensitivityLabels
     */
    public function getSensitivityLabels()
    {
        if (array_key_exists("sensitivityLabels", $this->_propDict)) {
           return $this->_propDict["sensitivityLabels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sensitivityLabels
    *
    * @param SensitivityLabel $val The sensitivityLabels
    *
    * @return InformationProtection
    */
    public function setSensitivityLabels($val)
    {
		$this->_propDict["sensitivityLabels"] = $val;
        return $this;
    }
    
}