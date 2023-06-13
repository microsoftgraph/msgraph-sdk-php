<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventsRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* VirtualEventsRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventsRoot extends Entity
{

     /**
     * Gets the events
     *
     * @return array|null The events
     */
    public function getEvents()
    {
        if (array_key_exists("events", $this->_propDict)) {
           return $this->_propDict["events"];
        } else {
            return null;
        }
    }

    /**
    * Sets the events
    *
    * @param VirtualEvent[] $val The events
    *
    * @return VirtualEventsRoot
    */
    public function setEvents($val)
    {
        $this->_propDict["events"] = $val;
        return $this;
    }


     /**
     * Gets the webinars
     *
     * @return array|null The webinars
     */
    public function getWebinars()
    {
        if (array_key_exists("webinars", $this->_propDict)) {
           return $this->_propDict["webinars"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webinars
    *
    * @param VirtualEventWebinar[] $val The webinars
    *
    * @return VirtualEventsRoot
    */
    public function setWebinars($val)
    {
        $this->_propDict["webinars"] = $val;
        return $this;
    }

}
