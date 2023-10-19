<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommunicationsIdentitySet File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* CommunicationsIdentitySet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CommunicationsIdentitySet extends IdentitySet
{

    /**
    * Gets the applicationInstance
    *
    * @return Identity|null The applicationInstance
    */
    public function getApplicationInstance()
    {
        if (array_key_exists("applicationInstance", $this->_propDict)) {
            if (is_a($this->_propDict["applicationInstance"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["applicationInstance"])) {
                return $this->_propDict["applicationInstance"];
            } else {
                $this->_propDict["applicationInstance"] = new Identity($this->_propDict["applicationInstance"]);
                return $this->_propDict["applicationInstance"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationInstance
    *
    * @param Identity $val The value to assign to the applicationInstance
    *
    * @return CommunicationsIdentitySet The CommunicationsIdentitySet
    */
    public function setApplicationInstance($val)
    {
        $this->_propDict["applicationInstance"] = $val;
         return $this;
    }

    /**
    * Gets the assertedIdentity
    *
    * @return Identity|null The assertedIdentity
    */
    public function getAssertedIdentity()
    {
        if (array_key_exists("assertedIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["assertedIdentity"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["assertedIdentity"])) {
                return $this->_propDict["assertedIdentity"];
            } else {
                $this->_propDict["assertedIdentity"] = new Identity($this->_propDict["assertedIdentity"]);
                return $this->_propDict["assertedIdentity"];
            }
        }
        return null;
    }

    /**
    * Sets the assertedIdentity
    *
    * @param Identity $val The value to assign to the assertedIdentity
    *
    * @return CommunicationsIdentitySet The CommunicationsIdentitySet
    */
    public function setAssertedIdentity($val)
    {
        $this->_propDict["assertedIdentity"] = $val;
         return $this;
    }

    /**
    * Gets the azureCommunicationServicesUser
    *
    * @return Identity|null The azureCommunicationServicesUser
    */
    public function getAzureCommunicationServicesUser()
    {
        if (array_key_exists("azureCommunicationServicesUser", $this->_propDict)) {
            if (is_a($this->_propDict["azureCommunicationServicesUser"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["azureCommunicationServicesUser"])) {
                return $this->_propDict["azureCommunicationServicesUser"];
            } else {
                $this->_propDict["azureCommunicationServicesUser"] = new Identity($this->_propDict["azureCommunicationServicesUser"]);
                return $this->_propDict["azureCommunicationServicesUser"];
            }
        }
        return null;
    }

    /**
    * Sets the azureCommunicationServicesUser
    *
    * @param Identity $val The value to assign to the azureCommunicationServicesUser
    *
    * @return CommunicationsIdentitySet The CommunicationsIdentitySet
    */
    public function setAzureCommunicationServicesUser($val)
    {
        $this->_propDict["azureCommunicationServicesUser"] = $val;
         return $this;
    }

    /**
    * Gets the encrypted
    *
    * @return Identity|null The encrypted
    */
    public function getEncrypted()
    {
        if (array_key_exists("encrypted", $this->_propDict)) {
            if (is_a($this->_propDict["encrypted"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["encrypted"])) {
                return $this->_propDict["encrypted"];
            } else {
                $this->_propDict["encrypted"] = new Identity($this->_propDict["encrypted"]);
                return $this->_propDict["encrypted"];
            }
        }
        return null;
    }

    /**
    * Sets the encrypted
    *
    * @param Identity $val The value to assign to the encrypted
    *
    * @return CommunicationsIdentitySet The CommunicationsIdentitySet
    */
    public function setEncrypted($val)
    {
        $this->_propDict["encrypted"] = $val;
         return $this;
    }

    /**
    * Gets the endpointType
    *
    * @return EndpointType|null The endpointType
    */
    public function getEndpointType()
    {
        if (array_key_exists("endpointType", $this->_propDict)) {
            if (is_a($this->_propDict["endpointType"], "\Microsoft\Graph\Model\EndpointType") || is_null($this->_propDict["endpointType"])) {
                return $this->_propDict["endpointType"];
            } else {
                $this->_propDict["endpointType"] = new EndpointType($this->_propDict["endpointType"]);
                return $this->_propDict["endpointType"];
            }
        }
        return null;
    }

    /**
    * Sets the endpointType
    *
    * @param EndpointType $val The value to assign to the endpointType
    *
    * @return CommunicationsIdentitySet The CommunicationsIdentitySet
    */
    public function setEndpointType($val)
    {
        $this->_propDict["endpointType"] = $val;
         return $this;
    }

    /**
    * Gets the guest
    *
    * @return Identity|null The guest
    */
    public function getGuest()
    {
        if (array_key_exists("guest", $this->_propDict)) {
            if (is_a($this->_propDict["guest"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["guest"])) {
                return $this->_propDict["guest"];
            } else {
                $this->_propDict["guest"] = new Identity($this->_propDict["guest"]);
                return $this->_propDict["guest"];
            }
        }
        return null;
    }

    /**
    * Sets the guest
    *
    * @param Identity $val The value to assign to the guest
    *
    * @return CommunicationsIdentitySet The CommunicationsIdentitySet
    */
    public function setGuest($val)
    {
        $this->_propDict["guest"] = $val;
         return $this;
    }

    /**
    * Gets the onPremises
    *
    * @return Identity|null The onPremises
    */
    public function getOnPremises()
    {
        if (array_key_exists("onPremises", $this->_propDict)) {
            if (is_a($this->_propDict["onPremises"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["onPremises"])) {
                return $this->_propDict["onPremises"];
            } else {
                $this->_propDict["onPremises"] = new Identity($this->_propDict["onPremises"]);
                return $this->_propDict["onPremises"];
            }
        }
        return null;
    }

    /**
    * Sets the onPremises
    *
    * @param Identity $val The value to assign to the onPremises
    *
    * @return CommunicationsIdentitySet The CommunicationsIdentitySet
    */
    public function setOnPremises($val)
    {
        $this->_propDict["onPremises"] = $val;
         return $this;
    }

    /**
    * Gets the phone
    *
    * @return Identity|null The phone
    */
    public function getPhone()
    {
        if (array_key_exists("phone", $this->_propDict)) {
            if (is_a($this->_propDict["phone"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["phone"])) {
                return $this->_propDict["phone"];
            } else {
                $this->_propDict["phone"] = new Identity($this->_propDict["phone"]);
                return $this->_propDict["phone"];
            }
        }
        return null;
    }

    /**
    * Sets the phone
    *
    * @param Identity $val The value to assign to the phone
    *
    * @return CommunicationsIdentitySet The CommunicationsIdentitySet
    */
    public function setPhone($val)
    {
        $this->_propDict["phone"] = $val;
         return $this;
    }
}
