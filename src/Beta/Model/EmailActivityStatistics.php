<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailActivityStatistics File
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
* EmailActivityStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EmailActivityStatistics extends ActivityStatistics
{
    /**
    * Gets the afterHours
    *
    * @return Duration The afterHours
    */
    public function getAfterHours()
    {
        if (array_key_exists("afterHours", $this->_propDict)) {
            if (is_a($this->_propDict["afterHours"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["afterHours"];
            } else {
                $this->_propDict["afterHours"] = new Duration($this->_propDict["afterHours"]);
                return $this->_propDict["afterHours"];
            }
        }
        return null;
    }
    
    /**
    * Sets the afterHours
    *
    * @param Duration $val The afterHours
    *
    * @return EmailActivityStatistics
    */
    public function setAfterHours($val)
    {
        $this->_propDict["afterHours"] = $val;
        return $this;
    }
    
    /**
    * Gets the readEmail
    *
    * @return Duration The readEmail
    */
    public function getReadEmail()
    {
        if (array_key_exists("readEmail", $this->_propDict)) {
            if (is_a($this->_propDict["readEmail"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["readEmail"];
            } else {
                $this->_propDict["readEmail"] = new Duration($this->_propDict["readEmail"]);
                return $this->_propDict["readEmail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the readEmail
    *
    * @param Duration $val The readEmail
    *
    * @return EmailActivityStatistics
    */
    public function setReadEmail($val)
    {
        $this->_propDict["readEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the sentEmail
    *
    * @return Duration The sentEmail
    */
    public function getSentEmail()
    {
        if (array_key_exists("sentEmail", $this->_propDict)) {
            if (is_a($this->_propDict["sentEmail"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["sentEmail"];
            } else {
                $this->_propDict["sentEmail"] = new Duration($this->_propDict["sentEmail"]);
                return $this->_propDict["sentEmail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sentEmail
    *
    * @param Duration $val The sentEmail
    *
    * @return EmailActivityStatistics
    */
    public function setSentEmail($val)
    {
        $this->_propDict["sentEmail"] = $val;
        return $this;
    }
    
}