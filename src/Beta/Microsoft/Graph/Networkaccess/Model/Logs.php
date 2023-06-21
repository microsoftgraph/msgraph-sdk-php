<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Logs File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* Logs class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Logs extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the traffic
     *
     * @return array|null The traffic
     */
    public function getTraffic()
    {
        if (array_key_exists("traffic", $this->_propDict)) {
           return $this->_propDict["traffic"];
        } else {
            return null;
        }
    }

    /**
    * Sets the traffic
    *
    * @param NetworkAccessTraffic[] $val The traffic
    *
    * @return Logs
    */
    public function setTraffic($val)
    {
        $this->_propDict["traffic"] = $val;
        return $this;
    }

}
