<?php

namespace Microsoft\\Graph\\Generated\Models\CallRecords;

use Microsoft\\Graph\\Generated\Models\Identity;
use Microsoft\\Graph\\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParticipantEndpoint extends Endpoint implements Parsable 
{
    /**
     * Instantiates a new ParticipantEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecords.participantEndpoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParticipantEndpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParticipantEndpoint {
        return new ParticipantEndpoint();
    }

    /**
     * Gets the associatedIdentity property value. Identity associated with the endpoint.
     * @return Identity|null
    */
    public function getAssociatedIdentity(): ?Identity {
        $val = $this->getBackingStore()->get('associatedIdentity');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedIdentity'");
    }

    /**
     * Gets the cpuCoresCount property value. CPU number of cores used by the media endpoint.
     * @return int|null
    */
    public function getCpuCoresCount(): ?int {
        $val = $this->getBackingStore()->get('cpuCoresCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuCoresCount'");
    }

    /**
     * Gets the cpuName property value. CPU name used by the media endpoint.
     * @return string|null
    */
    public function getCpuName(): ?string {
        $val = $this->getBackingStore()->get('cpuName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuName'");
    }

    /**
     * Gets the cpuProcessorSpeedInMhz property value. CPU processor speed used by the media endpoint.
     * @return int|null
    */
    public function getCpuProcessorSpeedInMhz(): ?int {
        $val = $this->getBackingStore()->get('cpuProcessorSpeedInMhz');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuProcessorSpeedInMhz'");
    }

    /**
     * Gets the feedback property value. The feedback provided by the user of this endpoint about the quality of the session.
     * @return UserFeedback|null
    */
    public function getFeedback(): ?UserFeedback {
        $val = $this->getBackingStore()->get('feedback');
        if (is_null($val) || $val instanceof UserFeedback) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feedback'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedIdentity' => fn(ParseNode $n) => $o->setAssociatedIdentity($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'cpuCoresCount' => fn(ParseNode $n) => $o->setCpuCoresCount($n->getIntegerValue()),
            'cpuName' => fn(ParseNode $n) => $o->setCpuName($n->getStringValue()),
            'cpuProcessorSpeedInMhz' => fn(ParseNode $n) => $o->setCpuProcessorSpeedInMhz($n->getIntegerValue()),
            'feedback' => fn(ParseNode $n) => $o->setFeedback($n->getObjectValue([UserFeedback::class, 'createFromDiscriminatorValue'])),
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identity property value. Identity associated with the endpoint. The identity property is deprecated and will stop returning data on June 30, 2026. Going forward, use the associatedIdentity property.
     * @return IdentitySet|null
    */
    public function getIdentity(): ?IdentitySet {
        $val = $this->getBackingStore()->get('identity');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identity'");
    }

    /**
     * Gets the name property value. Name of the device used by the media endpoint.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('associatedIdentity', $this->getAssociatedIdentity());
        $writer->writeIntegerValue('cpuCoresCount', $this->getCpuCoresCount());
        $writer->writeStringValue('cpuName', $this->getCpuName());
        $writer->writeIntegerValue('cpuProcessorSpeedInMhz', $this->getCpuProcessorSpeedInMhz());
        $writer->writeObjectValue('feedback', $this->getFeedback());
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the associatedIdentity property value. Identity associated with the endpoint.
     * @param Identity|null $value Value to set for the associatedIdentity property.
    */
    public function setAssociatedIdentity(?Identity $value): void {
        $this->getBackingStore()->set('associatedIdentity', $value);
    }

    /**
     * Sets the cpuCoresCount property value. CPU number of cores used by the media endpoint.
     * @param int|null $value Value to set for the cpuCoresCount property.
    */
    public function setCpuCoresCount(?int $value): void {
        $this->getBackingStore()->set('cpuCoresCount', $value);
    }

    /**
     * Sets the cpuName property value. CPU name used by the media endpoint.
     * @param string|null $value Value to set for the cpuName property.
    */
    public function setCpuName(?string $value): void {
        $this->getBackingStore()->set('cpuName', $value);
    }

    /**
     * Sets the cpuProcessorSpeedInMhz property value. CPU processor speed used by the media endpoint.
     * @param int|null $value Value to set for the cpuProcessorSpeedInMhz property.
    */
    public function setCpuProcessorSpeedInMhz(?int $value): void {
        $this->getBackingStore()->set('cpuProcessorSpeedInMhz', $value);
    }

    /**
     * Sets the feedback property value. The feedback provided by the user of this endpoint about the quality of the session.
     * @param UserFeedback|null $value Value to set for the feedback property.
    */
    public function setFeedback(?UserFeedback $value): void {
        $this->getBackingStore()->set('feedback', $value);
    }

    /**
     * Sets the identity property value. Identity associated with the endpoint. The identity property is deprecated and will stop returning data on June 30, 2026. Going forward, use the associatedIdentity property.
     * @param IdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?IdentitySet $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

    /**
     * Sets the name property value. Name of the device used by the media endpoint.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

}
