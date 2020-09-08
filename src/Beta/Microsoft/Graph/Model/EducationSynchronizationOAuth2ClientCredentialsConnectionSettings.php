<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationOAuth2ClientCredentialsConnectionSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* EducationSynchronizationOAuth2ClientCredentialsConnectionSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationOAuth2ClientCredentialsConnectionSettings extends EducationSynchronizationConnectionSettings
{
    /**
    * Gets the scope
    *
    * @return string The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            return $this->_propDict["scope"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scope
    *
    * @param string $val The value of the scope
    *
    * @return EducationSynchronizationOAuth2ClientCredentialsConnectionSettings
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    /**
    * Gets the tokenUrl
    *
    * @return string The tokenUrl
    */
    public function getTokenUrl()
    {
        if (array_key_exists("tokenUrl", $this->_propDict)) {
            return $this->_propDict["tokenUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenUrl
    *
    * @param string $val The value of the tokenUrl
    *
    * @return EducationSynchronizationOAuth2ClientCredentialsConnectionSettings
    */
    public function setTokenUrl($val)
    {
        $this->_propDict["tokenUrl"] = $val;
        return $this;
    }
}
