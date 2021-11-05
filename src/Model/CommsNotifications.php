<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommsNotifications File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* CommsNotifications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CommsNotifications extends Entity
{

    /**
    * Gets the value
    * The notification of a change in the resource.
    *
    * @return CommsNotification[]|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict) && !is_null($this->_propDict["value"])) {
       
            if (count($this->_propDict['value']) > 0 && is_a($this->_propDict['value'][0], 'CommsNotification')) {
                return $this->_propDict['value'];
            }
            $value = [];
            foreach ($this->_propDict['value'] as $singleValue) {
                $value []= new CommsNotification($singleValue);
            }
            $this->_propDict['value'] = $value;
            return $this->_propDict['value'];
            }
        return null;
    }

    /**
    * Sets the value
    * The notification of a change in the resource.
    *
    * @param CommsNotification[] $val The value to assign to the value
    *
    * @return CommsNotifications The CommsNotifications
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
