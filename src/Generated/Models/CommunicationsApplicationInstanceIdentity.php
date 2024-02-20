<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommunicationsApplicationInstanceIdentity extends Identity implements Parsable 
{
    /**
     * Instantiates a new CommunicationsApplicationInstanceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.communicationsApplicationInstanceIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommunicationsApplicationInstanceIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommunicationsApplicationInstanceIdentity {
        return new CommunicationsApplicationInstanceIdentity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'hidden' => fn(ParseNode $n) => $o->setHidden($n->getBooleanValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hidden property value. True if the participant shouldn't be shown in other participants' rosters.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        $val = $this->getBackingStore()->get('hidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hidden'");
    }

    /**
     * Gets the tenantId property value. The tenant ID of the application.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('hidden', $this->getHidden());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the hidden property value. True if the participant shouldn't be shown in other participants' rosters.
     * @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value): void {
        $this->getBackingStore()->set('hidden', $value);
    }

    /**
     * Sets the tenantId property value. The tenant ID of the application.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
