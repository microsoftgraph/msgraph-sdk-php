<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TunnelConfigurationIKEv2Custom File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* TunnelConfigurationIKEv2Custom class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TunnelConfigurationIKEv2Custom extends TunnelConfiguration
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.networkaccess.tunnelConfigurationIKEv2Custom");
    }


    /**
    * Gets the dhGroup
    *
    * @return DhGroup|null The dhGroup
    */
    public function getDhGroup()
    {
        if (array_key_exists("dhGroup", $this->_propDict)) {
            if (is_a($this->_propDict["dhGroup"], "\Beta\Microsoft\Graph\Networkaccess\Model\DhGroup") || is_null($this->_propDict["dhGroup"])) {
                return $this->_propDict["dhGroup"];
            } else {
                $this->_propDict["dhGroup"] = new DhGroup($this->_propDict["dhGroup"]);
                return $this->_propDict["dhGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the dhGroup
    *
    * @param DhGroup $val The value to assign to the dhGroup
    *
    * @return TunnelConfigurationIKEv2Custom The TunnelConfigurationIKEv2Custom
    */
    public function setDhGroup($val)
    {
        $this->_propDict["dhGroup"] = $val;
         return $this;
    }

    /**
    * Gets the ikeEncryption
    *
    * @return IkeEncryption|null The ikeEncryption
    */
    public function getIkeEncryption()
    {
        if (array_key_exists("ikeEncryption", $this->_propDict)) {
            if (is_a($this->_propDict["ikeEncryption"], "\Beta\Microsoft\Graph\Networkaccess\Model\IkeEncryption") || is_null($this->_propDict["ikeEncryption"])) {
                return $this->_propDict["ikeEncryption"];
            } else {
                $this->_propDict["ikeEncryption"] = new IkeEncryption($this->_propDict["ikeEncryption"]);
                return $this->_propDict["ikeEncryption"];
            }
        }
        return null;
    }

    /**
    * Sets the ikeEncryption
    *
    * @param IkeEncryption $val The value to assign to the ikeEncryption
    *
    * @return TunnelConfigurationIKEv2Custom The TunnelConfigurationIKEv2Custom
    */
    public function setIkeEncryption($val)
    {
        $this->_propDict["ikeEncryption"] = $val;
         return $this;
    }

    /**
    * Gets the ikeIntegrity
    *
    * @return IkeIntegrity|null The ikeIntegrity
    */
    public function getIkeIntegrity()
    {
        if (array_key_exists("ikeIntegrity", $this->_propDict)) {
            if (is_a($this->_propDict["ikeIntegrity"], "\Beta\Microsoft\Graph\Networkaccess\Model\IkeIntegrity") || is_null($this->_propDict["ikeIntegrity"])) {
                return $this->_propDict["ikeIntegrity"];
            } else {
                $this->_propDict["ikeIntegrity"] = new IkeIntegrity($this->_propDict["ikeIntegrity"]);
                return $this->_propDict["ikeIntegrity"];
            }
        }
        return null;
    }

    /**
    * Sets the ikeIntegrity
    *
    * @param IkeIntegrity $val The value to assign to the ikeIntegrity
    *
    * @return TunnelConfigurationIKEv2Custom The TunnelConfigurationIKEv2Custom
    */
    public function setIkeIntegrity($val)
    {
        $this->_propDict["ikeIntegrity"] = $val;
         return $this;
    }

    /**
    * Gets the ipSecEncryption
    *
    * @return IpSecEncryption|null The ipSecEncryption
    */
    public function getIpSecEncryption()
    {
        if (array_key_exists("ipSecEncryption", $this->_propDict)) {
            if (is_a($this->_propDict["ipSecEncryption"], "\Beta\Microsoft\Graph\Networkaccess\Model\IpSecEncryption") || is_null($this->_propDict["ipSecEncryption"])) {
                return $this->_propDict["ipSecEncryption"];
            } else {
                $this->_propDict["ipSecEncryption"] = new IpSecEncryption($this->_propDict["ipSecEncryption"]);
                return $this->_propDict["ipSecEncryption"];
            }
        }
        return null;
    }

    /**
    * Sets the ipSecEncryption
    *
    * @param IpSecEncryption $val The value to assign to the ipSecEncryption
    *
    * @return TunnelConfigurationIKEv2Custom The TunnelConfigurationIKEv2Custom
    */
    public function setIpSecEncryption($val)
    {
        $this->_propDict["ipSecEncryption"] = $val;
         return $this;
    }

    /**
    * Gets the ipSecIntegrity
    *
    * @return IpSecIntegrity|null The ipSecIntegrity
    */
    public function getIpSecIntegrity()
    {
        if (array_key_exists("ipSecIntegrity", $this->_propDict)) {
            if (is_a($this->_propDict["ipSecIntegrity"], "\Beta\Microsoft\Graph\Networkaccess\Model\IpSecIntegrity") || is_null($this->_propDict["ipSecIntegrity"])) {
                return $this->_propDict["ipSecIntegrity"];
            } else {
                $this->_propDict["ipSecIntegrity"] = new IpSecIntegrity($this->_propDict["ipSecIntegrity"]);
                return $this->_propDict["ipSecIntegrity"];
            }
        }
        return null;
    }

    /**
    * Sets the ipSecIntegrity
    *
    * @param IpSecIntegrity $val The value to assign to the ipSecIntegrity
    *
    * @return TunnelConfigurationIKEv2Custom The TunnelConfigurationIKEv2Custom
    */
    public function setIpSecIntegrity($val)
    {
        $this->_propDict["ipSecIntegrity"] = $val;
         return $this;
    }

    /**
    * Gets the pfsGroup
    *
    * @return PfsGroup|null The pfsGroup
    */
    public function getPfsGroup()
    {
        if (array_key_exists("pfsGroup", $this->_propDict)) {
            if (is_a($this->_propDict["pfsGroup"], "\Beta\Microsoft\Graph\Networkaccess\Model\PfsGroup") || is_null($this->_propDict["pfsGroup"])) {
                return $this->_propDict["pfsGroup"];
            } else {
                $this->_propDict["pfsGroup"] = new PfsGroup($this->_propDict["pfsGroup"]);
                return $this->_propDict["pfsGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the pfsGroup
    *
    * @param PfsGroup $val The value to assign to the pfsGroup
    *
    * @return TunnelConfigurationIKEv2Custom The TunnelConfigurationIKEv2Custom
    */
    public function setPfsGroup($val)
    {
        $this->_propDict["pfsGroup"] = $val;
         return $this;
    }
    /**
    * Gets the saLifeTimeSeconds
    *
    * @return int|null The saLifeTimeSeconds
    */
    public function getSaLifeTimeSeconds()
    {
        if (array_key_exists("saLifeTimeSeconds", $this->_propDict)) {
            return $this->_propDict["saLifeTimeSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the saLifeTimeSeconds
    *
    * @param int $val The value of the saLifeTimeSeconds
    *
    * @return TunnelConfigurationIKEv2Custom
    */
    public function setSaLifeTimeSeconds($val)
    {
        $this->_propDict["saLifeTimeSeconds"] = $val;
        return $this;
    }
}
