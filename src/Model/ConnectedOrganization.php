<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectedOrganization File
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
* ConnectedOrganization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectedOrganization extends Entity
{
    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ConnectedOrganization
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of the connected organization.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the connected organization.
    *
    * @param string $val The description
    *
    * @return ConnectedOrganization
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the connected organization.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the connected organization.
    *
    * @param string $val The displayName
    *
    * @return ConnectedOrganization
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the identitySources
     *
     * @return IdentitySource[]|null The identitySources
     */
    public function getIdentitySources()
    {
        if (array_key_exists('identitySources', $this->_propDict) && !is_null($this->_propDict['identitySources'])) {
            $identitySources = [];
            if (count($this->_propDict['identitySources']) > 0 && is_a($this->_propDict['identitySources'][0], 'IdentitySource')) {
                return $this->_propDict['identitySources'];
            }
            foreach ($this->_propDict['identitySources'] as $singleValue) {
                $identitySources []= new IdentitySource($singleValue);
            }
            $this->_propDict['identitySources'] = $identitySources;
            return $this->_propDict['identitySources'];
        }
        return null;
    }

    /**
    * Sets the identitySources
    *
    * @param IdentitySource[] $val The identitySources
    *
    * @return ConnectedOrganization
    */
    public function setIdentitySources($val)
    {
        $this->_propDict["identitySources"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict) && !is_null($this->_propDict["modifiedDateTime"])) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return ConnectedOrganization
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not. Possible values are: configured, proposed.
    *
    * @return ConnectedOrganizationState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict) && !is_null($this->_propDict["state"])) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\ConnectedOrganizationState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ConnectedOrganizationState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not. Possible values are: configured, proposed.
    *
    * @param ConnectedOrganizationState $val The state
    *
    * @return ConnectedOrganization
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }


     /**
     * Gets the externalSponsors
    * Nullable.
     *
     * @return DirectoryObject[]|null The externalSponsors
     */
    public function getExternalSponsors()
    {
        if (array_key_exists('externalSponsors', $this->_propDict) && !is_null($this->_propDict['externalSponsors'])) {
            $externalSponsors = [];
            if (count($this->_propDict['externalSponsors']) > 0 && is_a($this->_propDict['externalSponsors'][0], 'DirectoryObject')) {
                return $this->_propDict['externalSponsors'];
            }
            foreach ($this->_propDict['externalSponsors'] as $singleValue) {
                $externalSponsors []= new DirectoryObject($singleValue);
            }
            $this->_propDict['externalSponsors'] = $externalSponsors;
            return $this->_propDict['externalSponsors'];
        }
        return null;
    }

    /**
    * Sets the externalSponsors
    * Nullable.
    *
    * @param DirectoryObject[] $val The externalSponsors
    *
    * @return ConnectedOrganization
    */
    public function setExternalSponsors($val)
    {
        $this->_propDict["externalSponsors"] = $val;
        return $this;
    }


     /**
     * Gets the internalSponsors
    * Nullable.
     *
     * @return DirectoryObject[]|null The internalSponsors
     */
    public function getInternalSponsors()
    {
        if (array_key_exists('internalSponsors', $this->_propDict) && !is_null($this->_propDict['internalSponsors'])) {
            $internalSponsors = [];
            if (count($this->_propDict['internalSponsors']) > 0 && is_a($this->_propDict['internalSponsors'][0], 'DirectoryObject')) {
                return $this->_propDict['internalSponsors'];
            }
            foreach ($this->_propDict['internalSponsors'] as $singleValue) {
                $internalSponsors []= new DirectoryObject($singleValue);
            }
            $this->_propDict['internalSponsors'] = $internalSponsors;
            return $this->_propDict['internalSponsors'];
        }
        return null;
    }

    /**
    * Sets the internalSponsors
    * Nullable.
    *
    * @param DirectoryObject[] $val The internalSponsors
    *
    * @return ConnectedOrganization
    */
    public function setInternalSponsors($val)
    {
        $this->_propDict["internalSponsors"] = $val;
        return $this;
    }

}
