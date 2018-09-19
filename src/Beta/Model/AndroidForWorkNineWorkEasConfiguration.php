<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkNineWorkEasConfiguration File
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
* AndroidForWorkNineWorkEasConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkNineWorkEasConfiguration extends AndroidForWorkEasEmailProfileBase
{
    /**
    * Gets the syncCalendar
    *
    * @return bool The syncCalendar
    */
    public function getSyncCalendar()
    {
        if (array_key_exists("syncCalendar", $this->_propDict)) {
            return $this->_propDict["syncCalendar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncCalendar
    *
    * @param bool $val The syncCalendar
    *
    * @return AndroidForWorkNineWorkEasConfiguration
    */
    public function setSyncCalendar($val)
    {
        $this->_propDict["syncCalendar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncContacts
    *
    * @return bool The syncContacts
    */
    public function getSyncContacts()
    {
        if (array_key_exists("syncContacts", $this->_propDict)) {
            return $this->_propDict["syncContacts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncContacts
    *
    * @param bool $val The syncContacts
    *
    * @return AndroidForWorkNineWorkEasConfiguration
    */
    public function setSyncContacts($val)
    {
        $this->_propDict["syncContacts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncTasks
    *
    * @return bool The syncTasks
    */
    public function getSyncTasks()
    {
        if (array_key_exists("syncTasks", $this->_propDict)) {
            return $this->_propDict["syncTasks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncTasks
    *
    * @param bool $val The syncTasks
    *
    * @return AndroidForWorkNineWorkEasConfiguration
    */
    public function setSyncTasks($val)
    {
        $this->_propDict["syncTasks"] = boolval($val);
        return $this;
    }
    
}