<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecognitionOption File
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
* RecognitionOption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RecognitionOption extends Entity
{
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return RecognitionOption
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the speechVariation
    *
    * @return string The speechVariation
    */
    public function getSpeechVariation()
    {
        if (array_key_exists("speechVariation", $this->_propDict)) {
            return $this->_propDict["speechVariation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the speechVariation
    *
    * @param string $val The value of the speechVariation
    *
    * @return RecognitionOption
    */
    public function setSpeechVariation($val)
    {
        $this->_propDict["speechVariation"] = $val;
        return $this;
    }
    /**
    * Gets the dtmfVariation
    *
    * @return string The dtmfVariation
    */
    public function getDtmfVariation()
    {
        if (array_key_exists("dtmfVariation", $this->_propDict)) {
            return $this->_propDict["dtmfVariation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dtmfVariation
    *
    * @param string $val The value of the dtmfVariation
    *
    * @return RecognitionOption
    */
    public function setDtmfVariation($val)
    {
        $this->_propDict["dtmfVariation"] = $val;
        return $this;
    }
}
