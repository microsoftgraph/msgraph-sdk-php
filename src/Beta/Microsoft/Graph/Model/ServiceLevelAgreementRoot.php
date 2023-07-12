<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceLevelAgreementRoot File
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
* ServiceLevelAgreementRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceLevelAgreementRoot extends Entity
{
    /**
    * Gets the azureADAuthentication
    * Collects the Azure AD SLA attainment for each month for an Azure AD tenant.
    *
    * @return AzureADAuthentication|null The azureADAuthentication
    */
    public function getAzureADAuthentication()
    {
        if (array_key_exists("azureADAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["azureADAuthentication"], "\Beta\Microsoft\Graph\Model\AzureADAuthentication") || is_null($this->_propDict["azureADAuthentication"])) {
                return $this->_propDict["azureADAuthentication"];
            } else {
                $this->_propDict["azureADAuthentication"] = new AzureADAuthentication($this->_propDict["azureADAuthentication"]);
                return $this->_propDict["azureADAuthentication"];
            }
        }
        return null;
    }

    /**
    * Sets the azureADAuthentication
    * Collects the Azure AD SLA attainment for each month for an Azure AD tenant.
    *
    * @param AzureADAuthentication $val The azureADAuthentication
    *
    * @return ServiceLevelAgreementRoot
    */
    public function setAzureADAuthentication($val)
    {
        $this->_propDict["azureADAuthentication"] = $val;
        return $this;
    }

}
