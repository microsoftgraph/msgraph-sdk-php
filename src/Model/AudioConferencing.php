<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AudioConferencing File
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
* AudioConferencing class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AudioConferencing extends Entity
{
    /**
    * Gets the conferenceId
    *
    * @return string The conferenceId
    */
    public function getConferenceId()
    {
        if (array_key_exists("conferenceId", $this->_propDict)) {
            return $this->_propDict["conferenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conferenceId
    *
    * @param string $val The value of the conferenceId
    *
    * @return AudioConferencing
    */
    public function setConferenceId($val)
    {
        $this->_propDict["conferenceId"] = $val;
        return $this;
    }
    /**
    * Gets the tollNumber
    *
    * @return string The tollNumber
    */
    public function getTollNumber()
    {
        if (array_key_exists("tollNumber", $this->_propDict)) {
            return $this->_propDict["tollNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tollNumber
    *
    * @param string $val The value of the tollNumber
    *
    * @return AudioConferencing
    */
    public function setTollNumber($val)
    {
        $this->_propDict["tollNumber"] = $val;
        return $this;
    }
    /**
    * Gets the tollFreeNumber
    *
    * @return string The tollFreeNumber
    */
    public function getTollFreeNumber()
    {
        if (array_key_exists("tollFreeNumber", $this->_propDict)) {
            return $this->_propDict["tollFreeNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tollFreeNumber
    *
    * @param string $val The value of the tollFreeNumber
    *
    * @return AudioConferencing
    */
    public function setTollFreeNumber($val)
    {
        $this->_propDict["tollFreeNumber"] = $val;
        return $this;
    }
    /**
    * Gets the dialinUrl
    *
    * @return string The dialinUrl
    */
    public function getDialinUrl()
    {
        if (array_key_exists("dialinUrl", $this->_propDict)) {
            return $this->_propDict["dialinUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dialinUrl
    *
    * @param string $val The value of the dialinUrl
    *
    * @return AudioConferencing
    */
    public function setDialinUrl($val)
    {
        $this->_propDict["dialinUrl"] = $val;
        return $this;
    }
}
