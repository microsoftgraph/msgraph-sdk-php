<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SslCertificate File
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
* SslCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SslCertificate extends Artifact
{
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
    * @return SslCertificate
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the fingerprint
    *
    * @return string|null The fingerprint
    */
    public function getFingerprint()
    {
        if (array_key_exists("fingerprint", $this->_propDict)) {
            return $this->_propDict["fingerprint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fingerprint
    *
    * @param string $val The fingerprint
    *
    * @return SslCertificate
    */
    public function setFingerprint($val)
    {
        $this->_propDict["fingerprint"] = $val;
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
    * @return SslCertificate
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the issueDateTime
    *
    * @return \DateTime|null The issueDateTime
    */
    public function getIssueDateTime()
    {
        if (array_key_exists("issueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["issueDateTime"], "\DateTime") || is_null($this->_propDict["issueDateTime"])) {
                return $this->_propDict["issueDateTime"];
            } else {
                $this->_propDict["issueDateTime"] = new \DateTime($this->_propDict["issueDateTime"]);
                return $this->_propDict["issueDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the issueDateTime
    *
    * @param \DateTime $val The issueDateTime
    *
    * @return SslCertificate
    */
    public function setIssueDateTime($val)
    {
        $this->_propDict["issueDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the issuer
    *
    * @return SslCertificateEntity|null The issuer
    */
    public function getIssuer()
    {
        if (array_key_exists("issuer", $this->_propDict)) {
            if (is_a($this->_propDict["issuer"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SslCertificateEntity") || is_null($this->_propDict["issuer"])) {
                return $this->_propDict["issuer"];
            } else {
                $this->_propDict["issuer"] = new SslCertificateEntity($this->_propDict["issuer"]);
                return $this->_propDict["issuer"];
            }
        }
        return null;
    }

    /**
    * Sets the issuer
    *
    * @param SslCertificateEntity $val The issuer
    *
    * @return SslCertificate
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
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
    * @return SslCertificate
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the serialNumber
    *
    * @return string|null The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serialNumber
    *
    * @param string $val The serialNumber
    *
    * @return SslCertificate
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }

    /**
    * Gets the sha1
    *
    * @return string|null The sha1
    */
    public function getSha1()
    {
        if (array_key_exists("sha1", $this->_propDict)) {
            return $this->_propDict["sha1"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sha1
    *
    * @param string $val The sha1
    *
    * @return SslCertificate
    */
    public function setSha1($val)
    {
        $this->_propDict["sha1"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    *
    * @return SslCertificateEntity|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            if (is_a($this->_propDict["subject"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SslCertificateEntity") || is_null($this->_propDict["subject"])) {
                return $this->_propDict["subject"];
            } else {
                $this->_propDict["subject"] = new SslCertificateEntity($this->_propDict["subject"]);
                return $this->_propDict["subject"];
            }
        }
        return null;
    }

    /**
    * Sets the subject
    *
    * @param SslCertificateEntity $val The subject
    *
    * @return SslCertificate
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }


     /**
     * Gets the relatedHosts
     *
     * @return array|null The relatedHosts
     */
    public function getRelatedHosts()
    {
        if (array_key_exists("relatedHosts", $this->_propDict)) {
           return $this->_propDict["relatedHosts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the relatedHosts
    *
    * @param Host[] $val The relatedHosts
    *
    * @return SslCertificate
    */
    public function setRelatedHosts($val)
    {
        $this->_propDict["relatedHosts"] = $val;
        return $this;
    }

}
