<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationSecurityState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* ApplicationSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ApplicationSecurityState extends Entity
{
    /**
    * Gets the deploymentPackageUrl
    *
    * @return string The deploymentPackageUrl
    */
    public function getDeploymentPackageUrl()
    {
        if (array_key_exists("deploymentPackageUrl", $this->_propDict)) {
            return $this->_propDict["deploymentPackageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deploymentPackageUrl
    *
    * @param string $val The value of the deploymentPackageUrl
    *
    * @return ApplicationSecurityState
    */
    public function setDeploymentPackageUrl($val)
    {
        $this->_propDict["deploymentPackageUrl"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return ApplicationSecurityState
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the permissionsRequired
    *
    * @return ApplicationPermissionsRequired The permissionsRequired
    */
    public function getPermissionsRequired()
    {
        if (array_key_exists("permissionsRequired", $this->_propDict)) {
            if (is_a($this->_propDict["permissionsRequired"], "Microsoft\Graph\Beta\Model\ApplicationPermissionsRequired")) {
                return $this->_propDict["permissionsRequired"];
            } else {
                $this->_propDict["permissionsRequired"] = new ApplicationPermissionsRequired($this->_propDict["permissionsRequired"]);
                return $this->_propDict["permissionsRequired"];
            }
        }
        return null;
    }

    /**
    * Sets the permissionsRequired
    *
    * @param ApplicationPermissionsRequired $val The value to assign to the permissionsRequired
    *
    * @return ApplicationSecurityState The ApplicationSecurityState
    */
    public function setPermissionsRequired($val)
    {
        $this->_propDict["permissionsRequired"] = $val;
         return $this;
    }
    /**
    * Gets the publisher
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    *
    * @param string $val The value of the publisher
    *
    * @return ApplicationSecurityState
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    /**
    * Gets the riskScore
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskScore
    *
    * @param string $val The value of the riskScore
    *
    * @return ApplicationSecurityState
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
}
