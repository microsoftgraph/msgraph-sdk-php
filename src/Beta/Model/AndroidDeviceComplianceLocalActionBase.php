<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceComplianceLocalActionBase File
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
* AndroidDeviceComplianceLocalActionBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidDeviceComplianceLocalActionBase extends Entity
{
    /**
    * Gets the gracePeriodInMinutes
    *
    * @return int The gracePeriodInMinutes
    */
    public function getGracePeriodInMinutes()
    {
        if (array_key_exists("gracePeriodInMinutes", $this->_propDict)) {
            return $this->_propDict["gracePeriodInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gracePeriodInMinutes
    *
    * @param int $val The gracePeriodInMinutes
    *
    * @return AndroidDeviceComplianceLocalActionBase
    */
    public function setGracePeriodInMinutes($val)
    {
        $this->_propDict["gracePeriodInMinutes"] = intval($val);
        return $this;
    }
    
}