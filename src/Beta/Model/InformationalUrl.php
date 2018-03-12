<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationalUrl File
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
* InformationalUrl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class InformationalUrl extends Entity
{
    /**
    * Gets the logoUrl
    *
    * @return string The logoUrl
    */
    public function getLogoUrl()
    {
        if (array_key_exists("logoUrl", $this->_propDict)) {
            return $this->_propDict["logoUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logoUrl
    *
    * @param string $val The value of the logoUrl
    *
    * @return InformationalUrl
    */
    public function setLogoUrl($val)
    {
        $this->_propDict["logoUrl"] = $val;
        return $this;
    }
    /**
    * Gets the marketingUrl
    *
    * @return string The marketingUrl
    */
    public function getMarketingUrl()
    {
        if (array_key_exists("marketingUrl", $this->_propDict)) {
            return $this->_propDict["marketingUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the marketingUrl
    *
    * @param string $val The value of the marketingUrl
    *
    * @return InformationalUrl
    */
    public function setMarketingUrl($val)
    {
        $this->_propDict["marketingUrl"] = $val;
        return $this;
    }
    /**
    * Gets the privacyStatementUrl
    *
    * @return string The privacyStatementUrl
    */
    public function getPrivacyStatementUrl()
    {
        if (array_key_exists("privacyStatementUrl", $this->_propDict)) {
            return $this->_propDict["privacyStatementUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the privacyStatementUrl
    *
    * @param string $val The value of the privacyStatementUrl
    *
    * @return InformationalUrl
    */
    public function setPrivacyStatementUrl($val)
    {
        $this->_propDict["privacyStatementUrl"] = $val;
        return $this;
    }
    /**
    * Gets the supportUrl
    *
    * @return string The supportUrl
    */
    public function getSupportUrl()
    {
        if (array_key_exists("supportUrl", $this->_propDict)) {
            return $this->_propDict["supportUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportUrl
    *
    * @param string $val The value of the supportUrl
    *
    * @return InformationalUrl
    */
    public function setSupportUrl($val)
    {
        $this->_propDict["supportUrl"] = $val;
        return $this;
    }
    /**
    * Gets the termsOfServiceUrl
    *
    * @return string The termsOfServiceUrl
    */
    public function getTermsOfServiceUrl()
    {
        if (array_key_exists("termsOfServiceUrl", $this->_propDict)) {
            return $this->_propDict["termsOfServiceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the termsOfServiceUrl
    *
    * @param string $val The value of the termsOfServiceUrl
    *
    * @return InformationalUrl
    */
    public function setTermsOfServiceUrl($val)
    {
        $this->_propDict["termsOfServiceUrl"] = $val;
        return $this;
    }
}
