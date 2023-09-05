<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WhoisBaseRecord File
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
* WhoisBaseRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WhoisBaseRecord extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the abuse
    * The contact information for the abuse contact.
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
    * The contact information for the abuse contact.
    *
    * @param WhoisContact $val The abuse
    *
    * @return WhoisBaseRecord
    */
    public function setAbuse($val)
    {
        $this->_propDict["abuse"] = $val;
        return $this;
    }

    /**
    * Gets the admin
    * The contact information for the admin contact.
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
    * The contact information for the admin contact.
    *
    * @param WhoisContact $val The admin
    *
    * @return WhoisBaseRecord
    */
    public function setAdmin($val)
    {
        $this->_propDict["admin"] = $val;
        return $this;
    }

    /**
    * Gets the billing
    * The contact information for the billing contact.
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
    * The contact information for the billing contact.
    *
    * @param WhoisContact $val The billing
    *
    * @return WhoisBaseRecord
    */
    public function setBilling($val)
    {
        $this->_propDict["billing"] = $val;
        return $this;
    }

    /**
    * Gets the domainStatus
    * The domain status for this WHOIS object.
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
    * The domain status for this WHOIS object.
    *
    * @param string $val The domainStatus
    *
    * @return WhoisBaseRecord
    */
    public function setDomainStatus($val)
    {
        $this->_propDict["domainStatus"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * The date and time when this WHOIS record expires with the registrar. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when this WHOIS record expires with the registrar. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return WhoisBaseRecord
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the firstSeenDateTime
    * The first seen date and time of this WHOIS record. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The first seen date and time of this WHOIS record. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return WhoisBaseRecord
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The last seen date and time of this WHOIS record. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The last seen date and time of this WHOIS record. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return WhoisBaseRecord
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdateDateTime
    * The date and time when this WHOIS record was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when this WHOIS record was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return WhoisBaseRecord
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the nameservers
    * The nameservers for this WHOIS object.
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
    * The nameservers for this WHOIS object.
    *
    * @param WhoisNameserver[] $val The nameservers
    *
    * @return WhoisBaseRecord
    */
    public function setNameservers($val)
    {
        $this->_propDict["nameservers"] = $val;
        return $this;
    }

    /**
    * Gets the noc
    * The contact information for the noc contact.
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
    * The contact information for the noc contact.
    *
    * @param WhoisContact $val The noc
    *
    * @return WhoisBaseRecord
    */
    public function setNoc($val)
    {
        $this->_propDict["noc"] = $val;
        return $this;
    }

    /**
    * Gets the rawWhoisText
    * The raw WHOIS details for this WHOIS object.
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
    * The raw WHOIS details for this WHOIS object.
    *
    * @param string $val The rawWhoisText
    *
    * @return WhoisBaseRecord
    */
    public function setRawWhoisText($val)
    {
        $this->_propDict["rawWhoisText"] = $val;
        return $this;
    }

    /**
    * Gets the registrant
    * The contact information for the registrant contact.
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
    * The contact information for the registrant contact.
    *
    * @param WhoisContact $val The registrant
    *
    * @return WhoisBaseRecord
    */
    public function setRegistrant($val)
    {
        $this->_propDict["registrant"] = $val;
        return $this;
    }

    /**
    * Gets the registrar
    * The contact information for the registrar contact.
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
    * The contact information for the registrar contact.
    *
    * @param WhoisContact $val The registrar
    *
    * @return WhoisBaseRecord
    */
    public function setRegistrar($val)
    {
        $this->_propDict["registrar"] = $val;
        return $this;
    }

    /**
    * Gets the registrationDateTime
    * The date and time when this WHOIS record was registered with a registrar. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when this WHOIS record was registered with a registrar. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The registrationDateTime
    *
    * @return WhoisBaseRecord
    */
    public function setRegistrationDateTime($val)
    {
        $this->_propDict["registrationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the technical
    * The contact information for the technical contact.
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
    * The contact information for the technical contact.
    *
    * @param WhoisContact $val The technical
    *
    * @return WhoisBaseRecord
    */
    public function setTechnical($val)
    {
        $this->_propDict["technical"] = $val;
        return $this;
    }

    /**
    * Gets the whoisServer
    * The WHOIS server that provides the details.
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
    * The WHOIS server that provides the details.
    *
    * @param string $val The whoisServer
    *
    * @return WhoisBaseRecord
    */
    public function setWhoisServer($val)
    {
        $this->_propDict["whoisServer"] = $val;
        return $this;
    }

    /**
    * Gets the zone
    * The contact information for the zone contact.
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
    * The contact information for the zone contact.
    *
    * @param WhoisContact $val The zone
    *
    * @return WhoisBaseRecord
    */
    public function setZone($val)
    {
        $this->_propDict["zone"] = $val;
        return $this;
    }

    /**
    * Gets the host
    * The host associated to this WHOIS object.
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
    * The host associated to this WHOIS object.
    *
    * @param Host $val The host
    *
    * @return WhoisBaseRecord
    */
    public function setHost($val)
    {
        $this->_propDict["host"] = $val;
        return $this;
    }

}
