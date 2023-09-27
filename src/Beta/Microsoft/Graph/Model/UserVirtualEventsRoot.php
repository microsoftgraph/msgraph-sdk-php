<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserVirtualEventsRoot File
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
* UserVirtualEventsRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserVirtualEventsRoot extends Entity
{

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
    * @return UserVirtualEventsRoot
    */
    public function setWebinars($val)
    {
        $this->_propDict["webinars"] = $val;
        return $this;
    }

}
