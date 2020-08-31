<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesPublishingSingleSignOn File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* OnPremisesPublishingSingleSignOn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesPublishingSingleSignOn extends Entity
{

    /**
    * Gets the SingleSignOnMode
    *
    * @return SingleSignOnMode The SingleSignOnMode
    */
    public function getSingleSignOnMode()
    {
        if (array_key_exists("singleSignOnMode", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnMode"], "Beta\Microsoft\Graph\Model\SingleSignOnMode")) {
                return $this->_propDict["singleSignOnMode"];
            } else {
                $this->_propDict["singleSignOnMode"] = new SingleSignOnMode($this->_propDict["singleSignOnMode"]);
                return $this->_propDict["singleSignOnMode"];
            }
        }
        return null;
    }

    /**
    * Sets the SingleSignOnMode
    *
    * @param SingleSignOnMode $val The value to assign to the SingleSignOnMode
    *
    * @return OnPremisesPublishingSingleSignOn The OnPremisesPublishingSingleSignOn
    */
    public function setSingleSignOnMode($val)
    {
        $this->_propDict["SingleSignOnMode"] = $val;
         return $this;
    }

    /**
    * Gets the KerberosSignOnSettings
    *
    * @return KerberosSignOnSettings The KerberosSignOnSettings
    */
    public function getKerberosSignOnSettings()
    {
        if (array_key_exists("kerberosSignOnSettings", $this->_propDict)) {
            if (is_a($this->_propDict["kerberosSignOnSettings"], "Beta\Microsoft\Graph\Model\KerberosSignOnSettings")) {
                return $this->_propDict["kerberosSignOnSettings"];
            } else {
                $this->_propDict["kerberosSignOnSettings"] = new KerberosSignOnSettings($this->_propDict["kerberosSignOnSettings"]);
                return $this->_propDict["kerberosSignOnSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the KerberosSignOnSettings
    *
    * @param KerberosSignOnSettings $val The value to assign to the KerberosSignOnSettings
    *
    * @return OnPremisesPublishingSingleSignOn The OnPremisesPublishingSingleSignOn
    */
    public function setKerberosSignOnSettings($val)
    {
        $this->_propDict["KerberosSignOnSettings"] = $val;
         return $this;
    }
}
