<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectRightsRequest File
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
* SubjectRightsRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectRightsRequest extends Entity
{
    /**
    * Gets the assignedTo
    * Identity that the request is assigned to.
    *
    * @return Identity|null The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            if (is_a($this->_propDict["assignedTo"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["assignedTo"])) {
                return $this->_propDict["assignedTo"];
            } else {
                $this->_propDict["assignedTo"] = new Identity($this->_propDict["assignedTo"]);
                return $this->_propDict["assignedTo"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedTo
    * Identity that the request is assigned to.
    *
    * @param Identity $val The assignedTo
    *
    * @return SubjectRightsRequest
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }

    /**
    * Gets the closedDateTime
    * The date and time when the request was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The closedDateTime
    */
    public function getClosedDateTime()
    {
        if (array_key_exists("closedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["closedDateTime"], "\DateTime") || is_null($this->_propDict["closedDateTime"])) {
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
    * The date and time when the request was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The closedDateTime
    *
    * @return SubjectRightsRequest
    */
    public function setClosedDateTime($val)
    {
        $this->_propDict["closedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the contentQuery
    * KQL based content query that should be used for search. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @return string|null The contentQuery
    */
    public function getContentQuery()
    {
        if (array_key_exists("contentQuery", $this->_propDict)) {
            return $this->_propDict["contentQuery"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentQuery
    * KQL based content query that should be used for search. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @param string $val The contentQuery
    *
    * @return SubjectRightsRequest
    */
    public function setContentQuery($val)
    {
        $this->_propDict["contentQuery"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Identity information for the entity that created the request.
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity information for the entity that created the request.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return SubjectRightsRequest
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the request was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when the request was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return SubjectRightsRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the dataSubject
    * Information about the data subject.
    *
    * @return DataSubject|null The dataSubject
    */
    public function getDataSubject()
    {
        if (array_key_exists("dataSubject", $this->_propDict)) {
            if (is_a($this->_propDict["dataSubject"], "\Beta\Microsoft\Graph\Model\DataSubject") || is_null($this->_propDict["dataSubject"])) {
                return $this->_propDict["dataSubject"];
            } else {
                $this->_propDict["dataSubject"] = new DataSubject($this->_propDict["dataSubject"]);
                return $this->_propDict["dataSubject"];
            }
        }
        return null;
    }

    /**
    * Sets the dataSubject
    * Information about the data subject.
    *
    * @param DataSubject $val The dataSubject
    *
    * @return SubjectRightsRequest
    */
    public function setDataSubject($val)
    {
        $this->_propDict["dataSubject"] = $val;
        return $this;
    }

    /**
    * Gets the dataSubjectType
    * The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
    *
    * @return DataSubjectType|null The dataSubjectType
    */
    public function getDataSubjectType()
    {
        if (array_key_exists("dataSubjectType", $this->_propDict)) {
            if (is_a($this->_propDict["dataSubjectType"], "\Beta\Microsoft\Graph\Model\DataSubjectType") || is_null($this->_propDict["dataSubjectType"])) {
                return $this->_propDict["dataSubjectType"];
            } else {
                $this->_propDict["dataSubjectType"] = new DataSubjectType($this->_propDict["dataSubjectType"]);
                return $this->_propDict["dataSubjectType"];
            }
        }
        return null;
    }

    /**
    * Sets the dataSubjectType
    * The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
    *
    * @param DataSubjectType $val The dataSubjectType
    *
    * @return SubjectRightsRequest
    */
    public function setDataSubjectType($val)
    {
        $this->_propDict["dataSubjectType"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description for the request.
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
    * Description for the request.
    *
    * @param string $val The description
    *
    * @return SubjectRightsRequest
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the request.
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
    * The name of the request.
    *
    * @param string $val The displayName
    *
    * @return SubjectRightsRequest
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    * The external ID for the request that is immutable after creation and is used for tracking the request for the external system. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
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
    * The external ID for the request that is immutable after creation and is used for tracking the request for the external system. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @param string $val The externalId
    *
    * @return SubjectRightsRequest
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }


     /**
     * Gets the history
    * Collection of history change events.
     *
     * @return array|null The history
     */
    public function getHistory()
    {
        if (array_key_exists("history", $this->_propDict)) {
           return $this->_propDict["history"];
        } else {
            return null;
        }
    }

    /**
    * Sets the history
    * Collection of history change events.
    *
    * @param SubjectRightsRequestHistory[] $val The history
    *
    * @return SubjectRightsRequest
    */
    public function setHistory($val)
    {
        $this->_propDict["history"] = $val;
        return $this;
    }

    /**
    * Gets the includeAllVersions
    * Include all versions of the documents. By default, the current copies of the documents will be returned. If SharePoint sites have versioning enabled, including all versions will include the historical copies of the documents. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @return bool|null The includeAllVersions
    */
    public function getIncludeAllVersions()
    {
        if (array_key_exists("includeAllVersions", $this->_propDict)) {
            return $this->_propDict["includeAllVersions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeAllVersions
    * Include all versions of the documents. By default, the current copies of the documents will be returned. If SharePoint sites have versioning enabled, including all versions will include the historical copies of the documents. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @param bool $val The includeAllVersions
    *
    * @return SubjectRightsRequest
    */
    public function setIncludeAllVersions($val)
    {
        $this->_propDict["includeAllVersions"] = boolval($val);
        return $this;
    }

    /**
    * Gets the includeAuthoredContent
    * Include content authored by the data subject. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @return bool|null The includeAuthoredContent
    */
    public function getIncludeAuthoredContent()
    {
        if (array_key_exists("includeAuthoredContent", $this->_propDict)) {
            return $this->_propDict["includeAuthoredContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeAuthoredContent
    * Include content authored by the data subject. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @param bool $val The includeAuthoredContent
    *
    * @return SubjectRightsRequest
    */
    public function setIncludeAuthoredContent($val)
    {
        $this->_propDict["includeAuthoredContent"] = boolval($val);
        return $this;
    }

    /**
    * Gets the insight
    * Insight about the request.
    *
    * @return SubjectRightsRequestDetail|null The insight
    */
    public function getInsight()
    {
        if (array_key_exists("insight", $this->_propDict)) {
            if (is_a($this->_propDict["insight"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestDetail") || is_null($this->_propDict["insight"])) {
                return $this->_propDict["insight"];
            } else {
                $this->_propDict["insight"] = new SubjectRightsRequestDetail($this->_propDict["insight"]);
                return $this->_propDict["insight"];
            }
        }
        return null;
    }

    /**
    * Sets the insight
    * Insight about the request.
    *
    * @param SubjectRightsRequestDetail $val The insight
    *
    * @return SubjectRightsRequest
    */
    public function setInsight($val)
    {
        $this->_propDict["insight"] = $val;
        return $this;
    }

    /**
    * Gets the internalDueDateTime
    * The date and time when the request is internally due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The internalDueDateTime
    */
    public function getInternalDueDateTime()
    {
        if (array_key_exists("internalDueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["internalDueDateTime"], "\DateTime") || is_null($this->_propDict["internalDueDateTime"])) {
                return $this->_propDict["internalDueDateTime"];
            } else {
                $this->_propDict["internalDueDateTime"] = new \DateTime($this->_propDict["internalDueDateTime"]);
                return $this->_propDict["internalDueDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the internalDueDateTime
    * The date and time when the request is internally due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The internalDueDateTime
    *
    * @return SubjectRightsRequest
    */
    public function setInternalDueDateTime($val)
    {
        $this->_propDict["internalDueDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity information for the entity that last modified the request.
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Identity information for the entity that last modified the request.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return SubjectRightsRequest
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the request was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
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
    * The date and time when the request was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return SubjectRightsRequest
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the mailboxlocations
    *
    * @return SubjectRightsRequestMailboxLocation|null The mailboxlocations
    */
    public function getMailboxlocations()
    {
        if (array_key_exists("mailboxlocations", $this->_propDict)) {
            if (is_a($this->_propDict["mailboxlocations"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestMailboxLocation") || is_null($this->_propDict["mailboxlocations"])) {
                return $this->_propDict["mailboxlocations"];
            } else {
                $this->_propDict["mailboxlocations"] = new SubjectRightsRequestMailboxLocation($this->_propDict["mailboxlocations"]);
                return $this->_propDict["mailboxlocations"];
            }
        }
        return null;
    }

    /**
    * Sets the mailboxlocations
    *
    * @param SubjectRightsRequestMailboxLocation $val The mailboxlocations
    *
    * @return SubjectRightsRequest
    */
    public function setMailboxlocations($val)
    {
        $this->_propDict["mailboxlocations"] = $val;
        return $this;
    }

    /**
    * Gets the pauseAfterEstimate
    * Pause the request after estimate has finished. By default, the data estimate will run and then pause, allowing you to preview results and then select the option to retrieve data in the UI. You can set this property to false if you want it to perform the estimate and then automatically begin with the retrieval of the content. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @return bool|null The pauseAfterEstimate
    */
    public function getPauseAfterEstimate()
    {
        if (array_key_exists("pauseAfterEstimate", $this->_propDict)) {
            return $this->_propDict["pauseAfterEstimate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pauseAfterEstimate
    * Pause the request after estimate has finished. By default, the data estimate will run and then pause, allowing you to preview results and then select the option to retrieve data in the UI. You can set this property to false if you want it to perform the estimate and then automatically begin with the retrieval of the content. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
    *
    * @param bool $val The pauseAfterEstimate
    *
    * @return SubjectRightsRequest
    */
    public function setPauseAfterEstimate($val)
    {
        $this->_propDict["pauseAfterEstimate"] = boolval($val);
        return $this;
    }

    /**
    * Gets the regulations
    * List of regulations that this request will fulfill.
    *
    * @return string|null The regulations
    */
    public function getRegulations()
    {
        if (array_key_exists("regulations", $this->_propDict)) {
            return $this->_propDict["regulations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the regulations
    * List of regulations that this request will fulfill.
    *
    * @param string $val The regulations
    *
    * @return SubjectRightsRequest
    */
    public function setRegulations($val)
    {
        $this->_propDict["regulations"] = $val;
        return $this;
    }

    /**
    * Gets the sitelocations
    *
    * @return SubjectRightsRequestSiteLocation|null The sitelocations
    */
    public function getSitelocations()
    {
        if (array_key_exists("sitelocations", $this->_propDict)) {
            if (is_a($this->_propDict["sitelocations"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestSiteLocation") || is_null($this->_propDict["sitelocations"])) {
                return $this->_propDict["sitelocations"];
            } else {
                $this->_propDict["sitelocations"] = new SubjectRightsRequestSiteLocation($this->_propDict["sitelocations"]);
                return $this->_propDict["sitelocations"];
            }
        }
        return null;
    }

    /**
    * Sets the sitelocations
    *
    * @param SubjectRightsRequestSiteLocation $val The sitelocations
    *
    * @return SubjectRightsRequest
    */
    public function setSitelocations($val)
    {
        $this->_propDict["sitelocations"] = $val;
        return $this;
    }


     /**
     * Gets the stages
    * Information about the different stages for the request.
     *
     * @return array|null The stages
     */
    public function getStages()
    {
        if (array_key_exists("stages", $this->_propDict)) {
           return $this->_propDict["stages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stages
    * Information about the different stages for the request.
    *
    * @param SubjectRightsRequestStageDetail[] $val The stages
    *
    * @return SubjectRightsRequest
    */
    public function setStages($val)
    {
        $this->_propDict["stages"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the request. Possible values are: active, closed, unknownFutureValue.
    *
    * @return SubjectRightsRequestStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SubjectRightsRequestStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the request. Possible values are: active, closed, unknownFutureValue.
    *
    * @param SubjectRightsRequestStatus $val The status
    *
    * @return SubjectRightsRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of the request. Possible values are: export, delete, access, tagForAction, unknownFutureValue.
    *
    * @return SubjectRightsRequestType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new SubjectRightsRequestType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of the request. Possible values are: export, delete, access, tagForAction, unknownFutureValue.
    *
    * @param SubjectRightsRequestType $val The type
    *
    * @return SubjectRightsRequest
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }


     /**
     * Gets the notes
    * List of notes associated with the request.
     *
     * @return array|null The notes
     */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
           return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    * List of notes associated with the request.
    *
    * @param AuthoredNote[] $val The notes
    *
    * @return SubjectRightsRequest
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the team
    * Information about the Microsoft Teams team that was created for the request.
    *
    * @return Team|null The team
    */
    public function getTeam()
    {
        if (array_key_exists("team", $this->_propDict)) {
            if (is_a($this->_propDict["team"], "\Beta\Microsoft\Graph\Model\Team") || is_null($this->_propDict["team"])) {
                return $this->_propDict["team"];
            } else {
                $this->_propDict["team"] = new Team($this->_propDict["team"]);
                return $this->_propDict["team"];
            }
        }
        return null;
    }

    /**
    * Sets the team
    * Information about the Microsoft Teams team that was created for the request.
    *
    * @param Team $val The team
    *
    * @return SubjectRightsRequest
    */
    public function setTeam($val)
    {
        $this->_propDict["team"] = $val;
        return $this;
    }

}
