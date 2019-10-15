<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpeningHoursSpecification File
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
* OpeningHoursSpecification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OpeningHoursSpecification extends Entity
{
    /**
    * Gets the dayOfWeek
    *
    * @return string The dayOfWeek
    */
    public function getDayOfWeek()
    {
        if (array_key_exists("dayOfWeek", $this->_propDict)) {
            return $this->_propDict["dayOfWeek"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dayOfWeek
    *
    * @param string $val The value of the dayOfWeek
    *
    * @return OpeningHoursSpecification
    */
    public function setDayOfWeek($val)
    {
        $this->_propDict["dayOfWeek"] = $val;
        return $this;
    }
    /**
    * Gets the opens
    *
    * @return string The opens
    */
    public function getOpens()
    {
        if (array_key_exists("opens", $this->_propDict)) {
            return $this->_propDict["opens"];
        } else {
            return null;
        }
    }

    /**
    * Sets the opens
    *
    * @param string $val The value of the opens
    *
    * @return OpeningHoursSpecification
    */
    public function setOpens($val)
    {
        $this->_propDict["opens"] = $val;
        return $this;
    }
    /**
    * Gets the closes
    *
    * @return string The closes
    */
    public function getCloses()
    {
        if (array_key_exists("closes", $this->_propDict)) {
            return $this->_propDict["closes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the closes
    *
    * @param string $val The value of the closes
    *
    * @return OpeningHoursSpecification
    */
    public function setCloses($val)
    {
        $this->_propDict["closes"] = $val;
        return $this;
    }
}
