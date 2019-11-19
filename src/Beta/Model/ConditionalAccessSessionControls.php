<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessSessionControls File
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
* ConditionalAccessSessionControls class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessSessionControls extends Entity
{

    /**
    * Gets the applicationEnforcedRestrictions
    *
    * @return ApplicationEnforcedRestrictionsSessionControl The applicationEnforcedRestrictions
    */
    public function getApplicationEnforcedRestrictions()
    {
        if (array_key_exists("applicationEnforcedRestrictions", $this->_propDict)) {
            if (is_a($this->_propDict["applicationEnforcedRestrictions"], "Microsoft\Graph\Beta\Model\ApplicationEnforcedRestrictionsSessionControl")) {
                return $this->_propDict["applicationEnforcedRestrictions"];
            } else {
                $this->_propDict["applicationEnforcedRestrictions"] = new ApplicationEnforcedRestrictionsSessionControl($this->_propDict["applicationEnforcedRestrictions"]);
                return $this->_propDict["applicationEnforcedRestrictions"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationEnforcedRestrictions
    *
    * @param ApplicationEnforcedRestrictionsSessionControl $val The value to assign to the applicationEnforcedRestrictions
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setApplicationEnforcedRestrictions($val)
    {
        $this->_propDict["applicationEnforcedRestrictions"] = $val;
         return $this;
    }

    /**
    * Gets the cloudAppSecurity
    *
    * @return CloudAppSecuritySessionControl The cloudAppSecurity
    */
    public function getCloudAppSecurity()
    {
        if (array_key_exists("cloudAppSecurity", $this->_propDict)) {
            if (is_a($this->_propDict["cloudAppSecurity"], "Microsoft\Graph\Beta\Model\CloudAppSecuritySessionControl")) {
                return $this->_propDict["cloudAppSecurity"];
            } else {
                $this->_propDict["cloudAppSecurity"] = new CloudAppSecuritySessionControl($this->_propDict["cloudAppSecurity"]);
                return $this->_propDict["cloudAppSecurity"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudAppSecurity
    *
    * @param CloudAppSecuritySessionControl $val The value to assign to the cloudAppSecurity
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setCloudAppSecurity($val)
    {
        $this->_propDict["cloudAppSecurity"] = $val;
         return $this;
    }

    /**
    * Gets the signInFrequency
    *
    * @return SignInFrequencySessionControl The signInFrequency
    */
    public function getSignInFrequency()
    {
        if (array_key_exists("signInFrequency", $this->_propDict)) {
            if (is_a($this->_propDict["signInFrequency"], "Microsoft\Graph\Beta\Model\SignInFrequencySessionControl")) {
                return $this->_propDict["signInFrequency"];
            } else {
                $this->_propDict["signInFrequency"] = new SignInFrequencySessionControl($this->_propDict["signInFrequency"]);
                return $this->_propDict["signInFrequency"];
            }
        }
        return null;
    }

    /**
    * Sets the signInFrequency
    *
    * @param SignInFrequencySessionControl $val The value to assign to the signInFrequency
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setSignInFrequency($val)
    {
        $this->_propDict["signInFrequency"] = $val;
         return $this;
    }

    /**
    * Gets the persistentBrowser
    *
    * @return PersistentBrowserSessionControl The persistentBrowser
    */
    public function getPersistentBrowser()
    {
        if (array_key_exists("persistentBrowser", $this->_propDict)) {
            if (is_a($this->_propDict["persistentBrowser"], "Microsoft\Graph\Beta\Model\PersistentBrowserSessionControl")) {
                return $this->_propDict["persistentBrowser"];
            } else {
                $this->_propDict["persistentBrowser"] = new PersistentBrowserSessionControl($this->_propDict["persistentBrowser"]);
                return $this->_propDict["persistentBrowser"];
            }
        }
        return null;
    }

    /**
    * Sets the persistentBrowser
    *
    * @param PersistentBrowserSessionControl $val The value to assign to the persistentBrowser
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setPersistentBrowser($val)
    {
        $this->_propDict["persistentBrowser"] = $val;
         return $this;
    }
}
