<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataClassificationService File
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
* DataClassificationService class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DataClassificationService extends Entity
{

     /** 
     * Gets the sensitiveTypes
     *
     * @return array The sensitiveTypes
     */
    public function getSensitiveTypes()
    {
        if (array_key_exists("sensitiveTypes", $this->_propDict)) {
           return $this->_propDict["sensitiveTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sensitiveTypes
    *
    * @param SensitiveType $val The sensitiveTypes
    *
    * @return DataClassificationService
    */
    public function setSensitiveTypes($val)
    {
		$this->_propDict["sensitiveTypes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the jobs
     *
     * @return array The jobs
     */
    public function getJobs()
    {
        if (array_key_exists("jobs", $this->_propDict)) {
           return $this->_propDict["jobs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the jobs
    *
    * @param JobResponseBase $val The jobs
    *
    * @return DataClassificationService
    */
    public function setJobs($val)
    {
		$this->_propDict["jobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the classifyFileJobs
     *
     * @return array The classifyFileJobs
     */
    public function getClassifyFileJobs()
    {
        if (array_key_exists("classifyFileJobs", $this->_propDict)) {
           return $this->_propDict["classifyFileJobs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the classifyFileJobs
    *
    * @param JobResponseBase $val The classifyFileJobs
    *
    * @return DataClassificationService
    */
    public function setClassifyFileJobs($val)
    {
		$this->_propDict["classifyFileJobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the classifyTextJobs
     *
     * @return array The classifyTextJobs
     */
    public function getClassifyTextJobs()
    {
        if (array_key_exists("classifyTextJobs", $this->_propDict)) {
           return $this->_propDict["classifyTextJobs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the classifyTextJobs
    *
    * @param JobResponseBase $val The classifyTextJobs
    *
    * @return DataClassificationService
    */
    public function setClassifyTextJobs($val)
    {
		$this->_propDict["classifyTextJobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the evaluateLabelJobs
     *
     * @return array The evaluateLabelJobs
     */
    public function getEvaluateLabelJobs()
    {
        if (array_key_exists("evaluateLabelJobs", $this->_propDict)) {
           return $this->_propDict["evaluateLabelJobs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the evaluateLabelJobs
    *
    * @param JobResponseBase $val The evaluateLabelJobs
    *
    * @return DataClassificationService
    */
    public function setEvaluateLabelJobs($val)
    {
		$this->_propDict["evaluateLabelJobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the classifyText
     *
     * @return array The classifyText
     */
    public function getClassifyText()
    {
        if (array_key_exists("classifyText", $this->_propDict)) {
           return $this->_propDict["classifyText"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the classifyText
    *
    * @param TextClassificationRequest $val The classifyText
    *
    * @return DataClassificationService
    */
    public function setClassifyText($val)
    {
		$this->_propDict["classifyText"] = $val;
        return $this;
    }
    

     /** 
     * Gets the classifyFile
     *
     * @return array The classifyFile
     */
    public function getClassifyFile()
    {
        if (array_key_exists("classifyFile", $this->_propDict)) {
           return $this->_propDict["classifyFile"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the classifyFile
    *
    * @param FileClassificationRequest $val The classifyFile
    *
    * @return DataClassificationService
    */
    public function setClassifyFile($val)
    {
		$this->_propDict["classifyFile"] = $val;
        return $this;
    }
    

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
    * @return DataClassificationService
    */
    public function setSensitivityLabels($val)
    {
		$this->_propDict["sensitivityLabels"] = $val;
        return $this;
    }
    
}