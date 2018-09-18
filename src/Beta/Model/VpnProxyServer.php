<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnProxyServer File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* VpnProxyServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VpnProxyServer extends Entity
{
    /**
    * Gets the automaticConfigurationScriptUrl
    *
    * @return string The automaticConfigurationScriptUrl
    */
    public function getAutomaticConfigurationScriptUrl()
    {
        if (array_key_exists("automaticConfigurationScriptUrl", $this->_propDict)) {
            return $this->_propDict["automaticConfigurationScriptUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the automaticConfigurationScriptUrl
    *
    * @param string $val The value of the automaticConfigurationScriptUrl
    *
    * @return VpnProxyServer
    */
    public function setAutomaticConfigurationScriptUrl($val)
    {
        $this->_propDict["automaticConfigurationScriptUrl"] = $val;
        return $this;
    }
    /**
    * Gets the address
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    *
    * @param string $val The value of the address
    *
    * @return VpnProxyServer
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the relevanceScore
    * The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user's communication and collaboration patterns and business relationships.
    *
    * @return int The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }

    /**
    * Sets the relevanceScore
    * The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user's communication and collaboration patterns and business relationships.
    *
    * @param int $val The value of the port
    *
    * @return VpnProxyServer
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
        return $this;
    }

    /**
    * Gets the selectionLikelihood
    *
    * @return SelectionLikelihoodInfo The selectionLikelihood
    */
    public function getSelectionLikelihood()
    {
        if (array_key_exists("selectionLikelihood", $this->_propDict)) {
            if (is_a($this->_propDict["selectionLikelihood"], "Microsoft\Graph\Model\SelectionLikelihoodInfo")) {
                return $this->_propDict["selectionLikelihood"];
            } else {
                $this->_propDict["selectionLikelihood"] = new SelectionLikelihoodInfo($this->_propDict["selectionLikelihood"]);
                return $this->_propDict["selectionLikelihood"];
            }
        }
        return null;
    }

    /**
    * Sets the selectionLikelihood
    *
    * @param SelectionLikelihoodInfo $val The value to assign to the selectionLikelihood
    *
    * @return ScoredEmailAddress The ScoredEmailAddress
    */
    public function setSelectionLikelihood($val)
    {
        $this->_propDict["selectionLikelihood"] = $val;
         return $this;
    }
}
