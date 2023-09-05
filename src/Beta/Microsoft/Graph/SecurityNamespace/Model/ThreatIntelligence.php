<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThreatIntelligence File
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
* ThreatIntelligence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ThreatIntelligence extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the articleIndicators
    * Refers to indicators of threat or compromise highlighted in an article.Note: List retrieval is not yet supported.
     *
     * @return array|null The articleIndicators
     */
    public function getArticleIndicators()
    {
        if (array_key_exists("articleIndicators", $this->_propDict)) {
           return $this->_propDict["articleIndicators"];
        } else {
            return null;
        }
    }

    /**
    * Sets the articleIndicators
    * Refers to indicators of threat or compromise highlighted in an article.Note: List retrieval is not yet supported.
    *
    * @param ArticleIndicator[] $val The articleIndicators
    *
    * @return ThreatIntelligence
    */
    public function setArticleIndicators($val)
    {
        $this->_propDict["articleIndicators"] = $val;
        return $this;
    }


     /**
     * Gets the articles
    * A list of article objects.
     *
     * @return array|null The articles
     */
    public function getArticles()
    {
        if (array_key_exists("articles", $this->_propDict)) {
           return $this->_propDict["articles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the articles
    * A list of article objects.
    *
    * @param Article[] $val The articles
    *
    * @return ThreatIntelligence
    */
    public function setArticles($val)
    {
        $this->_propDict["articles"] = $val;
        return $this;
    }


     /**
     * Gets the hostComponents
    * Retrieve details about hostComponent objects.Note: List retrieval is not yet supported.
     *
     * @return array|null The hostComponents
     */
    public function getHostComponents()
    {
        if (array_key_exists("hostComponents", $this->_propDict)) {
           return $this->_propDict["hostComponents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostComponents
    * Retrieve details about hostComponent objects.Note: List retrieval is not yet supported.
    *
    * @param HostComponent[] $val The hostComponents
    *
    * @return ThreatIntelligence
    */
    public function setHostComponents($val)
    {
        $this->_propDict["hostComponents"] = $val;
        return $this;
    }


     /**
     * Gets the hostCookies
    * Retrieve details about hostCookie objects.Note: List retrieval is not yet supported.
     *
     * @return array|null The hostCookies
     */
    public function getHostCookies()
    {
        if (array_key_exists("hostCookies", $this->_propDict)) {
           return $this->_propDict["hostCookies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostCookies
    * Retrieve details about hostCookie objects.Note: List retrieval is not yet supported.
    *
    * @param HostCookie[] $val The hostCookies
    *
    * @return ThreatIntelligence
    */
    public function setHostCookies($val)
    {
        $this->_propDict["hostCookies"] = $val;
        return $this;
    }


     /**
     * Gets the hostPairs
    * Retrieve details about hostTracker objects.Note: List retrieval is not yet supported.
     *
     * @return array|null The hostPairs
     */
    public function getHostPairs()
    {
        if (array_key_exists("hostPairs", $this->_propDict)) {
           return $this->_propDict["hostPairs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostPairs
    * Retrieve details about hostTracker objects.Note: List retrieval is not yet supported.
    *
    * @param HostPair[] $val The hostPairs
    *
    * @return ThreatIntelligence
    */
    public function setHostPairs($val)
    {
        $this->_propDict["hostPairs"] = $val;
        return $this;
    }


     /**
     * Gets the hosts
    * Refers to host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported.
     *
     * @return array|null The hosts
     */
    public function getHosts()
    {
        if (array_key_exists("hosts", $this->_propDict)) {
           return $this->_propDict["hosts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hosts
    * Refers to host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported.
    *
    * @param Host[] $val The hosts
    *
    * @return ThreatIntelligence
    */
    public function setHosts($val)
    {
        $this->_propDict["hosts"] = $val;
        return $this;
    }


     /**
     * Gets the hostSslCertificates
     *
     * @return array|null The hostSslCertificates
     */
    public function getHostSslCertificates()
    {
        if (array_key_exists("hostSslCertificates", $this->_propDict)) {
           return $this->_propDict["hostSslCertificates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostSslCertificates
    *
    * @param HostSslCertificate[] $val The hostSslCertificates
    *
    * @return ThreatIntelligence
    */
    public function setHostSslCertificates($val)
    {
        $this->_propDict["hostSslCertificates"] = $val;
        return $this;
    }


     /**
     * Gets the hostTrackers
    * Retrieve details about hostTracker objects.Note: List retrieval is not yet supported.
     *
     * @return array|null The hostTrackers
     */
    public function getHostTrackers()
    {
        if (array_key_exists("hostTrackers", $this->_propDict)) {
           return $this->_propDict["hostTrackers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostTrackers
    * Retrieve details about hostTracker objects.Note: List retrieval is not yet supported.
    *
    * @param HostTracker[] $val The hostTrackers
    *
    * @return ThreatIntelligence
    */
    public function setHostTrackers($val)
    {
        $this->_propDict["hostTrackers"] = $val;
        return $this;
    }


     /**
     * Gets the intelligenceProfileIndicators
     *
     * @return array|null The intelligenceProfileIndicators
     */
    public function getIntelligenceProfileIndicators()
    {
        if (array_key_exists("intelligenceProfileIndicators", $this->_propDict)) {
           return $this->_propDict["intelligenceProfileIndicators"];
        } else {
            return null;
        }
    }

    /**
    * Sets the intelligenceProfileIndicators
    *
    * @param IntelligenceProfileIndicator[] $val The intelligenceProfileIndicators
    *
    * @return ThreatIntelligence
    */
    public function setIntelligenceProfileIndicators($val)
    {
        $this->_propDict["intelligenceProfileIndicators"] = $val;
        return $this;
    }


     /**
     * Gets the intelProfiles
    * A list of intelligenceProfile objects.
     *
     * @return array|null The intelProfiles
     */
    public function getIntelProfiles()
    {
        if (array_key_exists("intelProfiles", $this->_propDict)) {
           return $this->_propDict["intelProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the intelProfiles
    * A list of intelligenceProfile objects.
    *
    * @param IntelligenceProfile[] $val The intelProfiles
    *
    * @return ThreatIntelligence
    */
    public function setIntelProfiles($val)
    {
        $this->_propDict["intelProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the passiveDnsRecords
    * Retrieve details about passiveDnsRecord objects.Note: List retrieval is not yet supported.
     *
     * @return array|null The passiveDnsRecords
     */
    public function getPassiveDnsRecords()
    {
        if (array_key_exists("passiveDnsRecords", $this->_propDict)) {
           return $this->_propDict["passiveDnsRecords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passiveDnsRecords
    * Retrieve details about passiveDnsRecord objects.Note: List retrieval is not yet supported.
    *
    * @param PassiveDnsRecord[] $val The passiveDnsRecords
    *
    * @return ThreatIntelligence
    */
    public function setPassiveDnsRecords($val)
    {
        $this->_propDict["passiveDnsRecords"] = $val;
        return $this;
    }


     /**
     * Gets the sslCertificates
     *
     * @return array|null The sslCertificates
     */
    public function getSslCertificates()
    {
        if (array_key_exists("sslCertificates", $this->_propDict)) {
           return $this->_propDict["sslCertificates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sslCertificates
    *
    * @param SslCertificate[] $val The sslCertificates
    *
    * @return ThreatIntelligence
    */
    public function setSslCertificates($val)
    {
        $this->_propDict["sslCertificates"] = $val;
        return $this;
    }


     /**
     * Gets the subdomains
    * Retrieve details about the subdomain.Note: List retrieval is not yet supported.
     *
     * @return array|null The subdomains
     */
    public function getSubdomains()
    {
        if (array_key_exists("subdomains", $this->_propDict)) {
           return $this->_propDict["subdomains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subdomains
    * Retrieve details about the subdomain.Note: List retrieval is not yet supported.
    *
    * @param Subdomain[] $val The subdomains
    *
    * @return ThreatIntelligence
    */
    public function setSubdomains($val)
    {
        $this->_propDict["subdomains"] = $val;
        return $this;
    }


     /**
     * Gets the vulnerabilities
    * Retrieve details about vulnerabilities.Note: List retrieval is not yet supported.
     *
     * @return array|null The vulnerabilities
     */
    public function getVulnerabilities()
    {
        if (array_key_exists("vulnerabilities", $this->_propDict)) {
           return $this->_propDict["vulnerabilities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vulnerabilities
    * Retrieve details about vulnerabilities.Note: List retrieval is not yet supported.
    *
    * @param Vulnerability[] $val The vulnerabilities
    *
    * @return ThreatIntelligence
    */
    public function setVulnerabilities($val)
    {
        $this->_propDict["vulnerabilities"] = $val;
        return $this;
    }


     /**
     * Gets the whoisHistoryRecords
    * Retrieve details about whoisHistoryRecord objects.Note: List retrieval is not yet supported.
     *
     * @return array|null The whoisHistoryRecords
     */
    public function getWhoisHistoryRecords()
    {
        if (array_key_exists("whoisHistoryRecords", $this->_propDict)) {
           return $this->_propDict["whoisHistoryRecords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the whoisHistoryRecords
    * Retrieve details about whoisHistoryRecord objects.Note: List retrieval is not yet supported.
    *
    * @param WhoisHistoryRecord[] $val The whoisHistoryRecords
    *
    * @return ThreatIntelligence
    */
    public function setWhoisHistoryRecords($val)
    {
        $this->_propDict["whoisHistoryRecords"] = $val;
        return $this;
    }


     /**
     * Gets the whoisRecords
    * A list of whoisRecord objects.
     *
     * @return array|null The whoisRecords
     */
    public function getWhoisRecords()
    {
        if (array_key_exists("whoisRecords", $this->_propDict)) {
           return $this->_propDict["whoisRecords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the whoisRecords
    * A list of whoisRecord objects.
    *
    * @param WhoisRecord[] $val The whoisRecords
    *
    * @return ThreatIntelligence
    */
    public function setWhoisRecords($val)
    {
        $this->_propDict["whoisRecords"] = $val;
        return $this;
    }

}
