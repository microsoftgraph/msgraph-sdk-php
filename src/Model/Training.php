<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Training File
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
* Training class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Training extends Entity
{
    /**
    * Gets the availabilityStatus
    *
    * @return TrainingAvailabilityStatus|null The availabilityStatus
    */
    public function getAvailabilityStatus()
    {
        if (array_key_exists("availabilityStatus", $this->_propDict)) {
            if (is_a($this->_propDict["availabilityStatus"], "\Microsoft\Graph\Model\TrainingAvailabilityStatus") || is_null($this->_propDict["availabilityStatus"])) {
                return $this->_propDict["availabilityStatus"];
            } else {
                $this->_propDict["availabilityStatus"] = new TrainingAvailabilityStatus($this->_propDict["availabilityStatus"]);
                return $this->_propDict["availabilityStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the availabilityStatus
    *
    * @param TrainingAvailabilityStatus $val The availabilityStatus
    *
    * @return Training
    */
    public function setAvailabilityStatus($val)
    {
        $this->_propDict["availabilityStatus"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    *
    * @return EmailIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new EmailIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    *
    * @param EmailIdentity $val The createdBy
    *
    * @return Training
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
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
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Training
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
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
    *
    * @param string $val The description
    *
    * @return Training
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return Training
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the durationInMinutes
    *
    * @return int|null The durationInMinutes
    */
    public function getDurationInMinutes()
    {
        if (array_key_exists("durationInMinutes", $this->_propDict)) {
            return $this->_propDict["durationInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInMinutes
    *
    * @param int $val The durationInMinutes
    *
    * @return Training
    */
    public function setDurationInMinutes($val)
    {
        $this->_propDict["durationInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the hasEvaluation
    *
    * @return bool|null The hasEvaluation
    */
    public function getHasEvaluation()
    {
        if (array_key_exists("hasEvaluation", $this->_propDict)) {
            return $this->_propDict["hasEvaluation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasEvaluation
    *
    * @param bool $val The hasEvaluation
    *
    * @return Training
    */
    public function setHasEvaluation($val)
    {
        $this->_propDict["hasEvaluation"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    *
    * @return EmailIdentity|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new EmailIdentity($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    *
    * @param EmailIdentity $val The lastModifiedBy
    *
    * @return Training
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Training
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the source
    *
    * @return SimulationContentSource|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Microsoft\Graph\Model\SimulationContentSource") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new SimulationContentSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    *
    * @param SimulationContentSource $val The source
    *
    * @return Training
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the supportedLocales
    *
    * @return array|null The supportedLocales
    */
    public function getSupportedLocales()
    {
        if (array_key_exists("supportedLocales", $this->_propDict)) {
            return $this->_propDict["supportedLocales"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedLocales
    *
    * @param string[] $val The supportedLocales
    *
    * @return Training
    */
    public function setSupportedLocales($val)
    {
        $this->_propDict["supportedLocales"] = $val;
        return $this;
    }

    /**
    * Gets the tags
    *
    * @return array|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    *
    * @param string[] $val The tags
    *
    * @return Training
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return TrainingType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Microsoft\Graph\Model\TrainingType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new TrainingType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param TrainingType $val The type
    *
    * @return Training
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }


     /**
     * Gets the languageDetails
     *
     * @return array|null The languageDetails
     */
    public function getLanguageDetails()
    {
        if (array_key_exists("languageDetails", $this->_propDict)) {
           return $this->_propDict["languageDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageDetails
    *
    * @param TrainingLanguageDetail[] $val The languageDetails
    *
    * @return Training
    */
    public function setLanguageDetails($val)
    {
        $this->_propDict["languageDetails"] = $val;
        return $this;
    }

}
