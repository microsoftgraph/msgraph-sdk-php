<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParticipantInfo File
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
* ParticipantInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ParticipantInfo extends Entity
{

    /**
    * Gets the identity
    *
    * @return IdentitySet The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new IdentitySet($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    *
    * @param IdentitySet $val The value to assign to the identity
    *
    * @return ParticipantInfo The ParticipantInfo
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
         return $this;
    }
    /**
    * Gets the region
    *
    * @return string The region
    */
    public function getRegion()
    {
        if (array_key_exists("region", $this->_propDict)) {
            return $this->_propDict["region"];
        } else {
            return null;
        }
    }

    /**
    * Sets the region
    *
    * @param string $val The value of the region
    *
    * @return ParticipantInfo
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
        return $this;
    }
    /**
    * Gets the languageId
    *
    * @return string The languageId
    */
    public function getLanguageId()
    {
        if (array_key_exists("languageId", $this->_propDict)) {
            return $this->_propDict["languageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageId
    *
    * @param string $val The value of the languageId
    *
    * @return ParticipantInfo
    */
    public function setLanguageId($val)
    {
        $this->_propDict["languageId"] = $val;
        return $this;
    }
}
