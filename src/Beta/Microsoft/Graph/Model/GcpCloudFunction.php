<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GcpCloudFunction File
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
* GcpCloudFunction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GcpCloudFunction extends GcpIdentity
{
    /**
    * Gets the resource
    *
    * @return GcpAuthorizationSystemResource|null The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\GcpAuthorizationSystemResource") || is_null($this->_propDict["resource"])) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new GcpAuthorizationSystemResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }

    /**
    * Sets the resource
    *
    * @param GcpAuthorizationSystemResource $val The resource
    *
    * @return GcpCloudFunction
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }

}
