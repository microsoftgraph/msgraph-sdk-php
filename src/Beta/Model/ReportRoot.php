<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReportRoot File
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
* ReportRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ReportRoot extends Entity
{

     /** 
     * Gets the applicationSignInDetailedSummary
     *
     * @return array The applicationSignInDetailedSummary
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
    *
    * @param ApplicationSignInDetailedSummary $val The applicationSignInDetailedSummary
    *
    * @return ReportRoot
    */
    public function setApplicationSignInDetailedSummary($val)
    {
		$this->_propDict["applicationSignInDetailedSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the credentialUserRegistrationDetails
     *
     * @return array The credentialUserRegistrationDetails
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
    *
    * @param CredentialUserRegistrationDetails $val The credentialUserRegistrationDetails
    *
    * @return ReportRoot
    */
    public function setCredentialUserRegistrationDetails($val)
    {
		$this->_propDict["credentialUserRegistrationDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userCredentialUsageDetails
     *
     * @return array The userCredentialUsageDetails
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
    *
    * @param UserCredentialUsageDetails $val The userCredentialUsageDetails
    *
    * @return ReportRoot
    */
    public function setUserCredentialUsageDetails($val)
    {
		$this->_propDict["userCredentialUsageDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dailyPrintUsageSummariesByUser
     *
     * @return array The dailyPrintUsageSummariesByUser
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
    * @param PrintUsageSummaryByUser $val The dailyPrintUsageSummariesByUser
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageSummariesByUser($val)
    {
		$this->_propDict["dailyPrintUsageSummariesByUser"] = $val;
        return $this;
    }
    

     /** 
     * Gets the monthlyPrintUsageSummariesByUser
     *
     * @return array The monthlyPrintUsageSummariesByUser
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
    * @param PrintUsageSummaryByUser $val The monthlyPrintUsageSummariesByUser
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageSummariesByUser($val)
    {
		$this->_propDict["monthlyPrintUsageSummariesByUser"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dailyPrintUsageSummariesByPrinter
     *
     * @return array The dailyPrintUsageSummariesByPrinter
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
    * @param PrintUsageSummaryByPrinter $val The dailyPrintUsageSummariesByPrinter
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageSummariesByPrinter($val)
    {
		$this->_propDict["dailyPrintUsageSummariesByPrinter"] = $val;
        return $this;
    }
    

     /** 
     * Gets the monthlyPrintUsageSummariesByPrinter
     *
     * @return array The monthlyPrintUsageSummariesByPrinter
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
    * @param PrintUsageSummaryByPrinter $val The monthlyPrintUsageSummariesByPrinter
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageSummariesByPrinter($val)
    {
		$this->_propDict["monthlyPrintUsageSummariesByPrinter"] = $val;
        return $this;
    }
    
}