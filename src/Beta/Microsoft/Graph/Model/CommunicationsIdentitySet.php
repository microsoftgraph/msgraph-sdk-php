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
namespace Beta\Microsoft\Graph\Model;
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
    * Gets the assertedIdentity
    * An identity the participant would like to present itself as to the other participants in the call.
    *
    * @return Identity|null The assertedIdentity
    */
    public function getAssertedIdentity()
    {
        if (array_key_exists("assertedIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["assertedIdentity"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["assertedIdentity"])) {
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
    * An identity the participant would like to present itself as to the other participants in the call.
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
    * The Azure Communication Services user associated with this action.
    *
    * @return Identity|null The azureCommunicationServicesUser
    */
    public function getAzureCommunicationServicesUser()
    {
        if (array_key_exists("azureCommunicationServicesUser", $this->_propDict)) {
            if (is_a($this->_propDict["azureCommunicationServicesUser"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["azureCommunicationServicesUser"])) {
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
    * The Azure Communication Services user associated with this action.
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
    * Gets the endpointType
    * Type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue.
    *
    * @return EndpointType|null The endpointType
    */
    public function getEndpointType()
    {
        if (array_key_exists("endpointType", $this->_propDict)) {
            if (is_a($this->_propDict["endpointType"], "\Beta\Microsoft\Graph\Model\EndpointType") || is_null($this->_propDict["endpointType"])) {
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
    * Type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue.
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
}
