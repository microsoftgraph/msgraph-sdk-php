<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityProvider File
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
* IdentityProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IdentityProvider extends Entity
{
    /**
    * Gets the type
    * The identity provider type. It must be one of the following values for B2C scenarios: MicrosoftGoogleAmazonLinkedInFacebookGitHubTwitterWeiboQQWeChatFor B2B scenarios, the value must be Google.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    * The identity provider type. It must be one of the following values for B2C scenarios: MicrosoftGoogleAmazonLinkedInFacebookGitHubTwitterWeiboQQWeChatFor B2B scenarios, the value must be Google.
    *
    * @param string $val The type
    *
    * @return IdentityProvider
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * The display name of the identity provider.
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
    * The display name of the identity provider.
    *
    * @param string $val The name
    *
    * @return IdentityProvider
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientId
    * The client ID for the application. This is the client ID obtained when registering the application with the identity provider.
    *
    * @return string The clientId
    */
    public function getClientId()
    {
        if (array_key_exists("clientId", $this->_propDict)) {
            return $this->_propDict["clientId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientId
    * The client ID for the application. This is the client ID obtained when registering the application with the identity provider.
    *
    * @param string $val The clientId
    *
    * @return IdentityProvider
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientSecret
    * The client secret for the application. This is the client secret obtained when registering the application with the identity provider. This is write-only. A read operation will return '****'.
    *
    * @return string The clientSecret
    */
    public function getClientSecret()
    {
        if (array_key_exists("clientSecret", $this->_propDict)) {
            return $this->_propDict["clientSecret"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientSecret
    * The client secret for the application. This is the client secret obtained when registering the application with the identity provider. This is write-only. A read operation will return '****'.
    *
    * @param string $val The clientSecret
    *
    * @return IdentityProvider
    */
    public function setClientSecret($val)
    {
        $this->_propDict["clientSecret"] = $val;
        return $this;
    }
    
}