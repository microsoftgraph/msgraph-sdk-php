<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecognizeOperation File
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
* RecognizeOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RecognizeOperation extends CommsOperation
{

     /** 
     * Gets the prompts
     *
     * @return array The prompts
     */
    public function getPrompts()
    {
        if (array_key_exists("prompts", $this->_propDict)) {
           return $this->_propDict["prompts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the prompts
    *
    * @param Prompt $val The prompts
    *
    * @return RecognizeOperation
    */
    public function setPrompts($val)
    {
		$this->_propDict["prompts"] = $val;
        return $this;
    }
    
    /**
    * Gets the bargeInAllowed
    *
    * @return bool The bargeInAllowed
    */
    public function getBargeInAllowed()
    {
        if (array_key_exists("bargeInAllowed", $this->_propDict)) {
            return $this->_propDict["bargeInAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bargeInAllowed
    *
    * @param bool $val The bargeInAllowed
    *
    * @return RecognizeOperation
    */
    public function setBargeInAllowed($val)
    {
        $this->_propDict["bargeInAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the culture
    *
    * @return string The culture
    */
    public function getCulture()
    {
        if (array_key_exists("culture", $this->_propDict)) {
            return $this->_propDict["culture"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the culture
    *
    * @param string $val The culture
    *
    * @return RecognizeOperation
    */
    public function setCulture($val)
    {
        $this->_propDict["culture"] = $val;
        return $this;
    }
    
    /**
    * Gets the initialSilenceTimeoutInSeconds
    *
    * @return int The initialSilenceTimeoutInSeconds
    */
    public function getInitialSilenceTimeoutInSeconds()
    {
        if (array_key_exists("initialSilenceTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["initialSilenceTimeoutInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the initialSilenceTimeoutInSeconds
    *
    * @param int $val The initialSilenceTimeoutInSeconds
    *
    * @return RecognizeOperation
    */
    public function setInitialSilenceTimeoutInSeconds($val)
    {
        $this->_propDict["initialSilenceTimeoutInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the interDigitTimeoutInSeconds
    *
    * @return int The interDigitTimeoutInSeconds
    */
    public function getInterDigitTimeoutInSeconds()
    {
        if (array_key_exists("interDigitTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["interDigitTimeoutInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the interDigitTimeoutInSeconds
    *
    * @param int $val The interDigitTimeoutInSeconds
    *
    * @return RecognizeOperation
    */
    public function setInterDigitTimeoutInSeconds($val)
    {
        $this->_propDict["interDigitTimeoutInSeconds"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the choices
     *
     * @return array The choices
     */
    public function getChoices()
    {
        if (array_key_exists("choices", $this->_propDict)) {
           return $this->_propDict["choices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the choices
    *
    * @param RecognitionOption $val The choices
    *
    * @return RecognizeOperation
    */
    public function setChoices($val)
    {
		$this->_propDict["choices"] = $val;
        return $this;
    }
    
    /**
    * Gets the collectDigits
    *
    * @return CollectDigits The collectDigits
    */
    public function getCollectDigits()
    {
        if (array_key_exists("collectDigits", $this->_propDict)) {
            if (is_a($this->_propDict["collectDigits"], "Microsoft\Graph\Model\CollectDigits")) {
                return $this->_propDict["collectDigits"];
            } else {
                $this->_propDict["collectDigits"] = new CollectDigits($this->_propDict["collectDigits"]);
                return $this->_propDict["collectDigits"];
            }
        }
        return null;
    }
    
    /**
    * Sets the collectDigits
    *
    * @param CollectDigits $val The collectDigits
    *
    * @return RecognizeOperation
    */
    public function setCollectDigits($val)
    {
        $this->_propDict["collectDigits"] = $val;
        return $this;
    }
    
}