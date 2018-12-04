<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomTimeZone File
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
* CustomTimeZone class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CustomTimeZone extends TimeZoneBase
{
    /**
    * Gets the bias
    *
    * @return int The bias
    */
    public function getBias()
    {
        if (array_key_exists("bias", $this->_propDict)) {
            return $this->_propDict["bias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bias
    *
    * @param int $val The value of the bias
    *
    * @return CustomTimeZone
    */
    public function setBias($val)
    {
        $this->_propDict["bias"] = $val;
        return $this;
    }

    /**
    * Gets the standardOffset
    *
    * @return StandardTimeZoneOffset The standardOffset
    */
    public function getStandardOffset()
    {
        if (array_key_exists("standardOffset", $this->_propDict)) {
            if (is_a($this->_propDict["standardOffset"], "Microsoft\Graph\Model\StandardTimeZoneOffset")) {
                return $this->_propDict["standardOffset"];
            } else {
                $this->_propDict["standardOffset"] = new StandardTimeZoneOffset($this->_propDict["standardOffset"]);
                return $this->_propDict["standardOffset"];
            }
        }
        return null;
    }

    /**
    * Sets the standardOffset
    *
    * @param StandardTimeZoneOffset $val The value to assign to the standardOffset
    *
    * @return CustomTimeZone The CustomTimeZone
    */
    public function setStandardOffset($val)
    {
        $this->_propDict["standardOffset"] = $val;
         return $this;
    }

    /**
    * Gets the daylightOffset
    *
    * @return DaylightTimeZoneOffset The daylightOffset
    */
    public function getDaylightOffset()
    {
        if (array_key_exists("daylightOffset", $this->_propDict)) {
            if (is_a($this->_propDict["daylightOffset"], "Microsoft\Graph\Model\DaylightTimeZoneOffset")) {
                return $this->_propDict["daylightOffset"];
            } else {
                $this->_propDict["daylightOffset"] = new DaylightTimeZoneOffset($this->_propDict["daylightOffset"]);
                return $this->_propDict["daylightOffset"];
            }
        }
        return null;
    }

    /**
    * Sets the daylightOffset
    *
    * @param DaylightTimeZoneOffset $val The value to assign to the daylightOffset
    *
    * @return CustomTimeZone The CustomTimeZone
    */
    public function setDaylightOffset($val)
    {
        $this->_propDict["daylightOffset"] = $val;
         return $this;
    }
}
