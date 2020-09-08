<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegionalFormatOverrides File
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
* RegionalFormatOverrides class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegionalFormatOverrides extends Entity
{
    /**
    * Gets the calendar
    *
    * @return string The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            return $this->_propDict["calendar"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calendar
    *
    * @param string $val The value of the calendar
    *
    * @return RegionalFormatOverrides
    */
    public function setCalendar($val)
    {
        $this->_propDict["calendar"] = $val;
        return $this;
    }
    /**
    * Gets the firstDayOfWeek
    *
    * @return string The firstDayOfWeek
    */
    public function getFirstDayOfWeek()
    {
        if (array_key_exists("firstDayOfWeek", $this->_propDict)) {
            return $this->_propDict["firstDayOfWeek"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firstDayOfWeek
    *
    * @param string $val The value of the firstDayOfWeek
    *
    * @return RegionalFormatOverrides
    */
    public function setFirstDayOfWeek($val)
    {
        $this->_propDict["firstDayOfWeek"] = $val;
        return $this;
    }
    /**
    * Gets the longDateFormat
    *
    * @return string The longDateFormat
    */
    public function getLongDateFormat()
    {
        if (array_key_exists("longDateFormat", $this->_propDict)) {
            return $this->_propDict["longDateFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the longDateFormat
    *
    * @param string $val The value of the longDateFormat
    *
    * @return RegionalFormatOverrides
    */
    public function setLongDateFormat($val)
    {
        $this->_propDict["longDateFormat"] = $val;
        return $this;
    }
    /**
    * Gets the longTimeFormat
    *
    * @return string The longTimeFormat
    */
    public function getLongTimeFormat()
    {
        if (array_key_exists("longTimeFormat", $this->_propDict)) {
            return $this->_propDict["longTimeFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the longTimeFormat
    *
    * @param string $val The value of the longTimeFormat
    *
    * @return RegionalFormatOverrides
    */
    public function setLongTimeFormat($val)
    {
        $this->_propDict["longTimeFormat"] = $val;
        return $this;
    }
    /**
    * Gets the shortDateFormat
    *
    * @return string The shortDateFormat
    */
    public function getShortDateFormat()
    {
        if (array_key_exists("shortDateFormat", $this->_propDict)) {
            return $this->_propDict["shortDateFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shortDateFormat
    *
    * @param string $val The value of the shortDateFormat
    *
    * @return RegionalFormatOverrides
    */
    public function setShortDateFormat($val)
    {
        $this->_propDict["shortDateFormat"] = $val;
        return $this;
    }
    /**
    * Gets the shortTimeFormat
    *
    * @return string The shortTimeFormat
    */
    public function getShortTimeFormat()
    {
        if (array_key_exists("shortTimeFormat", $this->_propDict)) {
            return $this->_propDict["shortTimeFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shortTimeFormat
    *
    * @param string $val The value of the shortTimeFormat
    *
    * @return RegionalFormatOverrides
    */
    public function setShortTimeFormat($val)
    {
        $this->_propDict["shortTimeFormat"] = $val;
        return $this;
    }
    /**
    * Gets the timeZone
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    *
    * @param string $val The value of the timeZone
    *
    * @return RegionalFormatOverrides
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }
}
