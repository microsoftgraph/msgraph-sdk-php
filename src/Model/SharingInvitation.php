<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharingInvitation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* SharingInvitation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SharingInvitation extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * SharingInvitation constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return SharingInvitation
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the SharingInvitation
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the email
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    *
    * @param string $val The value of the email
    *
    * @return SharingInvitation
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }

    /**
    * Gets the invitedBy
    *
    * @return IdentitySet The invitedBy
    */
    public function getInvitedBy()
    {
        if (array_key_exists("invitedBy", $this->_propDict)) {
            if (is_a($this->_propDict["invitedBy"], "IdentitySet")) {
                return $this->_propDict["invitedBy"];
            } else {
                $this->_propDict["invitedBy"] = new IdentitySet($this->_propDict["invitedBy"]);
                return $this->_propDict["invitedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the invitedBy
    *
    * @param IdentitySet $val The value to assign to the invitedBy
    *
    * @return SharingInvitation The SharingInvitation
    */
    public function setInvitedBy($val)
    {
        $this->_propDict["invitedBy"] = $val;
         return $this;
    }
    
    /**
    * Gets the redeemedBy
    *
    * @return string The redeemedBy
    */
    public function getRedeemedBy()
    {
        if (array_key_exists("redeemedBy", $this->_propDict)) {
            return $this->_propDict["redeemedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redeemedBy
    *
    * @param string $val The value of the redeemedBy
    *
    * @return SharingInvitation
    */
    public function setRedeemedBy($val)
    {
        $this->_propDict["redeemed_by"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInRequired
    *
    * @return bool The signInRequired
    */
    public function getSignInRequired()
    {
        if (array_key_exists("signInRequired", $this->_propDict)) {
            return $this->_propDict["signInRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInRequired
    *
    * @param bool $val The value of the signInRequired
    *
    * @return SharingInvitation
    */
    public function setSignInRequired($val)
    {
        $this->_propDict["sign_in_required"] = $val;
        return $this;
    }
}
