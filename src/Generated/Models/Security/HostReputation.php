<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HostReputation extends Entity implements Parsable 
{
    /**
     * Instantiates a new HostReputation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostReputation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostReputation {
        return new HostReputation();
    }

    /**
     * Gets the classification property value. The classification property
     * @return HostReputationClassification|null
    */
    public function getClassification(): ?HostReputationClassification {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || $val instanceof HostReputationClassification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(HostReputationClassification::class)),
            'rules' => fn(ParseNode $n) => $o->setRules($n->getCollectionOfObjectValues([HostReputationRule::class, 'createFromDiscriminatorValue'])),
            'score' => fn(ParseNode $n) => $o->setScore($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the rules property value. A collection of rules that have been used to calculate the classification and score.
     * @return array<HostReputationRule>|null
    */
    public function getRules(): ?array {
        $val = $this->getBackingStore()->get('rules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostReputationRule::class);
            /** @var array<HostReputationRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rules'");
    }

    /**
     * Gets the score property value. The calculated score (0-100) of the requested host. A higher value indicates that this host is more likely to be suspicious or malicious.
     * @return int|null
    */
    public function getScore(): ?int {
        $val = $this->getBackingStore()->get('score');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'score'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->getClassification());
        $writer->writeCollectionOfObjectValues('rules', $this->getRules());
        $writer->writeIntegerValue('score', $this->getScore());
    }

    /**
     * Sets the classification property value. The classification property
     * @param HostReputationClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?HostReputationClassification $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the rules property value. A collection of rules that have been used to calculate the classification and score.
     * @param array<HostReputationRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value): void {
        $this->getBackingStore()->set('rules', $value);
    }

    /**
     * Sets the score property value. The calculated score (0-100) of the requested host. A higher value indicates that this host is more likely to be suspicious or malicious.
     * @param int|null $value Value to set for the score property.
    */
    public function setScore(?int $value): void {
        $this->getBackingStore()->set('score', $value);
    }

}
