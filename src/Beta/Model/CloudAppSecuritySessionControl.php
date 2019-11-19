<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudAppSecuritySessionControl File
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
* CloudAppSecuritySessionControl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CloudAppSecuritySessionControl extends ConditionalAccessSessionControl
{

    /**
    * Gets the cloudAppSecurityType
    *
    * @return CloudAppSecuritySessionControlType The cloudAppSecurityType
    */
    public function getCloudAppSecurityType()
    {
        if (array_key_exists("cloudAppSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["cloudAppSecurityType"], "Microsoft\Graph\Beta\Model\CloudAppSecuritySessionControlType")) {
                return $this->_propDict["cloudAppSecurityType"];
            } else {
                $this->_propDict["cloudAppSecurityType"] = new CloudAppSecuritySessionControlType($this->_propDict["cloudAppSecurityType"]);
                return $this->_propDict["cloudAppSecurityType"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudAppSecurityType
    *
    * @param CloudAppSecuritySessionControlType $val The value to assign to the cloudAppSecurityType
    *
    * @return CloudAppSecuritySessionControl The CloudAppSecuritySessionControl
    */
    public function setCloudAppSecurityType($val)
    {
        $this->_propDict["cloudAppSecurityType"] = $val;
         return $this;
    }
}
