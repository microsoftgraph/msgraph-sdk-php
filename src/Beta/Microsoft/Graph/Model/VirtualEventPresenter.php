<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventPresenter File
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
* VirtualEventPresenter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventPresenter extends Entity
{
    /**
    * Gets the email
    * Email address of the presenter.
    *
    * @return string|null The email
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
    * Email address of the presenter.
    *
    * @param string $val The email
    *
    * @return VirtualEventPresenter
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }

    /**
    * Gets the identity
    * Identity information of the presenter.
    *
    * @return CommunicationsUserIdentity|null The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "\Beta\Microsoft\Graph\Model\CommunicationsUserIdentity") || is_null($this->_propDict["identity"])) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new CommunicationsUserIdentity($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    * Identity information of the presenter.
    *
    * @param CommunicationsUserIdentity $val The identity
    *
    * @return VirtualEventPresenter
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
        return $this;
    }

    /**
    * Gets the presenterDetails
    * Other detail information of the presenter.
    *
    * @return VirtualEventPresenterDetails|null The presenterDetails
    */
    public function getPresenterDetails()
    {
        if (array_key_exists("presenterDetails", $this->_propDict)) {
            if (is_a($this->_propDict["presenterDetails"], "\Beta\Microsoft\Graph\Model\VirtualEventPresenterDetails") || is_null($this->_propDict["presenterDetails"])) {
                return $this->_propDict["presenterDetails"];
            } else {
                $this->_propDict["presenterDetails"] = new VirtualEventPresenterDetails($this->_propDict["presenterDetails"]);
                return $this->_propDict["presenterDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the presenterDetails
    * Other detail information of the presenter.
    *
    * @param VirtualEventPresenterDetails $val The presenterDetails
    *
    * @return VirtualEventPresenter
    */
    public function setPresenterDetails($val)
    {
        $this->_propDict["presenterDetails"] = $val;
        return $this;
    }

}
