<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppCredentialSignInActivity File
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
* AppCredentialSignInActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppCredentialSignInActivity extends Entity
{
    /**
    * Gets the appId
    * The globally unique appId (also called client ID on the Microsoft Entra admin center) of the credential application.
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The globally unique appId (also called client ID on the Microsoft Entra admin center) of the credential application.
    *
    * @param string $val The appId
    *
    * @return AppCredentialSignInActivity
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the appObjectId
    * The ID of the credential application instance.
    *
    * @return string|null The appObjectId
    */
    public function getAppObjectId()
    {
        if (array_key_exists("appObjectId", $this->_propDict)) {
            return $this->_propDict["appObjectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appObjectId
    * The ID of the credential application instance.
    *
    * @param string $val The appObjectId
    *
    * @return AppCredentialSignInActivity
    */
    public function setAppObjectId($val)
    {
        $this->_propDict["appObjectId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the credential was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time when the credential was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AppCredentialSignInActivity
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the credentialOrigin
    * The type the key credential originated from. Possible values are: application, servicePrincipal, unknownFutureValue.
    *
    * @return ApplicationKeyOrigin|null The credentialOrigin
    */
    public function getCredentialOrigin()
    {
        if (array_key_exists("credentialOrigin", $this->_propDict)) {
            if (is_a($this->_propDict["credentialOrigin"], "\Beta\Microsoft\Graph\Model\ApplicationKeyOrigin") || is_null($this->_propDict["credentialOrigin"])) {
                return $this->_propDict["credentialOrigin"];
            } else {
                $this->_propDict["credentialOrigin"] = new ApplicationKeyOrigin($this->_propDict["credentialOrigin"]);
                return $this->_propDict["credentialOrigin"];
            }
        }
        return null;
    }

    /**
    * Sets the credentialOrigin
    * The type the key credential originated from. Possible values are: application, servicePrincipal, unknownFutureValue.
    *
    * @param ApplicationKeyOrigin $val The credentialOrigin
    *
    * @return AppCredentialSignInActivity
    */
    public function setCredentialOrigin($val)
    {
        $this->_propDict["credentialOrigin"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * The date and time when the credential is set to expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * The date and time when the credential is set to expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return AppCredentialSignInActivity
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the keyId
    * The key ID of the credential.
    *
    * @return string|null The keyId
    */
    public function getKeyId()
    {
        if (array_key_exists("keyId", $this->_propDict)) {
            return $this->_propDict["keyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyId
    * The key ID of the credential.
    *
    * @param string $val The keyId
    *
    * @return AppCredentialSignInActivity
    */
    public function setKeyId($val)
    {
        $this->_propDict["keyId"] = $val;
        return $this;
    }

    /**
    * Gets the keyType
    * Specifies the key type. The possible values are: clientSecret, certificate, unknownFutureValue.
    *
    * @return ApplicationKeyType|null The keyType
    */
    public function getKeyType()
    {
        if (array_key_exists("keyType", $this->_propDict)) {
            if (is_a($this->_propDict["keyType"], "\Beta\Microsoft\Graph\Model\ApplicationKeyType") || is_null($this->_propDict["keyType"])) {
                return $this->_propDict["keyType"];
            } else {
                $this->_propDict["keyType"] = new ApplicationKeyType($this->_propDict["keyType"]);
                return $this->_propDict["keyType"];
            }
        }
        return null;
    }

    /**
    * Sets the keyType
    * Specifies the key type. The possible values are: clientSecret, certificate, unknownFutureValue.
    *
    * @param ApplicationKeyType $val The keyType
    *
    * @return AppCredentialSignInActivity
    */
    public function setKeyType($val)
    {
        $this->_propDict["keyType"] = $val;
        return $this;
    }

    /**
    * Gets the keyUsage
    * Specifies what the key was used for. The possible values are: sign, verify, unknownFutureValue.
    *
    * @return ApplicationKeyUsage|null The keyUsage
    */
    public function getKeyUsage()
    {
        if (array_key_exists("keyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["keyUsage"], "\Beta\Microsoft\Graph\Model\ApplicationKeyUsage") || is_null($this->_propDict["keyUsage"])) {
                return $this->_propDict["keyUsage"];
            } else {
                $this->_propDict["keyUsage"] = new ApplicationKeyUsage($this->_propDict["keyUsage"]);
                return $this->_propDict["keyUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the keyUsage
    * Specifies what the key was used for. The possible values are: sign, verify, unknownFutureValue.
    *
    * @param ApplicationKeyUsage $val The keyUsage
    *
    * @return AppCredentialSignInActivity
    */
    public function setKeyUsage($val)
    {
        $this->_propDict["keyUsage"] = $val;
        return $this;
    }

    /**
    * Gets the resourceId
    * The ID of the accessed resource.
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    * The ID of the accessed resource.
    *
    * @param string $val The resourceId
    *
    * @return AppCredentialSignInActivity
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalObjectId
    * The ID of the service principal.
    *
    * @return string|null The servicePrincipalObjectId
    */
    public function getServicePrincipalObjectId()
    {
        if (array_key_exists("servicePrincipalObjectId", $this->_propDict)) {
            return $this->_propDict["servicePrincipalObjectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalObjectId
    * The ID of the service principal.
    *
    * @param string $val The servicePrincipalObjectId
    *
    * @return AppCredentialSignInActivity
    */
    public function setServicePrincipalObjectId($val)
    {
        $this->_propDict["servicePrincipalObjectId"] = $val;
        return $this;
    }

    /**
    * Gets the signInActivity
    * The sign-in activity of the credential across all flows.
    *
    * @return SignInActivity|null The signInActivity
    */
    public function getSignInActivity()
    {
        if (array_key_exists("signInActivity", $this->_propDict)) {
            if (is_a($this->_propDict["signInActivity"], "\Beta\Microsoft\Graph\Model\SignInActivity") || is_null($this->_propDict["signInActivity"])) {
                return $this->_propDict["signInActivity"];
            } else {
                $this->_propDict["signInActivity"] = new SignInActivity($this->_propDict["signInActivity"]);
                return $this->_propDict["signInActivity"];
            }
        }
        return null;
    }

    /**
    * Sets the signInActivity
    * The sign-in activity of the credential across all flows.
    *
    * @param SignInActivity $val The signInActivity
    *
    * @return AppCredentialSignInActivity
    */
    public function setSignInActivity($val)
    {
        $this->_propDict["signInActivity"] = $val;
        return $this;
    }

}
