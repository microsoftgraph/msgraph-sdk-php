<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\\Graph\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DispositionReviewStage extends Entity implements Parsable 
{
    /**
     * Instantiates a new DispositionReviewStage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DispositionReviewStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DispositionReviewStage {
        return new DispositionReviewStage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'reviewersEmailAddresses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReviewersEmailAddresses($val);
            },
            'stageNumber' => fn(ParseNode $n) => $o->setStageNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. Name representing each stage within a collection.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the reviewersEmailAddresses property value. A collection of reviewers at each stage.
     * @return array<string>|null
    */
    public function getReviewersEmailAddresses(): ?array {
        $val = $this->getBackingStore()->get('reviewersEmailAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewersEmailAddresses'");
    }

    /**
     * Gets the stageNumber property value. The unique sequence number for each stage of the disposition review.
     * @return string|null
    */
    public function getStageNumber(): ?string {
        $val = $this->getBackingStore()->get('stageNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stageNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('reviewersEmailAddresses', $this->getReviewersEmailAddresses());
        $writer->writeStringValue('stageNumber', $this->getStageNumber());
    }

    /**
     * Sets the name property value. Name representing each stage within a collection.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the reviewersEmailAddresses property value. A collection of reviewers at each stage.
     * @param array<string>|null $value Value to set for the reviewersEmailAddresses property.
    */
    public function setReviewersEmailAddresses(?array $value): void {
        $this->getBackingStore()->set('reviewersEmailAddresses', $value);
    }

    /**
     * Sets the stageNumber property value. The unique sequence number for each stage of the disposition review.
     * @param string|null $value Value to set for the stageNumber property.
    */
    public function setStageNumber(?string $value): void {
        $this->getBackingStore()->set('stageNumber', $value);
    }

}
