<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TiIndicator File
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
* TiIndicator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TiIndicator extends Entity
{
    /**
    * Gets the activityGroupNames
    *
    * @return string The activityGroupNames
    */
    public function getActivityGroupNames()
    {
        if (array_key_exists("activityGroupNames", $this->_propDict)) {
            return $this->_propDict["activityGroupNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityGroupNames
    *
    * @param string $val The activityGroupNames
    *
    * @return TiIndicator
    */
    public function setActivityGroupNames($val)
    {
        $this->_propDict["activityGroupNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureTenantId
    *
    * @return string The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureTenantId
    *
    * @param string $val The azureTenantId
    *
    * @return TiIndicator
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateObservable
    *
    * @return CertificateObservable The certificateObservable
    */
    public function getCertificateObservable()
    {
        if (array_key_exists("certificateObservable", $this->_propDict)) {
            if (is_a($this->_propDict["certificateObservable"], "Microsoft\Graph\Beta\Model\CertificateObservable")) {
                return $this->_propDict["certificateObservable"];
            } else {
                $this->_propDict["certificateObservable"] = new CertificateObservable($this->_propDict["certificateObservable"]);
                return $this->_propDict["certificateObservable"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateObservable
    *
    * @param CertificateObservable $val The certificateObservable
    *
    * @return TiIndicator
    */
    public function setCertificateObservable($val)
    {
        $this->_propDict["certificateObservable"] = $val;
        return $this;
    }
    
    /**
    * Gets the confidence
    *
    * @return int The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the confidence
    *
    * @param int $val The confidence
    *
    * @return TiIndicator
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
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
    * @return TiIndicator
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectionProduct
    *
    * @return string The detectionProduct
    */
    public function getDetectionProduct()
    {
        if (array_key_exists("detectionProduct", $this->_propDict)) {
            return $this->_propDict["detectionProduct"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the detectionProduct
    *
    * @param string $val The detectionProduct
    *
    * @return TiIndicator
    */
    public function setDetectionProduct($val)
    {
        $this->_propDict["detectionProduct"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectionSignatureId
    *
    * @return string The detectionSignatureId
    */
    public function getDetectionSignatureId()
    {
        if (array_key_exists("detectionSignatureId", $this->_propDict)) {
            return $this->_propDict["detectionSignatureId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the detectionSignatureId
    *
    * @param string $val The detectionSignatureId
    *
    * @return TiIndicator
    */
    public function setDetectionSignatureId($val)
    {
        $this->_propDict["detectionSignatureId"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectionSignatureName
    *
    * @return string The detectionSignatureName
    */
    public function getDetectionSignatureName()
    {
        if (array_key_exists("detectionSignatureName", $this->_propDict)) {
            return $this->_propDict["detectionSignatureName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the detectionSignatureName
    *
    * @param string $val The detectionSignatureName
    *
    * @return TiIndicator
    */
    public function setDetectionSignatureName($val)
    {
        $this->_propDict["detectionSignatureName"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectionVendor
    *
    * @return string The detectionVendor
    */
    public function getDetectionVendor()
    {
        if (array_key_exists("detectionVendor", $this->_propDict)) {
            return $this->_propDict["detectionVendor"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the detectionVendor
    *
    * @param string $val The detectionVendor
    *
    * @return TiIndicator
    */
    public function setDetectionVendor($val)
    {
        $this->_propDict["detectionVendor"] = $val;
        return $this;
    }
    
    /**
    * Gets the diamondModel
    *
    * @return DiamondModel The diamondModel
    */
    public function getDiamondModel()
    {
        if (array_key_exists("diamondModel", $this->_propDict)) {
            if (is_a($this->_propDict["diamondModel"], "Microsoft\Graph\Beta\Model\DiamondModel")) {
                return $this->_propDict["diamondModel"];
            } else {
                $this->_propDict["diamondModel"] = new DiamondModel($this->_propDict["diamondModel"]);
                return $this->_propDict["diamondModel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the diamondModel
    *
    * @param DiamondModel $val The diamondModel
    *
    * @return TiIndicator
    */
    public function setDiamondModel($val)
    {
        $this->_propDict["diamondModel"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailObservable
    *
    * @return EmailObservable The emailObservable
    */
    public function getEmailObservable()
    {
        if (array_key_exists("emailObservable", $this->_propDict)) {
            if (is_a($this->_propDict["emailObservable"], "Microsoft\Graph\Beta\Model\EmailObservable")) {
                return $this->_propDict["emailObservable"];
            } else {
                $this->_propDict["emailObservable"] = new EmailObservable($this->_propDict["emailObservable"]);
                return $this->_propDict["emailObservable"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailObservable
    *
    * @param EmailObservable $val The emailObservable
    *
    * @return TiIndicator
    */
    public function setEmailObservable($val)
    {
        $this->_propDict["emailObservable"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return TiIndicator
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    *
    * @return string The externalId
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
    *
    * @param string $val The externalId
    *
    * @return TiIndicator
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileObservable
    *
    * @return FileObservable The fileObservable
    */
    public function getFileObservable()
    {
        if (array_key_exists("fileObservable", $this->_propDict)) {
            if (is_a($this->_propDict["fileObservable"], "Microsoft\Graph\Beta\Model\FileObservable")) {
                return $this->_propDict["fileObservable"];
            } else {
                $this->_propDict["fileObservable"] = new FileObservable($this->_propDict["fileObservable"]);
                return $this->_propDict["fileObservable"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileObservable
    *
    * @param FileObservable $val The fileObservable
    *
    * @return TiIndicator
    */
    public function setFileObservable($val)
    {
        $this->_propDict["fileObservable"] = $val;
        return $this;
    }
    
    /**
    * Gets the firstReportedDateTime
    *
    * @return \DateTime The firstReportedDateTime
    */
    public function getFirstReportedDateTime()
    {
        if (array_key_exists("firstReportedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstReportedDateTime"], "\DateTime")) {
                return $this->_propDict["firstReportedDateTime"];
            } else {
                $this->_propDict["firstReportedDateTime"] = new \DateTime($this->_propDict["firstReportedDateTime"]);
                return $this->_propDict["firstReportedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firstReportedDateTime
    *
    * @param \DateTime $val The firstReportedDateTime
    *
    * @return TiIndicator
    */
    public function setFirstReportedDateTime($val)
    {
        $this->_propDict["firstReportedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the hostObservable
    *
    * @return HostObservable The hostObservable
    */
    public function getHostObservable()
    {
        if (array_key_exists("hostObservable", $this->_propDict)) {
            if (is_a($this->_propDict["hostObservable"], "Microsoft\Graph\Beta\Model\HostObservable")) {
                return $this->_propDict["hostObservable"];
            } else {
                $this->_propDict["hostObservable"] = new HostObservable($this->_propDict["hostObservable"]);
                return $this->_propDict["hostObservable"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hostObservable
    *
    * @param HostObservable $val The hostObservable
    *
    * @return TiIndicator
    */
    public function setHostObservable($val)
    {
        $this->_propDict["hostObservable"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityObservable
    *
    * @return IdentityObservable The identityObservable
    */
    public function getIdentityObservable()
    {
        if (array_key_exists("identityObservable", $this->_propDict)) {
            if (is_a($this->_propDict["identityObservable"], "Microsoft\Graph\Beta\Model\IdentityObservable")) {
                return $this->_propDict["identityObservable"];
            } else {
                $this->_propDict["identityObservable"] = new IdentityObservable($this->_propDict["identityObservable"]);
                return $this->_propDict["identityObservable"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityObservable
    *
    * @param IdentityObservable $val The identityObservable
    *
    * @return TiIndicator
    */
    public function setIdentityObservable($val)
    {
        $this->_propDict["identityObservable"] = $val;
        return $this;
    }
    
    /**
    * Gets the ingestedDateTime
    *
    * @return \DateTime The ingestedDateTime
    */
    public function getIngestedDateTime()
    {
        if (array_key_exists("ingestedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["ingestedDateTime"], "\DateTime")) {
                return $this->_propDict["ingestedDateTime"];
            } else {
                $this->_propDict["ingestedDateTime"] = new \DateTime($this->_propDict["ingestedDateTime"]);
                return $this->_propDict["ingestedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the ingestedDateTime
    *
    * @param \DateTime $val The ingestedDateTime
    *
    * @return TiIndicator
    */
    public function setIngestedDateTime($val)
    {
        $this->_propDict["ingestedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    *
    * @param bool $val The isActive
    *
    * @return TiIndicator
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the killChain
    *
    * @return string The killChain
    */
    public function getKillChain()
    {
        if (array_key_exists("killChain", $this->_propDict)) {
            return $this->_propDict["killChain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the killChain
    *
    * @param string $val The killChain
    *
    * @return TiIndicator
    */
    public function setKillChain($val)
    {
        $this->_propDict["killChain"] = $val;
        return $this;
    }
    
    /**
    * Gets the knownFalsePositives
    *
    * @return string The knownFalsePositives
    */
    public function getKnownFalsePositives()
    {
        if (array_key_exists("knownFalsePositives", $this->_propDict)) {
            return $this->_propDict["knownFalsePositives"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the knownFalsePositives
    *
    * @param string $val The knownFalsePositives
    *
    * @return TiIndicator
    */
    public function setKnownFalsePositives($val)
    {
        $this->_propDict["knownFalsePositives"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TiIndicator
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastReportedDateTime
    *
    * @return \DateTime The lastReportedDateTime
    */
    public function getLastReportedDateTime()
    {
        if (array_key_exists("lastReportedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastReportedDateTime"], "\DateTime")) {
                return $this->_propDict["lastReportedDateTime"];
            } else {
                $this->_propDict["lastReportedDateTime"] = new \DateTime($this->_propDict["lastReportedDateTime"]);
                return $this->_propDict["lastReportedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastReportedDateTime
    *
    * @param \DateTime $val The lastReportedDateTime
    *
    * @return TiIndicator
    */
    public function setLastReportedDateTime($val)
    {
        $this->_propDict["lastReportedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the malwareFamilyNames
    *
    * @return string The malwareFamilyNames
    */
    public function getMalwareFamilyNames()
    {
        if (array_key_exists("malwareFamilyNames", $this->_propDict)) {
            return $this->_propDict["malwareFamilyNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the malwareFamilyNames
    *
    * @param string $val The malwareFamilyNames
    *
    * @return TiIndicator
    */
    public function setMalwareFamilyNames($val)
    {
        $this->_propDict["malwareFamilyNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkObservable
    *
    * @return NetworkObservable The networkObservable
    */
    public function getNetworkObservable()
    {
        if (array_key_exists("networkObservable", $this->_propDict)) {
            if (is_a($this->_propDict["networkObservable"], "Microsoft\Graph\Beta\Model\NetworkObservable")) {
                return $this->_propDict["networkObservable"];
            } else {
                $this->_propDict["networkObservable"] = new NetworkObservable($this->_propDict["networkObservable"]);
                return $this->_propDict["networkObservable"];
            }
        }
        return null;
    }
    
    /**
    * Sets the networkObservable
    *
    * @param NetworkObservable $val The networkObservable
    *
    * @return TiIndicator
    */
    public function setNetworkObservable($val)
    {
        $this->_propDict["networkObservable"] = $val;
        return $this;
    }
    
    /**
    * Gets the passiveOnly
    *
    * @return bool The passiveOnly
    */
    public function getPassiveOnly()
    {
        if (array_key_exists("passiveOnly", $this->_propDict)) {
            return $this->_propDict["passiveOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passiveOnly
    *
    * @param bool $val The passiveOnly
    *
    * @return TiIndicator
    */
    public function setPassiveOnly($val)
    {
        $this->_propDict["passiveOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the severity
    *
    * @return string The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            return $this->_propDict["severity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the severity
    *
    * @param string $val The severity
    *
    * @return TiIndicator
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    *
    * @return string The tags
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
    * @param string $val The tags
    *
    * @return TiIndicator
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the threatType
    *
    * @return ThreatType The threatType
    */
    public function getThreatType()
    {
        if (array_key_exists("threatType", $this->_propDict)) {
            if (is_a($this->_propDict["threatType"], "Microsoft\Graph\Beta\Model\ThreatType")) {
                return $this->_propDict["threatType"];
            } else {
                $this->_propDict["threatType"] = new ThreatType($this->_propDict["threatType"]);
                return $this->_propDict["threatType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the threatType
    *
    * @param ThreatType $val The threatType
    *
    * @return TiIndicator
    */
    public function setThreatType($val)
    {
        $this->_propDict["threatType"] = $val;
        return $this;
    }
    
    /**
    * Gets the tlpLevel
    *
    * @return TlpLevel The tlpLevel
    */
    public function getTlpLevel()
    {
        if (array_key_exists("tlpLevel", $this->_propDict)) {
            if (is_a($this->_propDict["tlpLevel"], "Microsoft\Graph\Beta\Model\TlpLevel")) {
                return $this->_propDict["tlpLevel"];
            } else {
                $this->_propDict["tlpLevel"] = new TlpLevel($this->_propDict["tlpLevel"]);
                return $this->_propDict["tlpLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tlpLevel
    *
    * @param TlpLevel $val The tlpLevel
    *
    * @return TiIndicator
    */
    public function setTlpLevel($val)
    {
        $this->_propDict["tlpLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorInformation
    *
    * @return SecurityVendorInformation The vendorInformation
    */
    public function getVendorInformation()
    {
        if (array_key_exists("vendorInformation", $this->_propDict)) {
            if (is_a($this->_propDict["vendorInformation"], "Microsoft\Graph\Beta\Model\SecurityVendorInformation")) {
                return $this->_propDict["vendorInformation"];
            } else {
                $this->_propDict["vendorInformation"] = new SecurityVendorInformation($this->_propDict["vendorInformation"]);
                return $this->_propDict["vendorInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vendorInformation
    *
    * @param SecurityVendorInformation $val The vendorInformation
    *
    * @return TiIndicator
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vulnerabilityStates
     *
     * @return array The vulnerabilityStates
     */
    public function getVulnerabilityStates()
    {
        if (array_key_exists("vulnerabilityStates", $this->_propDict)) {
           return $this->_propDict["vulnerabilityStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the vulnerabilityStates
    *
    * @param VulnerabilityState $val The vulnerabilityStates
    *
    * @return TiIndicator
    */
    public function setVulnerabilityStates($val)
    {
		$this->_propDict["vulnerabilityStates"] = $val;
        return $this;
    }
    
}