<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DaylightTimeZoneOffset File
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
* DaylightTimeZoneOffset class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DaylightTimeZoneOffset extends StandardTimeZoneOffset
{
    /**
    * Gets the daylightBias
    *
    * @return int The daylightBias
    */
    public function getDaylightBias()
    {
        if (array_key_exists("daylightBias", $this->_propDict)) {
            return $this->_propDict["daylightBias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the daylightBias
    *
    * @param int $val The value of the daylightBias
    *
    * @return DaylightTimeZoneOffset
    */
    public function setDaylightBias($val)
    {
        $this->_propDict["daylightBias"] = $val;
        return $this;
    }
}
