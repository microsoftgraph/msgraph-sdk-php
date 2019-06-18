<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningSystemDetails File
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
* ProvisioningSystemDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ProvisioningSystemDetails extends Identity
{

    /**
    * Gets the details
    *
    * @return DetailsInfo The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "Microsoft\Graph\Beta\Model\DetailsInfo")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new DetailsInfo($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    *
    * @param DetailsInfo $val The value to assign to the details
    *
    * @return ProvisioningSystemDetails The ProvisioningSystemDetails
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
}
