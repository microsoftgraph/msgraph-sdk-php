<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* QualityUpdateCveSeverityInformation File
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
* QualityUpdateCveSeverityInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class QualityUpdateCveSeverityInformation extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the maxBaseScore
    * Highest base score that occurs of any CVE addressed by the quality update. Read-only.
    *
    * @return float|null The maxBaseScore
    */
    public function getMaxBaseScore()
    {
        if (array_key_exists("maxBaseScore", $this->_propDict)) {
            return $this->_propDict["maxBaseScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxBaseScore
    * Highest base score that occurs of any CVE addressed by the quality update. Read-only.
    *
    * @param float $val The value of the maxBaseScore
    *
    * @return QualityUpdateCveSeverityInformation
    */
    public function setMaxBaseScore($val)
    {
        $this->_propDict["maxBaseScore"] = $val;
        return $this;
    }

    /**
    * Gets the maxSeverity
    *
    * @return CveSeverityLevel|null The maxSeverity
    */
    public function getMaxSeverity()
    {
        if (array_key_exists("maxSeverity", $this->_propDict)) {
            if (is_a($this->_propDict["maxSeverity"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\CveSeverityLevel") || is_null($this->_propDict["maxSeverity"])) {
                return $this->_propDict["maxSeverity"];
            } else {
                $this->_propDict["maxSeverity"] = new CveSeverityLevel($this->_propDict["maxSeverity"]);
                return $this->_propDict["maxSeverity"];
            }
        }
        return null;
    }

    /**
    * Sets the maxSeverity
    *
    * @param CveSeverityLevel $val The value to assign to the maxSeverity
    *
    * @return QualityUpdateCveSeverityInformation The QualityUpdateCveSeverityInformation
    */
    public function setMaxSeverity($val)
    {
        $this->_propDict["maxSeverity"] = $val;
         return $this;
    }

    /**
    * Gets the exploitedCves
    *
    * @return CveInformation|null The exploitedCves
    */
    public function getExploitedCves()
    {
        if (array_key_exists("exploitedCves", $this->_propDict)) {
            if (is_a($this->_propDict["exploitedCves"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\CveInformation") || is_null($this->_propDict["exploitedCves"])) {
                return $this->_propDict["exploitedCves"];
            } else {
                $this->_propDict["exploitedCves"] = new CveInformation($this->_propDict["exploitedCves"]);
                return $this->_propDict["exploitedCves"];
            }
        }
        return null;
    }

    /**
    * Sets the exploitedCves
    *
    * @param CveInformation $val The value to assign to the exploitedCves
    *
    * @return QualityUpdateCveSeverityInformation The QualityUpdateCveSeverityInformation
    */
    public function setExploitedCves($val)
    {
        $this->_propDict["exploitedCves"] = $val;
         return $this;
    }
}
