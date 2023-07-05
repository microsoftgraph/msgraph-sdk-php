<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppTroubleshootingEvent File
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
* MobileAppTroubleshootingEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppTroubleshootingEvent extends Entity
{

     /**
     * Gets the appLogCollectionRequests
    * Indicates collection of App Log Upload Request.
     *
     * @return array|null The appLogCollectionRequests
     */
    public function getAppLogCollectionRequests()
    {
        if (array_key_exists("appLogCollectionRequests", $this->_propDict)) {
           return $this->_propDict["appLogCollectionRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appLogCollectionRequests
    * Indicates collection of App Log Upload Request.
    *
    * @param AppLogCollectionRequest[] $val The appLogCollectionRequests
    *
    * @return MobileAppTroubleshootingEvent
    */
    public function setAppLogCollectionRequests($val)
    {
        $this->_propDict["appLogCollectionRequests"] = $val;
        return $this;
    }

}
