<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* QualityUpdateReference File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* QualityUpdateReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class QualityUpdateReference extends WindowsUpdateReference
{

    /**
    * Gets the classification
    *
    * @return QualityUpdateClassification The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\QualityUpdateClassification")) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new QualityUpdateClassification($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }

    /**
    * Sets the classification
    *
    * @param QualityUpdateClassification $val The value to assign to the classification
    *
    * @return QualityUpdateReference The QualityUpdateReference
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
         return $this;
    }

    /**
    * Gets the releaseDateTime
    *
    * @return \DateTime The releaseDateTime
    */
    public function getReleaseDateTime()
    {
        if (array_key_exists("releaseDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releaseDateTime"], "\DateTime")) {
                return $this->_propDict["releaseDateTime"];
            } else {
                $this->_propDict["releaseDateTime"] = new \DateTime($this->_propDict["releaseDateTime"]);
                return $this->_propDict["releaseDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the releaseDateTime
    *
    * @param \DateTime $val The value to assign to the releaseDateTime
    *
    * @return QualityUpdateReference The QualityUpdateReference
    */
    public function setReleaseDateTime($val)
    {
        $this->_propDict["releaseDateTime"] = $val;
         return $this;
    }
}
