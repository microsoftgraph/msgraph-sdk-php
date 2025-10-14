<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EdiscoveryCustodian extends DataSourceContainer implements Parsable 
{
    /**
     * Instantiates a new EdiscoveryCustodian and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ediscoveryCustodian');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryCustodian
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryCustodian {
        return new EdiscoveryCustodian();
    }

    /**
     * Gets the acknowledgedDateTime property value. Date and time the custodian acknowledged a hold notification.
     * @return DateTime|null
    */
    public function getAcknowledgedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('acknowledgedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acknowledgedDateTime'");
    }

    /**
     * Gets the email property value. Email address of the custodian.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acknowledgedDateTime' => fn(ParseNode $n) => $o->setAcknowledgedDateTime($n->getDateTimeValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'lastIndexOperation' => fn(ParseNode $n) => $o->setLastIndexOperation($n->getObjectValue([EdiscoveryIndexOperation::class, 'createFromDiscriminatorValue'])),
            'siteSources' => fn(ParseNode $n) => $o->setSiteSources($n->getCollectionOfObjectValues([SiteSource::class, 'createFromDiscriminatorValue'])),
            'unifiedGroupSources' => fn(ParseNode $n) => $o->setUnifiedGroupSources($n->getCollectionOfObjectValues([UnifiedGroupSource::class, 'createFromDiscriminatorValue'])),
            'userSources' => fn(ParseNode $n) => $o->setUserSources($n->getCollectionOfObjectValues([UserSource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastIndexOperation property value. Operation entity that represents the latest indexing for the custodian.
     * @return EdiscoveryIndexOperation|null
    */
    public function getLastIndexOperation(): ?EdiscoveryIndexOperation {
        $val = $this->getBackingStore()->get('lastIndexOperation');
        if (is_null($val) || $val instanceof EdiscoveryIndexOperation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastIndexOperation'");
    }

    /**
     * Gets the siteSources property value. Data source entity for SharePoint sites associated with the custodian.
     * @return array<SiteSource>|null
    */
    public function getSiteSources(): ?array {
        $val = $this->getBackingStore()->get('siteSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SiteSource::class);
            /** @var array<SiteSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteSources'");
    }

    /**
     * Gets the unifiedGroupSources property value. Data source entity for groups associated with the custodian.
     * @return array<UnifiedGroupSource>|null
    */
    public function getUnifiedGroupSources(): ?array {
        $val = $this->getBackingStore()->get('unifiedGroupSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedGroupSource::class);
            /** @var array<UnifiedGroupSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unifiedGroupSources'");
    }

    /**
     * Gets the userSources property value. Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
     * @return array<UserSource>|null
    */
    public function getUserSources(): ?array {
        $val = $this->getBackingStore()->get('userSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSource::class);
            /** @var array<UserSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('acknowledgedDateTime', $this->getAcknowledgedDateTime());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeObjectValue('lastIndexOperation', $this->getLastIndexOperation());
        $writer->writeCollectionOfObjectValues('siteSources', $this->getSiteSources());
        $writer->writeCollectionOfObjectValues('unifiedGroupSources', $this->getUnifiedGroupSources());
        $writer->writeCollectionOfObjectValues('userSources', $this->getUserSources());
    }

    /**
     * Sets the acknowledgedDateTime property value. Date and time the custodian acknowledged a hold notification.
     * @param DateTime|null $value Value to set for the acknowledgedDateTime property.
    */
    public function setAcknowledgedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('acknowledgedDateTime', $value);
    }

    /**
     * Sets the email property value. Email address of the custodian.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the lastIndexOperation property value. Operation entity that represents the latest indexing for the custodian.
     * @param EdiscoveryIndexOperation|null $value Value to set for the lastIndexOperation property.
    */
    public function setLastIndexOperation(?EdiscoveryIndexOperation $value): void {
        $this->getBackingStore()->set('lastIndexOperation', $value);
    }

    /**
     * Sets the siteSources property value. Data source entity for SharePoint sites associated with the custodian.
     * @param array<SiteSource>|null $value Value to set for the siteSources property.
    */
    public function setSiteSources(?array $value): void {
        $this->getBackingStore()->set('siteSources', $value);
    }

    /**
     * Sets the unifiedGroupSources property value. Data source entity for groups associated with the custodian.
     * @param array<UnifiedGroupSource>|null $value Value to set for the unifiedGroupSources property.
    */
    public function setUnifiedGroupSources(?array $value): void {
        $this->getBackingStore()->set('unifiedGroupSources', $value);
    }

    /**
     * Sets the userSources property value. Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
     * @param array<UserSource>|null $value Value to set for the userSources property.
    */
    public function setUserSources(?array $value): void {
        $this->getBackingStore()->set('userSources', $value);
    }

}
