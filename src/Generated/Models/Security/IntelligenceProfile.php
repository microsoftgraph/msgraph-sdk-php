<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use DateTime;
use Microsoft\\Graph\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IntelligenceProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new IntelligenceProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IntelligenceProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IntelligenceProfile {
        return new IntelligenceProfile();
    }

    /**
     * Gets the aliases property value. A list of commonly-known aliases for the threat intelligence included in the intelligenceProfile.
     * @return array<string>|null
    */
    public function getAliases(): ?array {
        $val = $this->getBackingStore()->get('aliases');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aliases'");
    }

    /**
     * Gets the countriesOrRegionsOfOrigin property value. The country/region of origin for the given actor or threat associated with this intelligenceProfile.
     * @return array<IntelligenceProfileCountryOrRegionOfOrigin>|null
    */
    public function getCountriesOrRegionsOfOrigin(): ?array {
        $val = $this->getBackingStore()->get('countriesOrRegionsOfOrigin');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IntelligenceProfileCountryOrRegionOfOrigin::class);
            /** @var array<IntelligenceProfileCountryOrRegionOfOrigin>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countriesOrRegionsOfOrigin'");
    }

    /**
     * Gets the description property value. The description property
     * @return FormattedContent|null
    */
    public function getDescription(): ?FormattedContent {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || $val instanceof FormattedContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aliases' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAliases($val);
            },
            'countriesOrRegionsOfOrigin' => fn(ParseNode $n) => $o->setCountriesOrRegionsOfOrigin($n->getCollectionOfObjectValues([IntelligenceProfileCountryOrRegionOfOrigin::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getObjectValue([FormattedContent::class, 'createFromDiscriminatorValue'])),
            'firstActiveDateTime' => fn(ParseNode $n) => $o->setFirstActiveDateTime($n->getDateTimeValue()),
            'indicators' => fn(ParseNode $n) => $o->setIndicators($n->getCollectionOfObjectValues([IntelligenceProfileIndicator::class, 'createFromDiscriminatorValue'])),
            'kind' => fn(ParseNode $n) => $o->setKind($n->getEnumValue(IntelligenceProfileKind::class)),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getObjectValue([FormattedContent::class, 'createFromDiscriminatorValue'])),
            'targets' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTargets($val);
            },
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'tradecraft' => fn(ParseNode $n) => $o->setTradecraft($n->getObjectValue([FormattedContent::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstActiveDateTime property value. The date and time when this intelligenceProfile was first active. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getFirstActiveDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstActiveDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstActiveDateTime'");
    }

    /**
     * Gets the indicators property value. Includes an assemblage of high-fidelity network indicators of compromise.
     * @return array<IntelligenceProfileIndicator>|null
    */
    public function getIndicators(): ?array {
        $val = $this->getBackingStore()->get('indicators');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IntelligenceProfileIndicator::class);
            /** @var array<IntelligenceProfileIndicator>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'indicators'");
    }

    /**
     * Gets the kind property value. The kind property
     * @return IntelligenceProfileKind|null
    */
    public function getKind(): ?IntelligenceProfileKind {
        $val = $this->getBackingStore()->get('kind');
        if (is_null($val) || $val instanceof IntelligenceProfileKind) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kind'");
    }

    /**
     * Gets the summary property value. The summary property
     * @return FormattedContent|null
    */
    public function getSummary(): ?FormattedContent {
        $val = $this->getBackingStore()->get('summary');
        if (is_null($val) || $val instanceof FormattedContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'summary'");
    }

    /**
     * Gets the targets property value. Known targets related to this intelligenceProfile.
     * @return array<string>|null
    */
    public function getTargets(): ?array {
        $val = $this->getBackingStore()->get('targets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targets'");
    }

    /**
     * Gets the title property value. The title of this intelligenceProfile.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Gets the tradecraft property value. Formatted information featuring a description of the distinctive tactics, techniques, and procedures (TTP) of the group, followed by a list of all known custom, commodity, and publicly available implants used by the group.
     * @return FormattedContent|null
    */
    public function getTradecraft(): ?FormattedContent {
        $val = $this->getBackingStore()->get('tradecraft');
        if (is_null($val) || $val instanceof FormattedContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tradecraft'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('aliases', $this->getAliases());
        $writer->writeCollectionOfObjectValues('countriesOrRegionsOfOrigin', $this->getCountriesOrRegionsOfOrigin());
        $writer->writeObjectValue('description', $this->getDescription());
        $writer->writeDateTimeValue('firstActiveDateTime', $this->getFirstActiveDateTime());
        $writer->writeCollectionOfObjectValues('indicators', $this->getIndicators());
        $writer->writeEnumValue('kind', $this->getKind());
        $writer->writeObjectValue('summary', $this->getSummary());
        $writer->writeCollectionOfPrimitiveValues('targets', $this->getTargets());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeObjectValue('tradecraft', $this->getTradecraft());
    }

    /**
     * Sets the aliases property value. A list of commonly-known aliases for the threat intelligence included in the intelligenceProfile.
     * @param array<string>|null $value Value to set for the aliases property.
    */
    public function setAliases(?array $value): void {
        $this->getBackingStore()->set('aliases', $value);
    }

    /**
     * Sets the countriesOrRegionsOfOrigin property value. The country/region of origin for the given actor or threat associated with this intelligenceProfile.
     * @param array<IntelligenceProfileCountryOrRegionOfOrigin>|null $value Value to set for the countriesOrRegionsOfOrigin property.
    */
    public function setCountriesOrRegionsOfOrigin(?array $value): void {
        $this->getBackingStore()->set('countriesOrRegionsOfOrigin', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param FormattedContent|null $value Value to set for the description property.
    */
    public function setDescription(?FormattedContent $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the firstActiveDateTime property value. The date and time when this intelligenceProfile was first active. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstActiveDateTime property.
    */
    public function setFirstActiveDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstActiveDateTime', $value);
    }

    /**
     * Sets the indicators property value. Includes an assemblage of high-fidelity network indicators of compromise.
     * @param array<IntelligenceProfileIndicator>|null $value Value to set for the indicators property.
    */
    public function setIndicators(?array $value): void {
        $this->getBackingStore()->set('indicators', $value);
    }

    /**
     * Sets the kind property value. The kind property
     * @param IntelligenceProfileKind|null $value Value to set for the kind property.
    */
    public function setKind(?IntelligenceProfileKind $value): void {
        $this->getBackingStore()->set('kind', $value);
    }

    /**
     * Sets the summary property value. The summary property
     * @param FormattedContent|null $value Value to set for the summary property.
    */
    public function setSummary(?FormattedContent $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

    /**
     * Sets the targets property value. Known targets related to this intelligenceProfile.
     * @param array<string>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value): void {
        $this->getBackingStore()->set('targets', $value);
    }

    /**
     * Sets the title property value. The title of this intelligenceProfile.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the tradecraft property value. Formatted information featuring a description of the distinctive tactics, techniques, and procedures (TTP) of the group, followed by a list of all known custom, commodity, and publicly available implants used by the group.
     * @param FormattedContent|null $value Value to set for the tradecraft property.
    */
    public function setTradecraft(?FormattedContent $value): void {
        $this->getBackingStore()->set('tradecraft', $value);
    }

}
