<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* InformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtection extends Entity
{
    /**
    * Gets the bitlocker
    *
    * @return Bitlocker|null The bitlocker
    */
    public function getBitlocker()
    {
        if (array_key_exists("bitlocker", $this->_propDict) && !is_null($this->_propDict["bitlocker"])) {
            if (is_a($this->_propDict["bitlocker"], "\Microsoft\Graph\Model\Bitlocker")) {
                return $this->_propDict["bitlocker"];
            } else {
                $this->_propDict["bitlocker"] = new Bitlocker($this->_propDict["bitlocker"]);
                return $this->_propDict["bitlocker"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitlocker
    *
    * @param Bitlocker $val The bitlocker
    *
    * @return InformationProtection
    */
    public function setBitlocker($val)
    {
        $this->_propDict["bitlocker"] = $val;
        return $this;
    }
    

     /** 
     * Gets the threatAssessmentRequests
     *
     * @return ThreatAssessmentRequest[]|null The threatAssessmentRequests
     */
    public function getThreatAssessmentRequests()
    {
        if (array_key_exists('threatAssessmentRequests', $this->_propDict) && !is_null($this->_propDict['threatAssessmentRequests'])) {
            $threatAssessmentRequests = [];
            if (count($this->_propDict['threatAssessmentRequests']) > 0 && is_a($this->_propDict['threatAssessmentRequests'][0], 'ThreatAssessmentRequest')) {
                return $this->_propDict['threatAssessmentRequests'];
            }
            foreach ($this->_propDict['threatAssessmentRequests'] as $singleValue) {
                $threatAssessmentRequests []= new ThreatAssessmentRequest($singleValue);
            }
            $this->_propDict['threatAssessmentRequests'] = $threatAssessmentRequests;
            return $this->_propDict['threatAssessmentRequests'];
        }
        return null;
    }
    
    /** 
    * Sets the threatAssessmentRequests
    *
    * @param ThreatAssessmentRequest[] $val The threatAssessmentRequests
    *
    * @return InformationProtection
    */
    public function setThreatAssessmentRequests($val)
    {
        $this->_propDict["threatAssessmentRequests"] = $val;
        return $this;
    }
    
}
