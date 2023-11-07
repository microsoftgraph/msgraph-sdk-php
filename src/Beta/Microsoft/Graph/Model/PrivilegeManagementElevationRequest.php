<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegeManagementElevationRequest File
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
* PrivilegeManagementElevationRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegeManagementElevationRequest extends Entity
{
    /**
    * Gets the applicationDetail
    * Details of the application which is being requested to elevate, allowing the admin to understand the identity of the application. It includes file info such as FilePath, FileHash, FilePublisher, and etc. Returned by default. Read-only.
    *
    * @return ApplicationDetail|null The applicationDetail
    */
    public function getApplicationDetail()
    {
        if (array_key_exists("applicationDetail", $this->_propDict)) {
            if (is_a($this->_propDict["applicationDetail"], "\Beta\Microsoft\Graph\Model\ApplicationDetail") || is_null($this->_propDict["applicationDetail"])) {
                return $this->_propDict["applicationDetail"];
            } else {
                $this->_propDict["applicationDetail"] = new ApplicationDetail($this->_propDict["applicationDetail"]);
                return $this->_propDict["applicationDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationDetail
    * Details of the application which is being requested to elevate, allowing the admin to understand the identity of the application. It includes file info such as FilePath, FileHash, FilePublisher, and etc. Returned by default. Read-only.
    *
    * @param ApplicationDetail $val The applicationDetail
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setApplicationDetail($val)
    {
        $this->_propDict["applicationDetail"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * The device name used to initiate the elevation request. For example: 'cotonso-laptop'. Returned by default. Read-only.
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
    * The device name used to initiate the elevation request. For example: 'cotonso-laptop'. Returned by default. Read-only.
    *
    * @param string $val The deviceName
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the requestCreatedDateTime
    * The date and time when the elevation request was submitted/created. The value cannot be modified and is automatically populated when the elevation request is submitted/created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
    *
    * @return \DateTime|null The requestCreatedDateTime
    */
    public function getRequestCreatedDateTime()
    {
        if (array_key_exists("requestCreatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestCreatedDateTime"], "\DateTime") || is_null($this->_propDict["requestCreatedDateTime"])) {
                return $this->_propDict["requestCreatedDateTime"];
            } else {
                $this->_propDict["requestCreatedDateTime"] = new \DateTime($this->_propDict["requestCreatedDateTime"]);
                return $this->_propDict["requestCreatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the requestCreatedDateTime
    * The date and time when the elevation request was submitted/created. The value cannot be modified and is automatically populated when the elevation request is submitted/created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
    *
    * @param \DateTime $val The requestCreatedDateTime
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setRequestCreatedDateTime($val)
    {
        $this->_propDict["requestCreatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the requestedByUserId
    * The Azure Active Directory (AAD) identifier of the end user who is requesting this elevation. For example: 'F1A57311-B9EB-45B7-9415-8555E68EDC9E'. Returned by default. Read-only.
    *
    * @return string|null The requestedByUserId
    */
    public function getRequestedByUserId()
    {
        if (array_key_exists("requestedByUserId", $this->_propDict)) {
            return $this->_propDict["requestedByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestedByUserId
    * The Azure Active Directory (AAD) identifier of the end user who is requesting this elevation. For example: 'F1A57311-B9EB-45B7-9415-8555E68EDC9E'. Returned by default. Read-only.
    *
    * @param string $val The requestedByUserId
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setRequestedByUserId($val)
    {
        $this->_propDict["requestedByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the requestedByUserPrincipalName
    * The User Principal Name (UPN) of the end user who requested this elevation. For example: 'user1@contoso.com'. Returned by default. Read-only.
    *
    * @return string|null The requestedByUserPrincipalName
    */
    public function getRequestedByUserPrincipalName()
    {
        if (array_key_exists("requestedByUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["requestedByUserPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestedByUserPrincipalName
    * The User Principal Name (UPN) of the end user who requested this elevation. For example: 'user1@contoso.com'. Returned by default. Read-only.
    *
    * @param string $val The requestedByUserPrincipalName
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setRequestedByUserPrincipalName($val)
    {
        $this->_propDict["requestedByUserPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the requestedOnDeviceId
    * The Intune Device Identifier of the managed device used to initiate the elevation request. For example: '90F5F6E8-CA09-4811-97F6-4D0DD532D916'. Returned by default. Read-only.
    *
    * @return string|null The requestedOnDeviceId
    */
    public function getRequestedOnDeviceId()
    {
        if (array_key_exists("requestedOnDeviceId", $this->_propDict)) {
            return $this->_propDict["requestedOnDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestedOnDeviceId
    * The Intune Device Identifier of the managed device used to initiate the elevation request. For example: '90F5F6E8-CA09-4811-97F6-4D0DD532D916'. Returned by default. Read-only.
    *
    * @param string $val The requestedOnDeviceId
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setRequestedOnDeviceId($val)
    {
        $this->_propDict["requestedOnDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the requestExpiryDateTime
    * Expiration set for the request when it was created, regardless of approved or denied status. For example: '2023-08-03T14:24:22Z'. Returned by default. Returned by default. Read-only.
    *
    * @return \DateTime|null The requestExpiryDateTime
    */
    public function getRequestExpiryDateTime()
    {
        if (array_key_exists("requestExpiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestExpiryDateTime"], "\DateTime") || is_null($this->_propDict["requestExpiryDateTime"])) {
                return $this->_propDict["requestExpiryDateTime"];
            } else {
                $this->_propDict["requestExpiryDateTime"] = new \DateTime($this->_propDict["requestExpiryDateTime"]);
                return $this->_propDict["requestExpiryDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the requestExpiryDateTime
    * Expiration set for the request when it was created, regardless of approved or denied status. For example: '2023-08-03T14:24:22Z'. Returned by default. Returned by default. Read-only.
    *
    * @param \DateTime $val The requestExpiryDateTime
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setRequestExpiryDateTime($val)
    {
        $this->_propDict["requestExpiryDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the requestJustification
    * Justification provided by the end user for the elevation request. For example :'Need to elevate to install microsoft word'. Read-only.
    *
    * @return string|null The requestJustification
    */
    public function getRequestJustification()
    {
        if (array_key_exists("requestJustification", $this->_propDict)) {
            return $this->_propDict["requestJustification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestJustification
    * Justification provided by the end user for the elevation request. For example :'Need to elevate to install microsoft word'. Read-only.
    *
    * @param string $val The requestJustification
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setRequestJustification($val)
    {
        $this->_propDict["requestJustification"] = $val;
        return $this;
    }

    /**
    * Gets the requestLastModifiedDateTime
    * The date and time when the elevation request was either submitted/created or approved/denied. The value cannot be modified and is automatically populated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
    *
    * @return \DateTime|null The requestLastModifiedDateTime
    */
    public function getRequestLastModifiedDateTime()
    {
        if (array_key_exists("requestLastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestLastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["requestLastModifiedDateTime"])) {
                return $this->_propDict["requestLastModifiedDateTime"];
            } else {
                $this->_propDict["requestLastModifiedDateTime"] = new \DateTime($this->_propDict["requestLastModifiedDateTime"]);
                return $this->_propDict["requestLastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the requestLastModifiedDateTime
    * The date and time when the elevation request was either submitted/created or approved/denied. The value cannot be modified and is automatically populated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
    *
    * @param \DateTime $val The requestLastModifiedDateTime
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setRequestLastModifiedDateTime($val)
    {
        $this->_propDict["requestLastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the reviewCompletedByUserId
    * This is the Azure Active Directory (AAD) user id of the administrator who approved or denied the request. For example: 'F1A57311-B9EB-45B7-9415-8555E68EDC9E'. This field would be String.Empty before the request is either approved or denied. Read-only.
    *
    * @return string|null The reviewCompletedByUserId
    */
    public function getReviewCompletedByUserId()
    {
        if (array_key_exists("reviewCompletedByUserId", $this->_propDict)) {
            return $this->_propDict["reviewCompletedByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewCompletedByUserId
    * This is the Azure Active Directory (AAD) user id of the administrator who approved or denied the request. For example: 'F1A57311-B9EB-45B7-9415-8555E68EDC9E'. This field would be String.Empty before the request is either approved or denied. Read-only.
    *
    * @param string $val The reviewCompletedByUserId
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setReviewCompletedByUserId($val)
    {
        $this->_propDict["reviewCompletedByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the reviewCompletedByUserPrincipalName
    * This is the User Principal Name (UPN) of the administrator who approved or denied the request. For example: 'admin@contoso.com'. This field would be String.Empty before the request is either approved or denied. Read-only.
    *
    * @return string|null The reviewCompletedByUserPrincipalName
    */
    public function getReviewCompletedByUserPrincipalName()
    {
        if (array_key_exists("reviewCompletedByUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["reviewCompletedByUserPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewCompletedByUserPrincipalName
    * This is the User Principal Name (UPN) of the administrator who approved or denied the request. For example: 'admin@contoso.com'. This field would be String.Empty before the request is either approved or denied. Read-only.
    *
    * @param string $val The reviewCompletedByUserPrincipalName
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setReviewCompletedByUserPrincipalName($val)
    {
        $this->_propDict["reviewCompletedByUserPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the reviewCompletedDateTime
    * The DateTime for which the request was approved or denied. For example, midnight UTC on August 3rd, 2023 would look like this: '2023-08-03T00:00:00Z'. Read-only.
    *
    * @return \DateTime|null The reviewCompletedDateTime
    */
    public function getReviewCompletedDateTime()
    {
        if (array_key_exists("reviewCompletedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewCompletedDateTime"], "\DateTime") || is_null($this->_propDict["reviewCompletedDateTime"])) {
                return $this->_propDict["reviewCompletedDateTime"];
            } else {
                $this->_propDict["reviewCompletedDateTime"] = new \DateTime($this->_propDict["reviewCompletedDateTime"]);
                return $this->_propDict["reviewCompletedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewCompletedDateTime
    * The DateTime for which the request was approved or denied. For example, midnight UTC on August 3rd, 2023 would look like this: '2023-08-03T00:00:00Z'. Read-only.
    *
    * @param \DateTime $val The reviewCompletedDateTime
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setReviewCompletedDateTime($val)
    {
        $this->_propDict["reviewCompletedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the reviewerJustification
    * An optional justification provided by approver at approval or denied time. This field will be String.Empty if approver decides to not provide a justification. For example: 'Run this installer today'
    *
    * @return string|null The reviewerJustification
    */
    public function getReviewerJustification()
    {
        if (array_key_exists("reviewerJustification", $this->_propDict)) {
            return $this->_propDict["reviewerJustification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewerJustification
    * An optional justification provided by approver at approval or denied time. This field will be String.Empty if approver decides to not provide a justification. For example: 'Run this installer today'
    *
    * @param string $val The reviewerJustification
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setReviewerJustification($val)
    {
        $this->_propDict["reviewerJustification"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * This indicates the current state of the elevation request. Possible values are: 'none', 'pending', 'approved', 'denied' or 'expired'. Defaults to 'none'. Returned by default. Read-only.
    *
    * @return ElevationRequestState|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ElevationRequestState") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ElevationRequestState($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * This indicates the current state of the elevation request. Possible values are: 'none', 'pending', 'approved', 'denied' or 'expired'. Defaults to 'none'. Returned by default. Read-only.
    *
    * @param ElevationRequestState $val The status
    *
    * @return PrivilegeManagementElevationRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
