<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileAssessmentRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* FileAssessmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FileAssessmentRequest extends ThreatAssessmentRequest
{
    /**
    * Gets the fileName
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileName
    *
    * @param string $val The fileName
    *
    * @return FileAssessmentRequest
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentData
    *
    * @return string The contentData
    */
    public function getContentData()
    {
        if (array_key_exists("contentData", $this->_propDict)) {
            return $this->_propDict["contentData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentData
    *
    * @param string $val The contentData
    *
    * @return FileAssessmentRequest
    */
    public function setContentData($val)
    {
        $this->_propDict["contentData"] = $val;
        return $this;
    }
    
}