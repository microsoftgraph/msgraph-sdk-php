<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CollectDigits File
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
* CollectDigits class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CollectDigits extends Entity
{
    /**
    * Gets the maxNumberOfDtmfs
    *
    * @return int The maxNumberOfDtmfs
    */
    public function getMaxNumberOfDtmfs()
    {
        if (array_key_exists("maxNumberOfDtmfs", $this->_propDict)) {
            return $this->_propDict["maxNumberOfDtmfs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxNumberOfDtmfs
    *
    * @param int $val The value of the maxNumberOfDtmfs
    *
    * @return CollectDigits
    */
    public function setMaxNumberOfDtmfs($val)
    {
        $this->_propDict["maxNumberOfDtmfs"] = $val;
        return $this;
    }
    /**
    * Gets the stopTones
    *
    * @return string The stopTones
    */
    public function getStopTones()
    {
        if (array_key_exists("stopTones", $this->_propDict)) {
            return $this->_propDict["stopTones"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stopTones
    *
    * @param string $val The value of the stopTones
    *
    * @return CollectDigits
    */
    public function setStopTones($val)
    {
        $this->_propDict["stopTones"] = $val;
        return $this;
    }
}
