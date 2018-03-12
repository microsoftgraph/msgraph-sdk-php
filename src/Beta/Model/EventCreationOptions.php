<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventCreationOptions File
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
* EventCreationOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EventCreationOptions extends Entity
{
    /**
    * Gets the saveToGroupCalendarOnly
    *
    * @return bool The saveToGroupCalendarOnly
    */
    public function getSaveToGroupCalendarOnly()
    {
        if (array_key_exists("saveToGroupCalendarOnly", $this->_propDict)) {
            return $this->_propDict["saveToGroupCalendarOnly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the saveToGroupCalendarOnly
    *
    * @param bool $val The value of the saveToGroupCalendarOnly
    *
    * @return EventCreationOptions
    */
    public function setSaveToGroupCalendarOnly($val)
    {
        $this->_propDict["saveToGroupCalendarOnly"] = $val;
        return $this;
    }
}
