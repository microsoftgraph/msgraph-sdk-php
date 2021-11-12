<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GraphCase File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Ediscovery\Model;

/**
* GraphCase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GraphCase extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the closedBy
    * The user who closed the case.
    *
    * @return \Microsoft\Graph\Model\IdentitySet|null The closedBy
    */
    public function getClosedBy()
    {
        if (array_key_exists("closedBy", $this->_propDict) && !is_null($this->_propDict["closedBy"])) {
            if (is_a($this->_propDict["closedBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["closedBy"];
            } else {
                $this->_propDict["closedBy"] = new \Microsoft\Graph\Model\IdentitySet($this->_propDict["closedBy"]);
                return $this->_propDict["closedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the closedBy
    * The user who closed the case.
    *
    * @param \Microsoft\Graph\Model\IdentitySet $val The closedBy
    *
    * @return GraphCase
    */
    public function setClosedBy($val)
    {
        $this->_propDict["closedBy"] = $val;
        return $this;
    }

    /**
    * Gets the closedDateTime
    * The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The closedDateTime
    */
    public function getClosedDateTime()
    {
        if (array_key_exists("closedDateTime", $this->_propDict) && !is_null($this->_propDict["closedDateTime"])) {
            if (is_a($this->_propDict["closedDateTime"], "\DateTime")) {
                return $this->_propDict["closedDateTime"];
            } else {
                $this->_propDict["closedDateTime"] = new \DateTime($this->_propDict["closedDateTime"]);
                return $this->_propDict["closedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the closedDateTime
    * The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The closedDateTime
    *
    * @return GraphCase
    */
    public function setClosedDateTime($val)
    {
        $this->_propDict["closedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return GraphCase
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The case description.
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
    * The case description.
    *
    * @param string $val The description
    *
    * @return GraphCase
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The case name.
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
    * The case name.
    *
    * @param string $val The displayName
    *
    * @return GraphCase
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    * The external case number for customer reference.
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    * The external case number for customer reference.
    *
    * @param string $val The externalId
    *
    * @return GraphCase
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The last user who modified the entity.
    *
    * @return \Microsoft\Graph\Model\IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict) && !is_null($this->_propDict["lastModifiedBy"])) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new \Microsoft\Graph\Model\IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * The last user who modified the entity.
    *
    * @param \Microsoft\Graph\Model\IdentitySet $val The lastModifiedBy
    *
    * @return GraphCase
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["lastModifiedDateTime"])) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return GraphCase
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
    *
    * @return CaseStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict) && !is_null($this->_propDict["status"])) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Ediscovery\Model\CaseStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CaseStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
    *
    * @param CaseStatus $val The status
    *
    * @return GraphCase
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the custodians
    * Returns a list of case custodian objects for this case.  Nullable.
     *
     * @return Custodian[]|null The custodians
     */
    public function getCustodians()
    {
        if (array_key_exists('custodians', $this->_propDict) && !is_null($this->_propDict['custodians'])) {
            $custodians = [];
            if (count($this->_propDict['custodians']) > 0 && is_a($this->_propDict['custodians'][0], 'Custodian')) {
                return $this->_propDict['custodians'];
            }
            foreach ($this->_propDict['custodians'] as $singleValue) {
                $custodians []= new Custodian($singleValue);
            }
            $this->_propDict['custodians'] = $custodians;
            return $this->_propDict['custodians'];
        }
        return null;
    }

    /**
    * Sets the custodians
    * Returns a list of case custodian objects for this case.  Nullable.
    *
    * @param Custodian[] $val The custodians
    *
    * @return GraphCase
    */
    public function setCustodians($val)
    {
        $this->_propDict["custodians"] = $val;
        return $this;
    }


     /**
     * Gets the legalHolds
    * Returns a list of case legalHold objects for this case.  Nullable.
     *
     * @return LegalHold[]|null The legalHolds
     */
    public function getLegalHolds()
    {
        if (array_key_exists('legalHolds', $this->_propDict) && !is_null($this->_propDict['legalHolds'])) {
            $legalHolds = [];
            if (count($this->_propDict['legalHolds']) > 0 && is_a($this->_propDict['legalHolds'][0], 'LegalHold')) {
                return $this->_propDict['legalHolds'];
            }
            foreach ($this->_propDict['legalHolds'] as $singleValue) {
                $legalHolds []= new LegalHold($singleValue);
            }
            $this->_propDict['legalHolds'] = $legalHolds;
            return $this->_propDict['legalHolds'];
        }
        return null;
    }

    /**
    * Sets the legalHolds
    * Returns a list of case legalHold objects for this case.  Nullable.
    *
    * @param LegalHold[] $val The legalHolds
    *
    * @return GraphCase
    */
    public function setLegalHolds($val)
    {
        $this->_propDict["legalHolds"] = $val;
        return $this;
    }


     /**
     * Gets the noncustodialDataSources
    * Returns a list of case noncustodialDataSource objects for this case.  Nullable.
     *
     * @return NoncustodialDataSource[]|null The noncustodialDataSources
     */
    public function getNoncustodialDataSources()
    {
        if (array_key_exists('noncustodialDataSources', $this->_propDict) && !is_null($this->_propDict['noncustodialDataSources'])) {
            $noncustodialDataSources = [];
            if (count($this->_propDict['noncustodialDataSources']) > 0 && is_a($this->_propDict['noncustodialDataSources'][0], 'NoncustodialDataSource')) {
                return $this->_propDict['noncustodialDataSources'];
            }
            foreach ($this->_propDict['noncustodialDataSources'] as $singleValue) {
                $noncustodialDataSources []= new NoncustodialDataSource($singleValue);
            }
            $this->_propDict['noncustodialDataSources'] = $noncustodialDataSources;
            return $this->_propDict['noncustodialDataSources'];
        }
        return null;
    }

    /**
    * Sets the noncustodialDataSources
    * Returns a list of case noncustodialDataSource objects for this case.  Nullable.
    *
    * @param NoncustodialDataSource[] $val The noncustodialDataSources
    *
    * @return GraphCase
    */
    public function setNoncustodialDataSources($val)
    {
        $this->_propDict["noncustodialDataSources"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * Returns a list of case operation objects for this case. Nullable.
     *
     * @return CaseOperation[]|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists('operations', $this->_propDict) && !is_null($this->_propDict['operations'])) {
            $operations = [];
            if (count($this->_propDict['operations']) > 0 && is_a($this->_propDict['operations'][0], 'CaseOperation')) {
                return $this->_propDict['operations'];
            }
            foreach ($this->_propDict['operations'] as $singleValue) {
                $operations []= new CaseOperation($singleValue);
            }
            $this->_propDict['operations'] = $operations;
            return $this->_propDict['operations'];
        }
        return null;
    }

    /**
    * Sets the operations
    * Returns a list of case operation objects for this case. Nullable.
    *
    * @param CaseOperation[] $val The operations
    *
    * @return GraphCase
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the reviewSets
    * Returns a list of reviewSet objects in the case. Read-only. Nullable.
     *
     * @return ReviewSet[]|null The reviewSets
     */
    public function getReviewSets()
    {
        if (array_key_exists('reviewSets', $this->_propDict) && !is_null($this->_propDict['reviewSets'])) {
            $reviewSets = [];
            if (count($this->_propDict['reviewSets']) > 0 && is_a($this->_propDict['reviewSets'][0], 'ReviewSet')) {
                return $this->_propDict['reviewSets'];
            }
            foreach ($this->_propDict['reviewSets'] as $singleValue) {
                $reviewSets []= new ReviewSet($singleValue);
            }
            $this->_propDict['reviewSets'] = $reviewSets;
            return $this->_propDict['reviewSets'];
        }
        return null;
    }

    /**
    * Sets the reviewSets
    * Returns a list of reviewSet objects in the case. Read-only. Nullable.
    *
    * @param ReviewSet[] $val The reviewSets
    *
    * @return GraphCase
    */
    public function setReviewSets($val)
    {
        $this->_propDict["reviewSets"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    *
    * @return CaseSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict) && !is_null($this->_propDict["settings"])) {
            if (is_a($this->_propDict["settings"], "\Microsoft\Graph\Ediscovery\Model\CaseSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new CaseSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    *
    * @param CaseSettings $val The settings
    *
    * @return GraphCase
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }


     /**
     * Gets the sourceCollections
    * Returns a list of sourceCollection objects associated with this case.
     *
     * @return SourceCollection[]|null The sourceCollections
     */
    public function getSourceCollections()
    {
        if (array_key_exists('sourceCollections', $this->_propDict) && !is_null($this->_propDict['sourceCollections'])) {
            $sourceCollections = [];
            if (count($this->_propDict['sourceCollections']) > 0 && is_a($this->_propDict['sourceCollections'][0], 'SourceCollection')) {
                return $this->_propDict['sourceCollections'];
            }
            foreach ($this->_propDict['sourceCollections'] as $singleValue) {
                $sourceCollections []= new SourceCollection($singleValue);
            }
            $this->_propDict['sourceCollections'] = $sourceCollections;
            return $this->_propDict['sourceCollections'];
        }
        return null;
    }

    /**
    * Sets the sourceCollections
    * Returns a list of sourceCollection objects associated with this case.
    *
    * @param SourceCollection[] $val The sourceCollections
    *
    * @return GraphCase
    */
    public function setSourceCollections($val)
    {
        $this->_propDict["sourceCollections"] = $val;
        return $this;
    }


     /**
     * Gets the tags
    * Returns a list of tag objects associated to this case.
     *
     * @return Tag[]|null The tags
     */
    public function getTags()
    {
        if (array_key_exists('tags', $this->_propDict) && !is_null($this->_propDict['tags'])) {
            $tags = [];
            if (count($this->_propDict['tags']) > 0 && is_a($this->_propDict['tags'][0], 'Tag')) {
                return $this->_propDict['tags'];
            }
            foreach ($this->_propDict['tags'] as $singleValue) {
                $tags []= new Tag($singleValue);
            }
            $this->_propDict['tags'] = $tags;
            return $this->_propDict['tags'];
        }
        return null;
    }

    /**
    * Sets the tags
    * Returns a list of tag objects associated to this case.
    *
    * @param Tag[] $val The tags
    *
    * @return GraphCase
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

}
