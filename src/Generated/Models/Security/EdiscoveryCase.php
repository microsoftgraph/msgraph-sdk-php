<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EdiscoveryCase extends EscapedCase implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new ediscoveryCase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ediscoveryCase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryCase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryCase {
        return new EdiscoveryCase();
    }

    /**
     * Gets the closedBy property value. The user who closed the case.
     * @return IdentitySet|null
    */
    public function getClosedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('closedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'closedBy'");
    }

    /**
     * Gets the closedDateTime property value. The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getClosedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('closedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'closedDateTime'");
    }

    /**
     * Gets the custodians property value. Returns a list of case ediscoveryCustodian objects for this case.
     * @return array<EdiscoveryCustodian>|null
    */
    public function getCustodians(): ?array {
        $val = $this->getBackingStore()->get('custodians');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoveryCustodian::class);
            /** @var array<EdiscoveryCustodian>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'custodians'");
    }

    /**
     * Gets the externalId property value. The external case number for customer reference.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'closedBy' => fn(ParseNode $n) => $o->setClosedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'closedDateTime' => fn(ParseNode $n) => $o->setClosedDateTime($n->getDateTimeValue()),
            'custodians' => fn(ParseNode $n) => $o->setCustodians($n->getCollectionOfObjectValues([EdiscoveryCustodian::class, 'createFromDiscriminatorValue'])),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'noncustodialDataSources' => fn(ParseNode $n) => $o->setNoncustodialDataSources($n->getCollectionOfObjectValues([EdiscoveryNoncustodialDataSource::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([CaseOperation::class, 'createFromDiscriminatorValue'])),
            'reviewSets' => fn(ParseNode $n) => $o->setReviewSets($n->getCollectionOfObjectValues([EdiscoveryReviewSet::class, 'createFromDiscriminatorValue'])),
            'searches' => fn(ParseNode $n) => $o->setSearches($n->getCollectionOfObjectValues([EdiscoverySearch::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([EdiscoveryCaseSettings::class, 'createFromDiscriminatorValue'])),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfObjectValues([EdiscoveryReviewTag::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the noncustodialDataSources property value. Returns a list of case ediscoveryNoncustodialDataSource objects for this case.
     * @return array<EdiscoveryNoncustodialDataSource>|null
    */
    public function getNoncustodialDataSources(): ?array {
        $val = $this->getBackingStore()->get('noncustodialDataSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoveryNoncustodialDataSource::class);
            /** @var array<EdiscoveryNoncustodialDataSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noncustodialDataSources'");
    }

    /**
     * Gets the operations property value. Returns a list of case caseOperation objects for this case.
     * @return array<CaseOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CaseOperation::class);
            /** @var array<CaseOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the reviewSets property value. Returns a list of eDiscoveryReviewSet objects in the case.
     * @return array<EdiscoveryReviewSet>|null
    */
    public function getReviewSets(): ?array {
        $val = $this->getBackingStore()->get('reviewSets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoveryReviewSet::class);
            /** @var array<EdiscoveryReviewSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewSets'");
    }

    /**
     * Gets the searches property value. Returns a list of eDiscoverySearch objects associated with this case.
     * @return array<EdiscoverySearch>|null
    */
    public function getSearches(): ?array {
        $val = $this->getBackingStore()->get('searches');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoverySearch::class);
            /** @var array<EdiscoverySearch>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searches'");
    }

    /**
     * Gets the settings property value. Returns a list of eDIscoverySettings objects in the case.
     * @return EdiscoveryCaseSettings|null
    */
    public function getSettings(): ?EdiscoveryCaseSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof EdiscoveryCaseSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the tags property value. Returns a list of ediscoveryReviewTag objects associated to this case.
     * @return array<EdiscoveryReviewTag>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoveryReviewTag::class);
            /** @var array<EdiscoveryReviewTag>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('closedBy', $this->getClosedBy());
        $writer->writeDateTimeValue('closedDateTime', $this->getClosedDateTime());
        $writer->writeCollectionOfObjectValues('custodians', $this->getCustodians());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeCollectionOfObjectValues('noncustodialDataSources', $this->getNoncustodialDataSources());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('reviewSets', $this->getReviewSets());
        $writer->writeCollectionOfObjectValues('searches', $this->getSearches());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('tags', $this->getTags());
    }

    /**
     * Sets the closedBy property value. The user who closed the case.
     * @param IdentitySet|null $value Value to set for the closedBy property.
    */
    public function setClosedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('closedBy', $value);
    }

    /**
     * Sets the closedDateTime property value. The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the closedDateTime property.
    */
    public function setClosedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('closedDateTime', $value);
    }

    /**
     * Sets the custodians property value. Returns a list of case ediscoveryCustodian objects for this case.
     * @param array<EdiscoveryCustodian>|null $value Value to set for the custodians property.
    */
    public function setCustodians(?array $value): void {
        $this->getBackingStore()->set('custodians', $value);
    }

    /**
     * Sets the externalId property value. The external case number for customer reference.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the noncustodialDataSources property value. Returns a list of case ediscoveryNoncustodialDataSource objects for this case.
     * @param array<EdiscoveryNoncustodialDataSource>|null $value Value to set for the noncustodialDataSources property.
    */
    public function setNoncustodialDataSources(?array $value): void {
        $this->getBackingStore()->set('noncustodialDataSources', $value);
    }

    /**
     * Sets the operations property value. Returns a list of case caseOperation objects for this case.
     * @param array<CaseOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the reviewSets property value. Returns a list of eDiscoveryReviewSet objects in the case.
     * @param array<EdiscoveryReviewSet>|null $value Value to set for the reviewSets property.
    */
    public function setReviewSets(?array $value): void {
        $this->getBackingStore()->set('reviewSets', $value);
    }

    /**
     * Sets the searches property value. Returns a list of eDiscoverySearch objects associated with this case.
     * @param array<EdiscoverySearch>|null $value Value to set for the searches property.
    */
    public function setSearches(?array $value): void {
        $this->getBackingStore()->set('searches', $value);
    }

    /**
     * Sets the settings property value. Returns a list of eDIscoverySettings objects in the case.
     * @param EdiscoveryCaseSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?EdiscoveryCaseSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the tags property value. Returns a list of ediscoveryReviewTag objects associated to this case.
     * @param array<EdiscoveryReviewTag>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
