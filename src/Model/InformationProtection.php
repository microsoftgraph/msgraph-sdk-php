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
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* InformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtection extends Entity
{

     /** 
     * Gets the threatAssessmentRequests
     *
     * @return array The threatAssessmentRequests
     */
    public function getThreatAssessmentRequests()
    {
        if (array_key_exists("threatAssessmentRequests", $this->_propDict)) {
           return $this->_propDict["threatAssessmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the threatAssessmentRequests
    *
    * @param ThreatAssessmentRequest $val The threatAssessmentRequests
    *
    * @return InformationProtection
    */
    public function setThreatAssessmentRequests($val)
    {
		$this->_propDict["threatAssessmentRequests"] = $val;
        return $this;
    }
    
}