<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityProtectionRoot File
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
* IdentityProtectionRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityProtectionRoot implements \JsonSerializable
{

     /**
     * Gets the riskDetections
     *
     * @return array The riskDetections
     */
    public function getRiskDetections()
    {
        if (array_key_exists("riskDetections", $this->_propDict)) {
           return $this->_propDict["riskDetections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskDetections
    *
    * @param RiskDetection $val The riskDetections
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskDetections($val)
    {
        $this->_propDict["riskDetections"] = $val;
        return $this;
    }


     /**
     * Gets the riskyUsers
     *
     * @return array The riskyUsers
     */
    public function getRiskyUsers()
    {
        if (array_key_exists("riskyUsers", $this->_propDict)) {
           return $this->_propDict["riskyUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskyUsers
    *
    * @param RiskyUser $val The riskyUsers
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskyUsers($val)
    {
        $this->_propDict["riskyUsers"] = $val;
        return $this;
    }

}
