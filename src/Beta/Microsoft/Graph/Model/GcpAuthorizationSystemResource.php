<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GcpAuthorizationSystemResource File
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
* GcpAuthorizationSystemResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GcpAuthorizationSystemResource extends AuthorizationSystemResource
{
    /**
    * Gets the service
    *
    * @return AuthorizationSystemTypeService|null The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            if (is_a($this->_propDict["service"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemTypeService") || is_null($this->_propDict["service"])) {
                return $this->_propDict["service"];
            } else {
                $this->_propDict["service"] = new AuthorizationSystemTypeService($this->_propDict["service"]);
                return $this->_propDict["service"];
            }
        }
        return null;
    }

    /**
    * Sets the service
    *
    * @param AuthorizationSystemTypeService $val The service
    *
    * @return GcpAuthorizationSystemResource
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }

}
