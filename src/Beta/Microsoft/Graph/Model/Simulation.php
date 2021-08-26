<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Simulation File
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
* Simulation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Simulation extends Entity
{
    /**
    * Gets the attackTechnique
    *
    * @return SimulationAttackTechnique|null The attackTechnique
    */
    public function getAttackTechnique()
    {
        if (array_key_exists("attackTechnique", $this->_propDict)) {
            if (is_a($this->_propDict["attackTechnique"], "\Beta\Microsoft\Graph\Model\SimulationAttackTechnique") || is_null($this->_propDict["attackTechnique"])) {
                return $this->_propDict["attackTechnique"];
            } else {
                $this->_propDict["attackTechnique"] = new SimulationAttackTechnique($this->_propDict["attackTechnique"]);
                return $this->_propDict["attackTechnique"];
            }
        }
        return null;
    }
    
    /**
    * Sets the attackTechnique
    *
    * @param SimulationAttackTechnique $val The attackTechnique
    *
    * @return Simulation
    */
    public function setAttackTechnique($val)
    {
        $this->_propDict["attackTechnique"] = $val;
        return $this;
    }
    
    /**
    * Gets the attackType
    *
    * @return SimulationAttackType|null The attackType
    */
    public function getAttackType()
    {
        if (array_key_exists("attackType", $this->_propDict)) {
            if (is_a($this->_propDict["attackType"], "\Beta\Microsoft\Graph\Model\SimulationAttackType") || is_null($this->_propDict["attackType"])) {
                return $this->_propDict["attackType"];
            } else {
                $this->_propDict["attackType"] = new SimulationAttackType($this->_propDict["attackType"]);
                return $this->_propDict["attackType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the attackType
    *
    * @param SimulationAttackType $val The attackType
    *
    * @return Simulation
    */
    public function setAttackType($val)
    {
        $this->_propDict["attackType"] = $val;
        return $this;
    }
    
    /**
    * Gets the cleanupArtifacts
    *
    * @return bool|null The cleanupArtifacts
    */
    public function getCleanupArtifacts()
    {
        if (array_key_exists("cleanupArtifacts", $this->_propDict)) {
            return $this->_propDict["cleanupArtifacts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cleanupArtifacts
    *
    * @param bool $val The cleanupArtifacts
    *
    * @return Simulation
    */
    public function setCleanupArtifacts($val)
    {
        $this->_propDict["cleanupArtifacts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the completionDateTime
    *
    * @return \DateTime|null The completionDateTime
    */
    public function getCompletionDateTime()
    {
        if (array_key_exists("completionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completionDateTime"], "\DateTime") || is_null($this->_propDict["completionDateTime"])) {
                return $this->_propDict["completionDateTime"];
            } else {
                $this->_propDict["completionDateTime"] = new \DateTime($this->_propDict["completionDateTime"]);
                return $this->_propDict["completionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completionDateTime
    *
    * @param \DateTime $val The completionDateTime
    *
    * @return Simulation
    */
    public function setCompletionDateTime($val)
    {
        $this->_propDict["completionDateTime"] = $val;
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
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["createdBy"])) {
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
    * @return Simulation
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
    * @return Simulation
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
    * @return Simulation
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
    * @return Simulation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableRegionTimezoneDelivery
    *
    * @return bool|null The enableRegionTimezoneDelivery
    */
    public function getEnableRegionTimezoneDelivery()
    {
        if (array_key_exists("enableRegionTimezoneDelivery", $this->_propDict)) {
            return $this->_propDict["enableRegionTimezoneDelivery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableRegionTimezoneDelivery
    *
    * @param bool $val The enableRegionTimezoneDelivery
    *
    * @return Simulation
    */
    public function setEnableRegionTimezoneDelivery($val)
    {
        $this->_propDict["enableRegionTimezoneDelivery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the includeAllAccountTargets
    *
    * @return bool|null The includeAllAccountTargets
    */
    public function getIncludeAllAccountTargets()
    {
        if (array_key_exists("includeAllAccountTargets", $this->_propDict)) {
            return $this->_propDict["includeAllAccountTargets"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the includeAllAccountTargets
    *
    * @param bool $val The includeAllAccountTargets
    *
    * @return Simulation
    */
    public function setIncludeAllAccountTargets($val)
    {
        $this->_propDict["includeAllAccountTargets"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isAutomated
    *
    * @return bool|null The isAutomated
    */
    public function getIsAutomated()
    {
        if (array_key_exists("isAutomated", $this->_propDict)) {
            return $this->_propDict["isAutomated"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAutomated
    *
    * @param bool $val The isAutomated
    *
    * @return Simulation
    */
    public function setIsAutomated($val)
    {
        $this->_propDict["isAutomated"] = boolval($val);
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
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["lastModifiedBy"])) {
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
    * @return Simulation
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
    * @return Simulation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the launchDateTime
    *
    * @return \DateTime|null The launchDateTime
    */
    public function getLaunchDateTime()
    {
        if (array_key_exists("launchDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["launchDateTime"], "\DateTime") || is_null($this->_propDict["launchDateTime"])) {
                return $this->_propDict["launchDateTime"];
            } else {
                $this->_propDict["launchDateTime"] = new \DateTime($this->_propDict["launchDateTime"]);
                return $this->_propDict["launchDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the launchDateTime
    *
    * @param \DateTime $val The launchDateTime
    *
    * @return Simulation
    */
    public function setLaunchDateTime($val)
    {
        $this->_propDict["launchDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the mode
    *
    * @return SimulationMode|null The mode
    */
    public function getMode()
    {
        if (array_key_exists("mode", $this->_propDict)) {
            if (is_a($this->_propDict["mode"], "\Beta\Microsoft\Graph\Model\SimulationMode") || is_null($this->_propDict["mode"])) {
                return $this->_propDict["mode"];
            } else {
                $this->_propDict["mode"] = new SimulationMode($this->_propDict["mode"]);
                return $this->_propDict["mode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mode
    *
    * @param SimulationMode $val The mode
    *
    * @return Simulation
    */
    public function setMode($val)
    {
        $this->_propDict["mode"] = $val;
        return $this;
    }
    
    /**
    * Gets the payloadDeliveryPlatform
    *
    * @return PayloadDeliveryPlatform|null The payloadDeliveryPlatform
    */
    public function getPayloadDeliveryPlatform()
    {
        if (array_key_exists("payloadDeliveryPlatform", $this->_propDict)) {
            if (is_a($this->_propDict["payloadDeliveryPlatform"], "\Beta\Microsoft\Graph\Model\PayloadDeliveryPlatform") || is_null($this->_propDict["payloadDeliveryPlatform"])) {
                return $this->_propDict["payloadDeliveryPlatform"];
            } else {
                $this->_propDict["payloadDeliveryPlatform"] = new PayloadDeliveryPlatform($this->_propDict["payloadDeliveryPlatform"]);
                return $this->_propDict["payloadDeliveryPlatform"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payloadDeliveryPlatform
    *
    * @param PayloadDeliveryPlatform $val The payloadDeliveryPlatform
    *
    * @return Simulation
    */
    public function setPayloadDeliveryPlatform($val)
    {
        $this->_propDict["payloadDeliveryPlatform"] = $val;
        return $this;
    }
    
    /**
    * Gets the payloadSource
    *
    * @return PayloadSource|null The payloadSource
    */
    public function getPayloadSource()
    {
        if (array_key_exists("payloadSource", $this->_propDict)) {
            if (is_a($this->_propDict["payloadSource"], "\Beta\Microsoft\Graph\Model\PayloadSource") || is_null($this->_propDict["payloadSource"])) {
                return $this->_propDict["payloadSource"];
            } else {
                $this->_propDict["payloadSource"] = new PayloadSource($this->_propDict["payloadSource"]);
                return $this->_propDict["payloadSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payloadSource
    *
    * @param PayloadSource $val The payloadSource
    *
    * @return Simulation
    */
    public function setPayloadSource($val)
    {
        $this->_propDict["payloadSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the report
    *
    * @return SimulationReport|null The report
    */
    public function getReport()
    {
        if (array_key_exists("report", $this->_propDict)) {
            if (is_a($this->_propDict["report"], "\Beta\Microsoft\Graph\Model\SimulationReport") || is_null($this->_propDict["report"])) {
                return $this->_propDict["report"];
            } else {
                $this->_propDict["report"] = new SimulationReport($this->_propDict["report"]);
                return $this->_propDict["report"];
            }
        }
        return null;
    }
    
    /**
    * Sets the report
    *
    * @param SimulationReport $val The report
    *
    * @return Simulation
    */
    public function setReport($val)
    {
        $this->_propDict["report"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return SimulationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\SimulationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SimulationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param SimulationStatus $val The status
    *
    * @return Simulation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the trainingAssignmentPreference
    *
    * @return TrainingAssignmentPreference|null The trainingAssignmentPreference
    */
    public function getTrainingAssignmentPreference()
    {
        if (array_key_exists("trainingAssignmentPreference", $this->_propDict)) {
            if (is_a($this->_propDict["trainingAssignmentPreference"], "\Beta\Microsoft\Graph\Model\TrainingAssignmentPreference") || is_null($this->_propDict["trainingAssignmentPreference"])) {
                return $this->_propDict["trainingAssignmentPreference"];
            } else {
                $this->_propDict["trainingAssignmentPreference"] = new TrainingAssignmentPreference($this->_propDict["trainingAssignmentPreference"]);
                return $this->_propDict["trainingAssignmentPreference"];
            }
        }
        return null;
    }
    
    /**
    * Sets the trainingAssignmentPreference
    *
    * @param TrainingAssignmentPreference $val The trainingAssignmentPreference
    *
    * @return Simulation
    */
    public function setTrainingAssignmentPreference($val)
    {
        $this->_propDict["trainingAssignmentPreference"] = $val;
        return $this;
    }
    
    /**
    * Gets the trainingContentPreference
    *
    * @return TrainingContentPreference|null The trainingContentPreference
    */
    public function getTrainingContentPreference()
    {
        if (array_key_exists("trainingContentPreference", $this->_propDict)) {
            if (is_a($this->_propDict["trainingContentPreference"], "\Beta\Microsoft\Graph\Model\TrainingContentPreference") || is_null($this->_propDict["trainingContentPreference"])) {
                return $this->_propDict["trainingContentPreference"];
            } else {
                $this->_propDict["trainingContentPreference"] = new TrainingContentPreference($this->_propDict["trainingContentPreference"]);
                return $this->_propDict["trainingContentPreference"];
            }
        }
        return null;
    }
    
    /**
    * Sets the trainingContentPreference
    *
    * @param TrainingContentPreference $val The trainingContentPreference
    *
    * @return Simulation
    */
    public function setTrainingContentPreference($val)
    {
        $this->_propDict["trainingContentPreference"] = $val;
        return $this;
    }
    
    /**
    * Gets the trainingDueDateTime
    *
    * @return \DateTime|null The trainingDueDateTime
    */
    public function getTrainingDueDateTime()
    {
        if (array_key_exists("trainingDueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["trainingDueDateTime"], "\DateTime") || is_null($this->_propDict["trainingDueDateTime"])) {
                return $this->_propDict["trainingDueDateTime"];
            } else {
                $this->_propDict["trainingDueDateTime"] = new \DateTime($this->_propDict["trainingDueDateTime"]);
                return $this->_propDict["trainingDueDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the trainingDueDateTime
    *
    * @param \DateTime $val The trainingDueDateTime
    *
    * @return Simulation
    */
    public function setTrainingDueDateTime($val)
    {
        $this->_propDict["trainingDueDateTime"] = $val;
        return $this;
    }
    
}
