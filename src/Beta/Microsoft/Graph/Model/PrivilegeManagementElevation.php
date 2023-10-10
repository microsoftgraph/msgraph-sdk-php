<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegeManagementElevation File
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
* PrivilegeManagementElevation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegeManagementElevation extends Entity
{
    /**
    * Gets the certificatePayload
    * The certificate payload of the application. This is computed by hashing the certificate information on the client. Example: `32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a50`
    *
    * @return string|null The certificatePayload
    */
    public function getCertificatePayload()
    {
        if (array_key_exists("certificatePayload", $this->_propDict)) {
            return $this->_propDict["certificatePayload"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificatePayload
    * The certificate payload of the application. This is computed by hashing the certificate information on the client. Example: `32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a50`
    *
    * @param string $val The certificatePayload
    *
    * @return PrivilegeManagementElevation
    */
    public function setCertificatePayload($val)
    {
        $this->_propDict["certificatePayload"] = $val;
        return $this;
    }

    /**
    * Gets the companyName
    * The company name of the application. This value is set by the creator of the application. Example: `Microsoft Corporation`
    *
    * @return string|null The companyName
    */
    public function getCompanyName()
    {
        if (array_key_exists("companyName", $this->_propDict)) {
            return $this->_propDict["companyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the companyName
    * The company name of the application. This value is set by the creator of the application. Example: `Microsoft Corporation`
    *
    * @param string $val The companyName
    *
    * @return PrivilegeManagementElevation
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    * The Intune deviceId. Unique identifier for the managed device. Example: `92ce5047-9553-4731-817f-9b401a999a1b`
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * The Intune deviceId. Unique identifier for the managed device. Example: `92ce5047-9553-4731-817f-9b401a999a1b`
    *
    * @param string $val The deviceId
    *
    * @return PrivilegeManagementElevation
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * The name associated with the device in the intune database. Example: `JOHNDOE-LAPTOP`.
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * The name associated with the device in the intune database. Example: `JOHNDOE-LAPTOP`.
    *
    * @param string $val The deviceName
    *
    * @return PrivilegeManagementElevation
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the elevationType
    * Indicates the type of elevation on the application. Possible values are `undetermined`, `unmanagedElevation`, `zeroTouchElevation`, `userConfirmedElevation`, and `supportApprovedElevation`. Defaults to `undetermined`
    *
    * @return PrivilegeManagementElevationType|null The elevationType
    */
    public function getElevationType()
    {
        if (array_key_exists("elevationType", $this->_propDict)) {
            if (is_a($this->_propDict["elevationType"], "\Beta\Microsoft\Graph\Model\PrivilegeManagementElevationType") || is_null($this->_propDict["elevationType"])) {
                return $this->_propDict["elevationType"];
            } else {
                $this->_propDict["elevationType"] = new PrivilegeManagementElevationType($this->_propDict["elevationType"]);
                return $this->_propDict["elevationType"];
            }
        }
        return null;
    }

    /**
    * Sets the elevationType
    * Indicates the type of elevation on the application. Possible values are `undetermined`, `unmanagedElevation`, `zeroTouchElevation`, `userConfirmedElevation`, and `supportApprovedElevation`. Defaults to `undetermined`
    *
    * @param PrivilegeManagementElevationType $val The elevationType
    *
    * @return PrivilegeManagementElevation
    */
    public function setElevationType($val)
    {
        $this->_propDict["elevationType"] = $val;
        return $this;
    }

    /**
    * Gets the eventDateTime
    * The date and time when the application was elevated. Example:`2014-01-01T00:00:00Z`
    *
    * @return \DateTime|null The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime") || is_null($this->_propDict["eventDateTime"])) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventDateTime
    * The date and time when the application was elevated. Example:`2014-01-01T00:00:00Z`
    *
    * @param \DateTime $val The eventDateTime
    *
    * @return PrivilegeManagementElevation
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the fileDescription
    * The file description of the application. This value is set by the creator of the application. Example: `Editor of multiple coding languages.`
    *
    * @return string|null The fileDescription
    */
    public function getFileDescription()
    {
        if (array_key_exists("fileDescription", $this->_propDict)) {
            return $this->_propDict["fileDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileDescription
    * The file description of the application. This value is set by the creator of the application. Example: `Editor of multiple coding languages.`
    *
    * @param string $val The fileDescription
    *
    * @return PrivilegeManagementElevation
    */
    public function setFileDescription($val)
    {
        $this->_propDict["fileDescription"] = $val;
        return $this;
    }

    /**
    * Gets the filePath
    * The full file path of the application including the filename and file extension. Example: `C:\Program Files\vscode.exe`
    *
    * @return string|null The filePath
    */
    public function getFilePath()
    {
        if (array_key_exists("filePath", $this->_propDict)) {
            return $this->_propDict["filePath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filePath
    * The full file path of the application including the filename and file extension. Example: `C:\Program Files\vscode.exe`
    *
    * @param string $val The filePath
    *
    * @return PrivilegeManagementElevation
    */
    public function setFilePath($val)
    {
        $this->_propDict["filePath"] = $val;
        return $this;
    }

    /**
    * Gets the fileVersion
    * The version of the application. This value is set by the creator of the application. Example: `6.2211.1035.1000`
    *
    * @return string|null The fileVersion
    */
    public function getFileVersion()
    {
        if (array_key_exists("fileVersion", $this->_propDict)) {
            return $this->_propDict["fileVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileVersion
    * The version of the application. This value is set by the creator of the application. Example: `6.2211.1035.1000`
    *
    * @param string $val The fileVersion
    *
    * @return PrivilegeManagementElevation
    */
    public function setFileVersion($val)
    {
        $this->_propDict["fileVersion"] = $val;
        return $this;
    }

    /**
    * Gets the hash
    * The sha256 hash of the application. Example: `32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a57`
    *
    * @return string|null The hash
    */
    public function getHash()
    {
        if (array_key_exists("hash", $this->_propDict)) {
            return $this->_propDict["hash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hash
    * The sha256 hash of the application. Example: `32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a57`
    *
    * @param string $val The hash
    *
    * @return PrivilegeManagementElevation
    */
    public function setHash($val)
    {
        $this->_propDict["hash"] = $val;
        return $this;
    }

    /**
    * Gets the internalName
    * The internal name of the application. This value is set by the creator of the application. Example: `VS code`
    *
    * @return string|null The internalName
    */
    public function getInternalName()
    {
        if (array_key_exists("internalName", $this->_propDict)) {
            return $this->_propDict["internalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalName
    * The internal name of the application. This value is set by the creator of the application. Example: `VS code`
    *
    * @param string $val The internalName
    *
    * @return PrivilegeManagementElevation
    */
    public function setInternalName($val)
    {
        $this->_propDict["internalName"] = $val;
        return $this;
    }

    /**
    * Gets the justification
    * The justification to elevate the application. This is an input by the user when the privilegeManagementElevationType is of type userConfirmedElevation or support approved elevation. This will be null in all other scenarios. The length is capped at 256 char, enforced on the client side. Example: `To install debug tool.`.
    *
    * @return string|null The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justification
    * The justification to elevate the application. This is an input by the user when the privilegeManagementElevationType is of type userConfirmedElevation or support approved elevation. This will be null in all other scenarios. The length is capped at 256 char, enforced on the client side. Example: `To install debug tool.`.
    *
    * @param string $val The justification
    *
    * @return PrivilegeManagementElevation
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }

    /**
    * Gets the parentProcessName
    * The name of parent process associated with the elevated process. This is always populated for both parent and child process types
    *
    * @return string|null The parentProcessName
    */
    public function getParentProcessName()
    {
        if (array_key_exists("parentProcessName", $this->_propDict)) {
            return $this->_propDict["parentProcessName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentProcessName
    * The name of parent process associated with the elevated process. This is always populated for both parent and child process types
    *
    * @param string $val The parentProcessName
    *
    * @return PrivilegeManagementElevation
    */
    public function setParentProcessName($val)
    {
        $this->_propDict["parentProcessName"] = $val;
        return $this;
    }

    /**
    * Gets the policyId
    * Unique Identifier of the policy configured to run the application with elevated access
    *
    * @return string|null The policyId
    */
    public function getPolicyId()
    {
        if (array_key_exists("policyId", $this->_propDict)) {
            return $this->_propDict["policyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyId
    * Unique Identifier of the policy configured to run the application with elevated access
    *
    * @param string $val The policyId
    *
    * @return PrivilegeManagementElevation
    */
    public function setPolicyId($val)
    {
        $this->_propDict["policyId"] = $val;
        return $this;
    }

    /**
    * Gets the policyName
    * The name of the policy configured to run the application in elevated access
    *
    * @return string|null The policyName
    */
    public function getPolicyName()
    {
        if (array_key_exists("policyName", $this->_propDict)) {
            return $this->_propDict["policyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyName
    * The name of the policy configured to run the application in elevated access
    *
    * @param string $val The policyName
    *
    * @return PrivilegeManagementElevation
    */
    public function setPolicyName($val)
    {
        $this->_propDict["policyName"] = $val;
        return $this;
    }

    /**
    * Gets the processType
    * Indicates the type of process that is elevated. Possible values are `undefined`, `parent` and `child`
    *
    * @return PrivilegeManagementProcessType|null The processType
    */
    public function getProcessType()
    {
        if (array_key_exists("processType", $this->_propDict)) {
            if (is_a($this->_propDict["processType"], "\Beta\Microsoft\Graph\Model\PrivilegeManagementProcessType") || is_null($this->_propDict["processType"])) {
                return $this->_propDict["processType"];
            } else {
                $this->_propDict["processType"] = new PrivilegeManagementProcessType($this->_propDict["processType"]);
                return $this->_propDict["processType"];
            }
        }
        return null;
    }

    /**
    * Sets the processType
    * Indicates the type of process that is elevated. Possible values are `undefined`, `parent` and `child`
    *
    * @param PrivilegeManagementProcessType $val The processType
    *
    * @return PrivilegeManagementElevation
    */
    public function setProcessType($val)
    {
        $this->_propDict["processType"] = $val;
        return $this;
    }

    /**
    * Gets the productName
    * The product name of the application. This value is set by the creator of the application. Example: `Visual Studio`
    *
    * @return string|null The productName
    */
    public function getProductName()
    {
        if (array_key_exists("productName", $this->_propDict)) {
            return $this->_propDict["productName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productName
    * The product name of the application. This value is set by the creator of the application. Example: `Visual Studio`
    *
    * @param string $val The productName
    *
    * @return PrivilegeManagementElevation
    */
    public function setProductName($val)
    {
        $this->_propDict["productName"] = $val;
        return $this;
    }

    /**
    * Gets the result
    * The result of the elevation action with 0 being success, and everything else being exit code if the elevation was unsuccessful. The value will always be 0 on all unmanaged elevation. Example: `0`. Valid values 0 to 2147483647
    *
    * @return int|null The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            return $this->_propDict["result"];
        } else {
            return null;
        }
    }

    /**
    * Sets the result
    * The result of the elevation action with 0 being success, and everything else being exit code if the elevation was unsuccessful. The value will always be 0 on all unmanaged elevation. Example: `0`. Valid values 0 to 2147483647
    *
    * @param int $val The result
    *
    * @return PrivilegeManagementElevation
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = intval($val);
        return $this;
    }

    /**
    * Gets the ruleId
    * Unique identifier of the rule configured to run the application with elevated access
    *
    * @return string|null The ruleId
    */
    public function getRuleId()
    {
        if (array_key_exists("ruleId", $this->_propDict)) {
            return $this->_propDict["ruleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ruleId
    * Unique identifier of the rule configured to run the application with elevated access
    *
    * @param string $val The ruleId
    *
    * @return PrivilegeManagementElevation
    */
    public function setRuleId($val)
    {
        $this->_propDict["ruleId"] = $val;
        return $this;
    }

    /**
    * Gets the upn
    * The User Principal Name of the user who performed the elevation. Example: `john@domain.com`
    *
    * @return string|null The upn
    */
    public function getUpn()
    {
        if (array_key_exists("upn", $this->_propDict)) {
            return $this->_propDict["upn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upn
    * The User Principal Name of the user who performed the elevation. Example: `john@domain.com`
    *
    * @param string $val The upn
    *
    * @return PrivilegeManagementElevation
    */
    public function setUpn($val)
    {
        $this->_propDict["upn"] = $val;
        return $this;
    }

    /**
    * Gets the userType
    * The type of account performed the elevation on Windows. Possible values are: `undetermined`, `azureAd`, `hybrid`, and `local`. Defaults to `undetermined`.
    *
    * @return PrivilegeManagementEndUserType|null The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            if (is_a($this->_propDict["userType"], "\Beta\Microsoft\Graph\Model\PrivilegeManagementEndUserType") || is_null($this->_propDict["userType"])) {
                return $this->_propDict["userType"];
            } else {
                $this->_propDict["userType"] = new PrivilegeManagementEndUserType($this->_propDict["userType"]);
                return $this->_propDict["userType"];
            }
        }
        return null;
    }

    /**
    * Sets the userType
    * The type of account performed the elevation on Windows. Possible values are: `undetermined`, `azureAd`, `hybrid`, and `local`. Defaults to `undetermined`.
    *
    * @param PrivilegeManagementEndUserType $val The userType
    *
    * @return PrivilegeManagementElevation
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }

}
