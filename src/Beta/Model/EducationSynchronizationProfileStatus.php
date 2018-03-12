<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationProfileStatus File
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
* EducationSynchronizationProfileStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationSynchronizationProfileStatus extends Entity
{
    /**
    * Gets the status
    *
    * @return EducationSynchronizationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Beta\Model\EducationSynchronizationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new EducationSynchronizationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param EducationSynchronizationStatus $val The status
    *
    * @return EducationSynchronizationProfileStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSynchronizationDateTime
    *
    * @return \DateTime The lastSynchronizationDateTime
    */
    public function getLastSynchronizationDateTime()
    {
        if (array_key_exists("lastSynchronizationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSynchronizationDateTime"], "\DateTime")) {
                return $this->_propDict["lastSynchronizationDateTime"];
            } else {
                $this->_propDict["lastSynchronizationDateTime"] = new \DateTime($this->_propDict["lastSynchronizationDateTime"]);
                return $this->_propDict["lastSynchronizationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSynchronizationDateTime
    *
    * @param \DateTime $val The lastSynchronizationDateTime
    *
    * @return EducationSynchronizationProfileStatus
    */
    public function setLastSynchronizationDateTime($val)
    {
        $this->_propDict["lastSynchronizationDateTime"] = $val;
        return $this;
    }
    
}