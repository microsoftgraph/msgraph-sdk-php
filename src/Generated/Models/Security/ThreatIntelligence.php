<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ThreatIntelligence extends Entity implements Parsable 
{
    /**
     * Instantiates a new threatIntelligence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatIntelligence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatIntelligence {
        return new ThreatIntelligence();
    }

    /**
     * Gets the articleIndicators property value. Refers to indicators of threat or compromise highlighted in an microsoft.graph.security.article.Note: List retrieval is not yet supported.
     * @return array<ArticleIndicator>|null
    */
    public function getArticleIndicators(): ?array {
        $val = $this->getBackingStore()->get('articleIndicators');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ArticleIndicator::class);
            /** @var array<ArticleIndicator>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'articleIndicators'");
    }

    /**
     * Gets the articles property value. A list of article objects.
     * @return array<Article>|null
    */
    public function getArticles(): ?array {
        $val = $this->getBackingStore()->get('articles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Article::class);
            /** @var array<Article>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'articles'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'articleIndicators' => fn(ParseNode $n) => $o->setArticleIndicators($n->getCollectionOfObjectValues([ArticleIndicator::class, 'createFromDiscriminatorValue'])),
            'articles' => fn(ParseNode $n) => $o->setArticles($n->getCollectionOfObjectValues([Article::class, 'createFromDiscriminatorValue'])),
            'hostComponents' => fn(ParseNode $n) => $o->setHostComponents($n->getCollectionOfObjectValues([HostComponent::class, 'createFromDiscriminatorValue'])),
            'hostCookies' => fn(ParseNode $n) => $o->setHostCookies($n->getCollectionOfObjectValues([HostCookie::class, 'createFromDiscriminatorValue'])),
            'hosts' => fn(ParseNode $n) => $o->setHosts($n->getCollectionOfObjectValues([Host::class, 'createFromDiscriminatorValue'])),
            'hostTrackers' => fn(ParseNode $n) => $o->setHostTrackers($n->getCollectionOfObjectValues([HostTracker::class, 'createFromDiscriminatorValue'])),
            'intelligenceProfileIndicators' => fn(ParseNode $n) => $o->setIntelligenceProfileIndicators($n->getCollectionOfObjectValues([IntelligenceProfileIndicator::class, 'createFromDiscriminatorValue'])),
            'intelProfiles' => fn(ParseNode $n) => $o->setIntelProfiles($n->getCollectionOfObjectValues([IntelligenceProfile::class, 'createFromDiscriminatorValue'])),
            'passiveDnsRecords' => fn(ParseNode $n) => $o->setPassiveDnsRecords($n->getCollectionOfObjectValues([PassiveDnsRecord::class, 'createFromDiscriminatorValue'])),
            'vulnerabilities' => fn(ParseNode $n) => $o->setVulnerabilities($n->getCollectionOfObjectValues([Vulnerability::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hostComponents property value. Retrieve details about microsoft.graph.security.hostComponent objects.Note: List retrieval is not yet supported.
     * @return array<HostComponent>|null
    */
    public function getHostComponents(): ?array {
        $val = $this->getBackingStore()->get('hostComponents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostComponent::class);
            /** @var array<HostComponent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostComponents'");
    }

    /**
     * Gets the hostCookies property value. Retrieve details about microsoft.graph.security.hostCookie objects.Note: List retrieval is not yet supported.
     * @return array<HostCookie>|null
    */
    public function getHostCookies(): ?array {
        $val = $this->getBackingStore()->get('hostCookies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostCookie::class);
            /** @var array<HostCookie>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostCookies'");
    }

    /**
     * Gets the hosts property value. Refers to microsoft.graph.security.host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported.
     * @return array<Host>|null
    */
    public function getHosts(): ?array {
        $val = $this->getBackingStore()->get('hosts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Host::class);
            /** @var array<Host>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hosts'");
    }

    /**
     * Gets the hostTrackers property value. Retrieve details about microsoft.graph.security.hostTracker objects.Note: List retrieval is not yet supported.
     * @return array<HostTracker>|null
    */
    public function getHostTrackers(): ?array {
        $val = $this->getBackingStore()->get('hostTrackers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostTracker::class);
            /** @var array<HostTracker>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostTrackers'");
    }

    /**
     * Gets the intelligenceProfileIndicators property value. The intelligenceProfileIndicators property
     * @return array<IntelligenceProfileIndicator>|null
    */
    public function getIntelligenceProfileIndicators(): ?array {
        $val = $this->getBackingStore()->get('intelligenceProfileIndicators');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IntelligenceProfileIndicator::class);
            /** @var array<IntelligenceProfileIndicator>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intelligenceProfileIndicators'");
    }

    /**
     * Gets the intelProfiles property value. A list of intelligenceProfile objects.
     * @return array<IntelligenceProfile>|null
    */
    public function getIntelProfiles(): ?array {
        $val = $this->getBackingStore()->get('intelProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IntelligenceProfile::class);
            /** @var array<IntelligenceProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intelProfiles'");
    }

    /**
     * Gets the passiveDnsRecords property value. Retrieve details about microsoft.graph.security.passiveDnsRecord objects.Note: List retrieval is not yet supported.
     * @return array<PassiveDnsRecord>|null
    */
    public function getPassiveDnsRecords(): ?array {
        $val = $this->getBackingStore()->get('passiveDnsRecords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PassiveDnsRecord::class);
            /** @var array<PassiveDnsRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passiveDnsRecords'");
    }

    /**
     * Gets the vulnerabilities property value. Retrieve details about microsoft.graph.security.vulnerabilities.Note: List retrieval is not yet supported.
     * @return array<Vulnerability>|null
    */
    public function getVulnerabilities(): ?array {
        $val = $this->getBackingStore()->get('vulnerabilities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Vulnerability::class);
            /** @var array<Vulnerability>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vulnerabilities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('articleIndicators', $this->getArticleIndicators());
        $writer->writeCollectionOfObjectValues('articles', $this->getArticles());
        $writer->writeCollectionOfObjectValues('hostComponents', $this->getHostComponents());
        $writer->writeCollectionOfObjectValues('hostCookies', $this->getHostCookies());
        $writer->writeCollectionOfObjectValues('hosts', $this->getHosts());
        $writer->writeCollectionOfObjectValues('hostTrackers', $this->getHostTrackers());
        $writer->writeCollectionOfObjectValues('intelligenceProfileIndicators', $this->getIntelligenceProfileIndicators());
        $writer->writeCollectionOfObjectValues('intelProfiles', $this->getIntelProfiles());
        $writer->writeCollectionOfObjectValues('passiveDnsRecords', $this->getPassiveDnsRecords());
        $writer->writeCollectionOfObjectValues('vulnerabilities', $this->getVulnerabilities());
    }

    /**
     * Sets the articleIndicators property value. Refers to indicators of threat or compromise highlighted in an microsoft.graph.security.article.Note: List retrieval is not yet supported.
     * @param array<ArticleIndicator>|null $value Value to set for the articleIndicators property.
    */
    public function setArticleIndicators(?array $value): void {
        $this->getBackingStore()->set('articleIndicators', $value);
    }

    /**
     * Sets the articles property value. A list of article objects.
     * @param array<Article>|null $value Value to set for the articles property.
    */
    public function setArticles(?array $value): void {
        $this->getBackingStore()->set('articles', $value);
    }

    /**
     * Sets the hostComponents property value. Retrieve details about microsoft.graph.security.hostComponent objects.Note: List retrieval is not yet supported.
     * @param array<HostComponent>|null $value Value to set for the hostComponents property.
    */
    public function setHostComponents(?array $value): void {
        $this->getBackingStore()->set('hostComponents', $value);
    }

    /**
     * Sets the hostCookies property value. Retrieve details about microsoft.graph.security.hostCookie objects.Note: List retrieval is not yet supported.
     * @param array<HostCookie>|null $value Value to set for the hostCookies property.
    */
    public function setHostCookies(?array $value): void {
        $this->getBackingStore()->set('hostCookies', $value);
    }

    /**
     * Sets the hosts property value. Refers to microsoft.graph.security.host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported.
     * @param array<Host>|null $value Value to set for the hosts property.
    */
    public function setHosts(?array $value): void {
        $this->getBackingStore()->set('hosts', $value);
    }

    /**
     * Sets the hostTrackers property value. Retrieve details about microsoft.graph.security.hostTracker objects.Note: List retrieval is not yet supported.
     * @param array<HostTracker>|null $value Value to set for the hostTrackers property.
    */
    public function setHostTrackers(?array $value): void {
        $this->getBackingStore()->set('hostTrackers', $value);
    }

    /**
     * Sets the intelligenceProfileIndicators property value. The intelligenceProfileIndicators property
     * @param array<IntelligenceProfileIndicator>|null $value Value to set for the intelligenceProfileIndicators property.
    */
    public function setIntelligenceProfileIndicators(?array $value): void {
        $this->getBackingStore()->set('intelligenceProfileIndicators', $value);
    }

    /**
     * Sets the intelProfiles property value. A list of intelligenceProfile objects.
     * @param array<IntelligenceProfile>|null $value Value to set for the intelProfiles property.
    */
    public function setIntelProfiles(?array $value): void {
        $this->getBackingStore()->set('intelProfiles', $value);
    }

    /**
     * Sets the passiveDnsRecords property value. Retrieve details about microsoft.graph.security.passiveDnsRecord objects.Note: List retrieval is not yet supported.
     * @param array<PassiveDnsRecord>|null $value Value to set for the passiveDnsRecords property.
    */
    public function setPassiveDnsRecords(?array $value): void {
        $this->getBackingStore()->set('passiveDnsRecords', $value);
    }

    /**
     * Sets the vulnerabilities property value. Retrieve details about microsoft.graph.security.vulnerabilities.Note: List retrieval is not yet supported.
     * @param array<Vulnerability>|null $value Value to set for the vulnerabilities property.
    */
    public function setVulnerabilities(?array $value): void {
        $this->getBackingStore()->set('vulnerabilities', $value);
    }

}
