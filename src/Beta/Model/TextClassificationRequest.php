<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TextClassificationRequest File
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
* TextClassificationRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TextClassificationRequest extends Entity
{
    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the text
    *
    * @param string $val The text
    *
    * @return TextClassificationRequest
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
    /**
    * Gets the sensitiveTypeIds
    *
    * @return string The sensitiveTypeIds
    */
    public function getSensitiveTypeIds()
    {
        if (array_key_exists("sensitiveTypeIds", $this->_propDict)) {
            return $this->_propDict["sensitiveTypeIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sensitiveTypeIds
    *
    * @param string $val The sensitiveTypeIds
    *
    * @return TextClassificationRequest
    */
    public function setSensitiveTypeIds($val)
    {
        $this->_propDict["sensitiveTypeIds"] = $val;
        return $this;
    }
    
}