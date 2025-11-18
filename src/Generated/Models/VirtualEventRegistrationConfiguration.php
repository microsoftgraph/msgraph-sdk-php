<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventRegistrationConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new VirtualEventRegistrationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventRegistrationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventRegistrationConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.virtualEventWebinarRegistrationConfiguration': return new VirtualEventWebinarRegistrationConfiguration();
            }
        }
        return new VirtualEventRegistrationConfiguration();
    }

    /**
     * Gets the capacity property value. Total capacity of the virtual event.
     * @return int|null
    */
    public function getCapacity(): ?int {
        $val = $this->getBackingStore()->get('capacity');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capacity'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capacity' => fn(ParseNode $n) => $o->setCapacity($n->getIntegerValue()),
            'questions' => fn(ParseNode $n) => $o->setQuestions($n->getCollectionOfObjectValues([VirtualEventRegistrationQuestionBase::class, 'createFromDiscriminatorValue'])),
            'registrationWebUrl' => fn(ParseNode $n) => $o->setRegistrationWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the questions property value. Registration questions.
     * @return array<VirtualEventRegistrationQuestionBase>|null
    */
    public function getQuestions(): ?array {
        $val = $this->getBackingStore()->get('questions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventRegistrationQuestionBase::class);
            /** @var array<VirtualEventRegistrationQuestionBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'questions'");
    }

    /**
     * Gets the registrationWebUrl property value. Registration URL of the virtual event.
     * @return string|null
    */
    public function getRegistrationWebUrl(): ?string {
        $val = $this->getBackingStore()->get('registrationWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('capacity', $this->getCapacity());
        $writer->writeCollectionOfObjectValues('questions', $this->getQuestions());
        $writer->writeStringValue('registrationWebUrl', $this->getRegistrationWebUrl());
    }

    /**
     * Sets the capacity property value. Total capacity of the virtual event.
     * @param int|null $value Value to set for the capacity property.
    */
    public function setCapacity(?int $value): void {
        $this->getBackingStore()->set('capacity', $value);
    }

    /**
     * Sets the questions property value. Registration questions.
     * @param array<VirtualEventRegistrationQuestionBase>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value): void {
        $this->getBackingStore()->set('questions', $value);
    }

    /**
     * Sets the registrationWebUrl property value. Registration URL of the virtual event.
     * @param string|null $value Value to set for the registrationWebUrl property.
    */
    public function setRegistrationWebUrl(?string $value): void {
        $this->getBackingStore()->set('registrationWebUrl', $value);
    }

}
