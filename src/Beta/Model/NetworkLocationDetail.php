<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkLocationDetail File
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
* NetworkLocationDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class NetworkLocationDetail extends Entity
{

    /**
    * Gets the networkType
    *
    * @return NetworkType The networkType
    */
    public function getNetworkType()
    {
        if (array_key_exists("networkType", $this->_propDict)) {
            if (is_a($this->_propDict["networkType"], "Microsoft\Graph\Beta\Model\NetworkType")) {
                return $this->_propDict["networkType"];
            } else {
                $this->_propDict["networkType"] = new NetworkType($this->_propDict["networkType"]);
                return $this->_propDict["networkType"];
            }
        }
        return null;
    }

    /**
    * Sets the networkType
    *
    * @param NetworkType $val The value to assign to the networkType
    *
    * @return NetworkLocationDetail The NetworkLocationDetail
    */
    public function setNetworkType($val)
    {
        $this->_propDict["networkType"] = $val;
         return $this;
    }
    /**
    * Gets the networkNames
    *
    * @return string The networkNames
    */
    public function getNetworkNames()
    {
        if (array_key_exists("networkNames", $this->_propDict)) {
            return $this->_propDict["networkNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkNames
    *
    * @param string $val The value of the networkNames
    *
    * @return NetworkLocationDetail
    */
    public function setNetworkNames($val)
    {
        $this->_propDict["networkNames"] = $val;
        return $this;
    }
}
