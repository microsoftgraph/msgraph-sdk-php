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
    
}