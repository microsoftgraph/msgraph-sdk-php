<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocationConstraintItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* LocationConstraintItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LocationConstraintItem extends Location
{
    /**
    * Gets the resolveAvailability
    * If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user's cache without checking if it's free. Default is true.
    *
    * @return bool The resolveAvailability
    */
    public function getResolveAvailability()
    {
        if (array_key_exists("resolveAvailability", $this->_propDict)) {
            return $this->_propDict["resolveAvailability"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resolveAvailability
    * If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user's cache without checking if it's free. Default is true.
    *
    * @param bool $val The value of the resolveAvailability
    *
    * @return LocationConstraintItem
    */
    public function setResolveAvailability($val)
    {
        $this->_propDict["resolve_availability"] = $val;
        return $this;
    }
}
