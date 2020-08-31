<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsExpiration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TermsExpiration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermsExpiration extends Entity
{

    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return TermsExpiration The TermsExpiration
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the frequency
    *
    * @return Duration The frequency
    */
    public function getFrequency()
    {
        if (array_key_exists("frequency", $this->_propDict)) {
            if (is_a($this->_propDict["frequency"], "Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["frequency"];
            } else {
                $this->_propDict["frequency"] = new Duration($this->_propDict["frequency"]);
                return $this->_propDict["frequency"];
            }
        }
        return null;
    }

    /**
    * Sets the frequency
    *
    * @param Duration $val The value to assign to the frequency
    *
    * @return TermsExpiration The TermsExpiration
    */
    public function setFrequency($val)
    {
        $this->_propDict["frequency"] = $val;
         return $this;
    }
}
