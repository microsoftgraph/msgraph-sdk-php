<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectedSensitiveContentWrapper File
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
* DetectedSensitiveContentWrapper class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DetectedSensitiveContentWrapper extends Entity
{

    /**
    * Gets the classification
    *
    * @return DetectedSensitiveContent The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "Microsoft\Graph\Beta\Model\DetectedSensitiveContent")) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new DetectedSensitiveContent($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }

    /**
    * Sets the classification
    *
    * @param DetectedSensitiveContent $val The value to assign to the classification
    *
    * @return DetectedSensitiveContentWrapper The DetectedSensitiveContentWrapper
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
         return $this;
    }
}
