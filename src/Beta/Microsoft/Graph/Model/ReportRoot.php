<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReportRoot File
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
* ReportRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReportRoot extends Entity
{

     /**
     * Gets the appCredentialSignInActivities
    * Represents a collection of sign-in activities of application credentials.
     *
     * @return array|null The appCredentialSignInActivities
     */
    public function getAppCredentialSignInActivities()
    {
        if (array_key_exists("appCredentialSignInActivities", $this->_propDict)) {
           return $this->_propDict["appCredentialSignInActivities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appCredentialSignInActivities
    * Represents a collection of sign-in activities of application credentials.
    *
    * @param AppCredentialSignInActivity[] $val The appCredentialSignInActivities
    *
    * @return ReportRoot
    */
    public function setAppCredentialSignInActivities($val)
    {
        $this->_propDict["appCredentialSignInActivities"] = $val;
        return $this;
    }


     /**
     * Gets the applicationSignInDetailedSummary
    * Represents a detailed summary of an application sign-in.
     *
     * @return array|null The applicationSignInDetailedSummary
     */
    public function getApplicationSignInDetailedSummary()
    {
        if (array_key_exists("applicationSignInDetailedSummary", $this->_propDict)) {
           return $this->_propDict["applicationSignInDetailedSummary"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationSignInDetailedSummary
    * Represents a detailed summary of an application sign-in.
    *
    * @param ApplicationSignInDetailedSummary[] $val The applicationSignInDetailedSummary
    *
    * @return ReportRoot
    */
    public function setApplicationSignInDetailedSummary($val)
    {
        $this->_propDict["applicationSignInDetailedSummary"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationMethods
    * Container for navigation properties for Microsoft Entra authentication methods resources.
    *
    * @return AuthenticationMethodsRoot|null The authenticationMethods
    */
    public function getAuthenticationMethods()
    {
        if (array_key_exists("authenticationMethods", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethods"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodsRoot") || is_null($this->_propDict["authenticationMethods"])) {
                return $this->_propDict["authenticationMethods"];
            } else {
                $this->_propDict["authenticationMethods"] = new AuthenticationMethodsRoot($this->_propDict["authenticationMethods"]);
                return $this->_propDict["authenticationMethods"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethods
    * Container for navigation properties for Microsoft Entra authentication methods resources.
    *
    * @param AuthenticationMethodsRoot $val The authenticationMethods
    *
    * @return ReportRoot
    */
    public function setAuthenticationMethods($val)
    {
        $this->_propDict["authenticationMethods"] = $val;
        return $this;
    }


     /**
     * Gets the credentialUserRegistrationDetails
    * Details of the usage of self-service password reset and multi-factor authentication (MFA) for all registered users.
     *
     * @return array|null The credentialUserRegistrationDetails
     */
    public function getCredentialUserRegistrationDetails()
    {
        if (array_key_exists("credentialUserRegistrationDetails", $this->_propDict)) {
           return $this->_propDict["credentialUserRegistrationDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialUserRegistrationDetails
    * Details of the usage of self-service password reset and multi-factor authentication (MFA) for all registered users.
    *
    * @param CredentialUserRegistrationDetails[] $val The credentialUserRegistrationDetails
    *
    * @return ReportRoot
    */
    public function setCredentialUserRegistrationDetails($val)
    {
        $this->_propDict["credentialUserRegistrationDetails"] = $val;
        return $this;
    }


     /**
     * Gets the servicePrincipalSignInActivities
    * Represents a collection of sign-in activities of service principals.
     *
     * @return array|null The servicePrincipalSignInActivities
     */
    public function getServicePrincipalSignInActivities()
    {
        if (array_key_exists("servicePrincipalSignInActivities", $this->_propDict)) {
           return $this->_propDict["servicePrincipalSignInActivities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalSignInActivities
    * Represents a collection of sign-in activities of service principals.
    *
    * @param ServicePrincipalSignInActivity[] $val The servicePrincipalSignInActivities
    *
    * @return ReportRoot
    */
    public function setServicePrincipalSignInActivities($val)
    {
        $this->_propDict["servicePrincipalSignInActivities"] = $val;
        return $this;
    }

    /**
    * Gets the sla
    * A placeholder to allow for the desired URL path for SLA.
    *
    * @return ServiceLevelAgreementRoot|null The sla
    */
    public function getSla()
    {
        if (array_key_exists("sla", $this->_propDict)) {
            if (is_a($this->_propDict["sla"], "\Beta\Microsoft\Graph\Model\ServiceLevelAgreementRoot") || is_null($this->_propDict["sla"])) {
                return $this->_propDict["sla"];
            } else {
                $this->_propDict["sla"] = new ServiceLevelAgreementRoot($this->_propDict["sla"]);
                return $this->_propDict["sla"];
            }
        }
        return null;
    }

    /**
    * Sets the sla
    * A placeholder to allow for the desired URL path for SLA.
    *
    * @param ServiceLevelAgreementRoot $val The sla
    *
    * @return ReportRoot
    */
    public function setSla($val)
    {
        $this->_propDict["sla"] = $val;
        return $this;
    }


     /**
     * Gets the userCredentialUsageDetails
    * Represents the self-service password reset (SSPR) usage for a given tenant.
     *
     * @return array|null The userCredentialUsageDetails
     */
    public function getUserCredentialUsageDetails()
    {
        if (array_key_exists("userCredentialUsageDetails", $this->_propDict)) {
           return $this->_propDict["userCredentialUsageDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userCredentialUsageDetails
    * Represents the self-service password reset (SSPR) usage for a given tenant.
    *
    * @param UserCredentialUsageDetails[] $val The userCredentialUsageDetails
    *
    * @return ReportRoot
    */
    public function setUserCredentialUsageDetails($val)
    {
        $this->_propDict["userCredentialUsageDetails"] = $val;
        return $this;
    }

    /**
    * Gets the userInsights
    *
    * @return UserInsightsRoot|null The userInsights
    */
    public function getUserInsights()
    {
        if (array_key_exists("userInsights", $this->_propDict)) {
            if (is_a($this->_propDict["userInsights"], "\Beta\Microsoft\Graph\Model\UserInsightsRoot") || is_null($this->_propDict["userInsights"])) {
                return $this->_propDict["userInsights"];
            } else {
                $this->_propDict["userInsights"] = new UserInsightsRoot($this->_propDict["userInsights"]);
                return $this->_propDict["userInsights"];
            }
        }
        return null;
    }

    /**
    * Sets the userInsights
    *
    * @param UserInsightsRoot $val The userInsights
    *
    * @return ReportRoot
    */
    public function setUserInsights($val)
    {
        $this->_propDict["userInsights"] = $val;
        return $this;
    }


     /**
     * Gets the dailyPrintUsage
     *
     * @return array|null The dailyPrintUsage
     */
    public function getDailyPrintUsage()
    {
        if (array_key_exists("dailyPrintUsage", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dailyPrintUsage
    *
    * @param PrintUsage[] $val The dailyPrintUsage
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsage($val)
    {
        $this->_propDict["dailyPrintUsage"] = $val;
        return $this;
    }


     /**
     * Gets the dailyPrintUsageByPrinter
    * Retrieve a list of daily print usage summaries, grouped by printer.
     *
     * @return array|null The dailyPrintUsageByPrinter
     */
    public function getDailyPrintUsageByPrinter()
    {
        if (array_key_exists("dailyPrintUsageByPrinter", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsageByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dailyPrintUsageByPrinter
    * Retrieve a list of daily print usage summaries, grouped by printer.
    *
    * @param PrintUsageByPrinter[] $val The dailyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByPrinter($val)
    {
        $this->_propDict["dailyPrintUsageByPrinter"] = $val;
        return $this;
    }


     /**
     * Gets the dailyPrintUsageByUser
    * Retrieve a list of daily print usage summaries, grouped by user.
     *
     * @return array|null The dailyPrintUsageByUser
     */
    public function getDailyPrintUsageByUser()
    {
        if (array_key_exists("dailyPrintUsageByUser", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsageByUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dailyPrintUsageByUser
    * Retrieve a list of daily print usage summaries, grouped by user.
    *
    * @param PrintUsageByUser[] $val The dailyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByUser($val)
    {
        $this->_propDict["dailyPrintUsageByUser"] = $val;
        return $this;
    }


     /**
     * Gets the dailyPrintUsageSummariesByPrinter
     *
     * @return array|null The dailyPrintUsageSummariesByPrinter
     */
    public function getDailyPrintUsageSummariesByPrinter()
    {
        if (array_key_exists("dailyPrintUsageSummariesByPrinter", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsageSummariesByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dailyPrintUsageSummariesByPrinter
    *
    * @param PrintUsageByPrinter[] $val The dailyPrintUsageSummariesByPrinter
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageSummariesByPrinter($val)
    {
        $this->_propDict["dailyPrintUsageSummariesByPrinter"] = $val;
        return $this;
    }


     /**
     * Gets the dailyPrintUsageSummariesByUser
     *
     * @return array|null The dailyPrintUsageSummariesByUser
     */
    public function getDailyPrintUsageSummariesByUser()
    {
        if (array_key_exists("dailyPrintUsageSummariesByUser", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsageSummariesByUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dailyPrintUsageSummariesByUser
    *
    * @param PrintUsageByUser[] $val The dailyPrintUsageSummariesByUser
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageSummariesByUser($val)
    {
        $this->_propDict["dailyPrintUsageSummariesByUser"] = $val;
        return $this;
    }


     /**
     * Gets the monthlyPrintUsageByPrinter
    * Retrieve a list of monthly print usage summaries, grouped by printer.
     *
     * @return array|null The monthlyPrintUsageByPrinter
     */
    public function getMonthlyPrintUsageByPrinter()
    {
        if (array_key_exists("monthlyPrintUsageByPrinter", $this->_propDict)) {
           return $this->_propDict["monthlyPrintUsageByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the monthlyPrintUsageByPrinter
    * Retrieve a list of monthly print usage summaries, grouped by printer.
    *
    * @param PrintUsageByPrinter[] $val The monthlyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByPrinter($val)
    {
        $this->_propDict["monthlyPrintUsageByPrinter"] = $val;
        return $this;
    }


     /**
     * Gets the monthlyPrintUsageByUser
    * Retrieve a list of monthly print usage summaries, grouped by user.
     *
     * @return array|null The monthlyPrintUsageByUser
     */
    public function getMonthlyPrintUsageByUser()
    {
        if (array_key_exists("monthlyPrintUsageByUser", $this->_propDict)) {
           return $this->_propDict["monthlyPrintUsageByUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the monthlyPrintUsageByUser
    * Retrieve a list of monthly print usage summaries, grouped by user.
    *
    * @param PrintUsageByUser[] $val The monthlyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByUser($val)
    {
        $this->_propDict["monthlyPrintUsageByUser"] = $val;
        return $this;
    }


     /**
     * Gets the monthlyPrintUsageSummariesByPrinter
     *
     * @return array|null The monthlyPrintUsageSummariesByPrinter
     */
    public function getMonthlyPrintUsageSummariesByPrinter()
    {
        if (array_key_exists("monthlyPrintUsageSummariesByPrinter", $this->_propDict)) {
           return $this->_propDict["monthlyPrintUsageSummariesByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the monthlyPrintUsageSummariesByPrinter
    *
    * @param PrintUsageByPrinter[] $val The monthlyPrintUsageSummariesByPrinter
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageSummariesByPrinter($val)
    {
        $this->_propDict["monthlyPrintUsageSummariesByPrinter"] = $val;
        return $this;
    }


     /**
     * Gets the monthlyPrintUsageSummariesByUser
     *
     * @return array|null The monthlyPrintUsageSummariesByUser
     */
    public function getMonthlyPrintUsageSummariesByUser()
    {
        if (array_key_exists("monthlyPrintUsageSummariesByUser", $this->_propDict)) {
           return $this->_propDict["monthlyPrintUsageSummariesByUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the monthlyPrintUsageSummariesByUser
    *
    * @param PrintUsageByUser[] $val The monthlyPrintUsageSummariesByUser
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageSummariesByUser($val)
    {
        $this->_propDict["monthlyPrintUsageSummariesByUser"] = $val;
        return $this;
    }

    /**
    * Gets the security
    * Provides the ability to launch a realistically simulated phishing attack that organizations can learn from.
    *
    * @return SecurityReportsRoot|null The security
    */
    public function getSecurity()
    {
        if (array_key_exists("security", $this->_propDict)) {
            if (is_a($this->_propDict["security"], "\Beta\Microsoft\Graph\Model\SecurityReportsRoot") || is_null($this->_propDict["security"])) {
                return $this->_propDict["security"];
            } else {
                $this->_propDict["security"] = new SecurityReportsRoot($this->_propDict["security"]);
                return $this->_propDict["security"];
            }
        }
        return null;
    }

    /**
    * Sets the security
    * Provides the ability to launch a realistically simulated phishing attack that organizations can learn from.
    *
    * @param SecurityReportsRoot $val The security
    *
    * @return ReportRoot
    */
    public function setSecurity($val)
    {
        $this->_propDict["security"] = $val;
        return $this;
    }

}
