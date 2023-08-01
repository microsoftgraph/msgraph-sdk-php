<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WhoisRecord File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* WhoisRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WhoisRecord extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the abuse
    *
    * @return WhoisContact|null The abuse
    */
    public function getAbuse()
    {
        if (array_key_exists("abuse", $this->_propDict)) {
            if (is_a($this->_propDict["abuse"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisContact") || is_null($this->_propDict["abuse"])) {
                return $this->_propDict["abuse"];
            } else {
                $this->_propDict["abuse"] = new WhoisContact($this->_propDict["abuse"]);
                return $this->_propDict["abuse"];
            }
        }
        return null;
    }

    /**
    * Sets the abuse
    *
    * @param WhoisContact $val The abuse
    *
    * @return WhoisRecord
    */
    public function setAbuse($val)
    {
        $this->_propDict["abuse"] = $val;
        return $this;
    }

    /**
    * Gets the admin
    *
    * @return WhoisContact|null The admin
    */
    public function getAdmin()
    {
        if (array_key_exists("admin", $this->_propDict)) {
            if (is_a($this->_propDict["admin"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisContact") || is_null($this->_propDict["admin"])) {
                return $this->_propDict["admin"];
            } else {
                $this->_propDict["admin"] = new WhoisContact($this->_propDict["admin"]);
                return $this->_propDict["admin"];
            }
        }
        return null;
    }

    /**
    * Sets the admin
    *
    * @param WhoisContact $val The admin
    *
    * @return WhoisRecord
    */
    public function setAdmin($val)
    {
        $this->_propDict["admin"] = $val;
        return $this;
    }

    /**
    * Gets the billing
    *
    * @return WhoisContact|null The billing
    */
    public function getBilling()
    {
        if (array_key_exists("billing", $this->_propDict)) {
            if (is_a($this->_propDict["billing"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisContact") || is_null($this->_propDict["billing"])) {
                return $this->_propDict["billing"];
            } else {
                $this->_propDict["billing"] = new WhoisContact($this->_propDict["billing"]);
                return $this->_propDict["billing"];
            }
        }
        return null;
    }

    /**
    * Sets the billing
    *
    * @param WhoisContact $val The billing
    *
    * @return WhoisRecord
    */
    public function setBilling($val)
    {
        $this->_propDict["billing"] = $val;
        return $this;
    }

    /**
    * Gets the domainStatus
    *
    * @return string|null The domainStatus
    */
    public function getDomainStatus()
    {
        if (array_key_exists("domainStatus", $this->_propDict)) {
            return $this->_propDict["domainStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainStatus
    *
    * @param string $val The domainStatus
    *
    * @return WhoisRecord
    */
    public function setDomainStatus($val)
    {
        $this->_propDict["domainStatus"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
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
    * @return WhoisRecord
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the firstSeenDateTime
    *
    * @return \DateTime|null The firstSeenDateTime
    */
    public function getFirstSeenDateTime()
    {
        if (array_key_exists("firstSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstSeenDateTime"], "\DateTime") || is_null($this->_propDict["firstSeenDateTime"])) {
                return $this->_propDict["firstSeenDateTime"];
            } else {
                $this->_propDict["firstSeenDateTime"] = new \DateTime($this->_propDict["firstSeenDateTime"]);
                return $this->_propDict["firstSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstSeenDateTime
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return WhoisRecord
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    *
    * @return \DateTime|null The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime") || is_null($this->_propDict["lastSeenDateTime"])) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSeenDateTime
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return WhoisRecord
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdateDateTime
    *
    * @return \DateTime|null The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdateDateTime"])) {
                return $this->_propDict["lastUpdateDateTime"];
            } else {
                $this->_propDict["lastUpdateDateTime"] = new \DateTime($this->_propDict["lastUpdateDateTime"]);
                return $this->_propDict["lastUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdateDateTime
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return WhoisRecord
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the nameservers
     *
     * @return array|null The nameservers
     */
    public function getNameservers()
    {
        if (array_key_exists("nameservers", $this->_propDict)) {
           return $this->_propDict["nameservers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nameservers
    *
    * @param WhoisNameserver[] $val The nameservers
    *
    * @return WhoisRecord
    */
    public function setNameservers($val)
    {
        $this->_propDict["nameservers"] = $val;
        return $this;
    }

    /**
    * Gets the noc
    *
    * @return WhoisContact|null The noc
    */
    public function getNoc()
    {
        if (array_key_exists("noc", $this->_propDict)) {
            if (is_a($this->_propDict["noc"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisContact") || is_null($this->_propDict["noc"])) {
                return $this->_propDict["noc"];
            } else {
                $this->_propDict["noc"] = new WhoisContact($this->_propDict["noc"]);
                return $this->_propDict["noc"];
            }
        }
        return null;
    }

    /**
    * Sets the noc
    *
    * @param WhoisContact $val The noc
    *
    * @return WhoisRecord
    */
    public function setNoc($val)
    {
        $this->_propDict["noc"] = $val;
        return $this;
    }

    /**
    * Gets the rawWhoisText
    *
    * @return string|null The rawWhoisText
    */
    public function getRawWhoisText()
    {
        if (array_key_exists("rawWhoisText", $this->_propDict)) {
            return $this->_propDict["rawWhoisText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rawWhoisText
    *
    * @param string $val The rawWhoisText
    *
    * @return WhoisRecord
    */
    public function setRawWhoisText($val)
    {
        $this->_propDict["rawWhoisText"] = $val;
        return $this;
    }

    /**
    * Gets the registrant
    *
    * @return WhoisContact|null The registrant
    */
    public function getRegistrant()
    {
        if (array_key_exists("registrant", $this->_propDict)) {
            if (is_a($this->_propDict["registrant"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisContact") || is_null($this->_propDict["registrant"])) {
                return $this->_propDict["registrant"];
            } else {
                $this->_propDict["registrant"] = new WhoisContact($this->_propDict["registrant"]);
                return $this->_propDict["registrant"];
            }
        }
        return null;
    }

    /**
    * Sets the registrant
    *
    * @param WhoisContact $val The registrant
    *
    * @return WhoisRecord
    */
    public function setRegistrant($val)
    {
        $this->_propDict["registrant"] = $val;
        return $this;
    }

    /**
    * Gets the registrar
    *
    * @return WhoisContact|null The registrar
    */
    public function getRegistrar()
    {
        if (array_key_exists("registrar", $this->_propDict)) {
            if (is_a($this->_propDict["registrar"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisContact") || is_null($this->_propDict["registrar"])) {
                return $this->_propDict["registrar"];
            } else {
                $this->_propDict["registrar"] = new WhoisContact($this->_propDict["registrar"]);
                return $this->_propDict["registrar"];
            }
        }
        return null;
    }

    /**
    * Sets the registrar
    *
    * @param WhoisContact $val The registrar
    *
    * @return WhoisRecord
    */
    public function setRegistrar($val)
    {
        $this->_propDict["registrar"] = $val;
        return $this;
    }

    /**
    * Gets the registrationDateTime
    *
    * @return \DateTime|null The registrationDateTime
    */
    public function getRegistrationDateTime()
    {
        if (array_key_exists("registrationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["registrationDateTime"], "\DateTime") || is_null($this->_propDict["registrationDateTime"])) {
                return $this->_propDict["registrationDateTime"];
            } else {
                $this->_propDict["registrationDateTime"] = new \DateTime($this->_propDict["registrationDateTime"]);
                return $this->_propDict["registrationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the registrationDateTime
    *
    * @param \DateTime $val The registrationDateTime
    *
    * @return WhoisRecord
    */
    public function setRegistrationDateTime($val)
    {
        $this->_propDict["registrationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the technical
    *
    * @return WhoisContact|null The technical
    */
    public function getTechnical()
    {
        if (array_key_exists("technical", $this->_propDict)) {
            if (is_a($this->_propDict["technical"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisContact") || is_null($this->_propDict["technical"])) {
                return $this->_propDict["technical"];
            } else {
                $this->_propDict["technical"] = new WhoisContact($this->_propDict["technical"]);
                return $this->_propDict["technical"];
            }
        }
        return null;
    }

    /**
    * Sets the technical
    *
    * @param WhoisContact $val The technical
    *
    * @return WhoisRecord
    */
    public function setTechnical($val)
    {
        $this->_propDict["technical"] = $val;
        return $this;
    }

    /**
    * Gets the whoisServer
    *
    * @return string|null The whoisServer
    */
    public function getWhoisServer()
    {
        if (array_key_exists("whoisServer", $this->_propDict)) {
            return $this->_propDict["whoisServer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the whoisServer
    *
    * @param string $val The whoisServer
    *
    * @return WhoisRecord
    */
    public function setWhoisServer($val)
    {
        $this->_propDict["whoisServer"] = $val;
        return $this;
    }

    /**
    * Gets the zone
    *
    * @return WhoisContact|null The zone
    */
    public function getZone()
    {
        if (array_key_exists("zone", $this->_propDict)) {
            if (is_a($this->_propDict["zone"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisContact") || is_null($this->_propDict["zone"])) {
                return $this->_propDict["zone"];
            } else {
                $this->_propDict["zone"] = new WhoisContact($this->_propDict["zone"]);
                return $this->_propDict["zone"];
            }
        }
        return null;
    }

    /**
    * Sets the zone
    *
    * @param WhoisContact $val The zone
    *
    * @return WhoisRecord
    */
    public function setZone($val)
    {
        $this->_propDict["zone"] = $val;
        return $this;
    }

    /**
    * Gets the host
    *
    * @return Host|null The host
    */
    public function getHost()
    {
        if (array_key_exists("host", $this->_propDict)) {
            if (is_a($this->_propDict["host"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Host") || is_null($this->_propDict["host"])) {
                return $this->_propDict["host"];
            } else {
                $this->_propDict["host"] = new Host($this->_propDict["host"]);
                return $this->_propDict["host"];
            }
        }
        return null;
    }

    /**
    * Sets the host
    *
    * @param Host $val The host
    *
    * @return WhoisRecord
    */
    public function setHost($val)
    {
        $this->_propDict["host"] = $val;
        return $this;
    }

}
