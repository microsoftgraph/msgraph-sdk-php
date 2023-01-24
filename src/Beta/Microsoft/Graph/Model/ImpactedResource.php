<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImpactedResource File
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
* ImpactedResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImpactedResource extends Entity
{
    /**
    * Gets the addedDateTime
    *
    * @return \DateTime|null The addedDateTime
    */
    public function getAddedDateTime()
    {
        if (array_key_exists("addedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["addedDateTime"], "\DateTime") || is_null($this->_propDict["addedDateTime"])) {
                return $this->_propDict["addedDateTime"];
            } else {
                $this->_propDict["addedDateTime"] = new \DateTime($this->_propDict["addedDateTime"]);
                return $this->_propDict["addedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the addedDateTime
    *
    * @param \DateTime $val The addedDateTime
    *
    * @return ImpactedResource
    */
    public function setAddedDateTime($val)
    {
        $this->_propDict["addedDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the additionalDetails
     *
     * @return array|null The additionalDetails
     */
    public function getAdditionalDetails()
    {
        if (array_key_exists("additionalDetails", $this->_propDict)) {
           return $this->_propDict["additionalDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalDetails
    *
    * @param KeyValue[] $val The additionalDetails
    *
    * @return ImpactedResource
    */
    public function setAdditionalDetails($val)
    {
        $this->_propDict["additionalDetails"] = $val;
        return $this;
    }

    /**
    * Gets the apiUrl
    *
    * @return string|null The apiUrl
    */
    public function getApiUrl()
    {
        if (array_key_exists("apiUrl", $this->_propDict)) {
            return $this->_propDict["apiUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the apiUrl
    *
    * @param string $val The apiUrl
    *
    * @return ImpactedResource
    */
    public function setApiUrl($val)
    {
        $this->_propDict["apiUrl"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return ImpactedResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    *
    * @return string|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            return $this->_propDict["lastModifiedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastModifiedBy
    *
    * @param string $val The lastModifiedBy
    *
    * @return ImpactedResource
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return string|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            return $this->_propDict["lastModifiedDateTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param string $val The lastModifiedDateTime
    *
    * @return ImpactedResource
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the owner
    *
    * @return string|null The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            return $this->_propDict["owner"];
        } else {
            return null;
        }
    }

    /**
    * Sets the owner
    *
    * @param string $val The owner
    *
    * @return ImpactedResource
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }

    /**
    * Gets the portalUrl
    *
    * @return string|null The portalUrl
    */
    public function getPortalUrl()
    {
        if (array_key_exists("portalUrl", $this->_propDict)) {
            return $this->_propDict["portalUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the portalUrl
    *
    * @param string $val The portalUrl
    *
    * @return ImpactedResource
    */
    public function setPortalUrl($val)
    {
        $this->_propDict["portalUrl"] = $val;
        return $this;
    }

    /**
    * Gets the postponeUntilDateTime
    *
    * @return \DateTime|null The postponeUntilDateTime
    */
    public function getPostponeUntilDateTime()
    {
        if (array_key_exists("postponeUntilDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["postponeUntilDateTime"], "\DateTime") || is_null($this->_propDict["postponeUntilDateTime"])) {
                return $this->_propDict["postponeUntilDateTime"];
            } else {
                $this->_propDict["postponeUntilDateTime"] = new \DateTime($this->_propDict["postponeUntilDateTime"]);
                return $this->_propDict["postponeUntilDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the postponeUntilDateTime
    *
    * @param \DateTime $val The postponeUntilDateTime
    *
    * @return ImpactedResource
    */
    public function setPostponeUntilDateTime($val)
    {
        $this->_propDict["postponeUntilDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the rank
    *
    * @return int|null The rank
    */
    public function getRank()
    {
        if (array_key_exists("rank", $this->_propDict)) {
            return $this->_propDict["rank"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rank
    *
    * @param int $val The rank
    *
    * @return ImpactedResource
    */
    public function setRank($val)
    {
        $this->_propDict["rank"] = intval($val);
        return $this;
    }

    /**
    * Gets the recommendationId
    *
    * @return string|null The recommendationId
    */
    public function getRecommendationId()
    {
        if (array_key_exists("recommendationId", $this->_propDict)) {
            return $this->_propDict["recommendationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendationId
    *
    * @param string $val The recommendationId
    *
    * @return ImpactedResource
    */
    public function setRecommendationId($val)
    {
        $this->_propDict["recommendationId"] = $val;
        return $this;
    }

    /**
    * Gets the resourceType
    *
    * @return string|null The resourceType
    */
    public function getResourceType()
    {
        if (array_key_exists("resourceType", $this->_propDict)) {
            return $this->_propDict["resourceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceType
    *
    * @param string $val The resourceType
    *
    * @return ImpactedResource
    */
    public function setResourceType($val)
    {
        $this->_propDict["resourceType"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return RecommendationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\RecommendationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new RecommendationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param RecommendationStatus $val The status
    *
    * @return ImpactedResource
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the subjectId
    *
    * @return string|null The subjectId
    */
    public function getSubjectId()
    {
        if (array_key_exists("subjectId", $this->_propDict)) {
            return $this->_propDict["subjectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectId
    *
    * @param string $val The subjectId
    *
    * @return ImpactedResource
    */
    public function setSubjectId($val)
    {
        $this->_propDict["subjectId"] = $val;
        return $this;
    }

}
