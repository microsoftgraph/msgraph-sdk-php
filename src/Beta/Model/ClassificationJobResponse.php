<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClassificationJobResponse File
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
* ClassificationJobResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ClassificationJobResponse extends JobResponseBase
{
    /**
    * Gets the result
    *
    * @return DetectedSensitiveContentWrapper The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "Microsoft\Graph\Beta\Model\DetectedSensitiveContentWrapper")) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new DetectedSensitiveContentWrapper($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }
    
    /**
    * Sets the result
    *
    * @param DetectedSensitiveContentWrapper $val The result
    *
    * @return ClassificationJobResponse
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
        return $this;
    }
    
}