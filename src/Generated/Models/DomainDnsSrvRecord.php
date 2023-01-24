<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsSrvRecord extends DomainDnsRecord implements Parsable 
{
    /**
     * Instantiates a new DomainDnsSrvRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainDnsSrvRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainDnsSrvRecord {
        return new DomainDnsSrvRecord();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'nameTarget' => fn(ParseNode $n) => $o->setNameTarget($n->getStringValue()),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getStringValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the nameTarget property value. Value to use when configuring the Target property of the SRV record at the DNS host.
     * @return string|null
    */
    public function getNameTarget(): ?string {
        return $this->getBackingStore()->get('nameTarget');
    }

    /**
     * Gets the port property value. Value to use when configuring the port property of the SRV record at the DNS host.
     * @return int|null
    */
    public function getPort(): ?int {
        return $this->getBackingStore()->get('port');
    }

    /**
     * Gets the priority property value. Value to use when configuring the priority property of the SRV record at the DNS host.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the protocol property value. Value to use when configuring the protocol property of the SRV record at the DNS host.
     * @return string|null
    */
    public function getProtocol(): ?string {
        return $this->getBackingStore()->get('protocol');
    }

    /**
     * Gets the service property value. Value to use when configuring the service property of the SRV record at the DNS host.
     * @return string|null
    */
    public function getService(): ?string {
        return $this->getBackingStore()->get('service');
    }

    /**
     * Gets the weight property value. Value to use when configuring the weight property of the SRV record at the DNS host.
     * @return int|null
    */
    public function getWeight(): ?int {
        return $this->getBackingStore()->get('weight');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('nameTarget', $this->getNameTarget());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeStringValue('protocol', $this->getProtocol());
        $writer->writeStringValue('service', $this->getService());
        $writer->writeIntegerValue('weight', $this->getWeight());
    }

    /**
     * Sets the nameTarget property value. Value to use when configuring the Target property of the SRV record at the DNS host.
     * @param string|null $value Value to set for the nameTarget property.
    */
    public function setNameTarget(?string $value): void {
        $this->getBackingStore()->set('nameTarget', $value);
    }

    /**
     * Sets the port property value. Value to use when configuring the port property of the SRV record at the DNS host.
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

    /**
     * Sets the priority property value. Value to use when configuring the priority property of the SRV record at the DNS host.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the protocol property value. Value to use when configuring the protocol property of the SRV record at the DNS host.
     * @param string|null $value Value to set for the protocol property.
    */
    public function setProtocol(?string $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

    /**
     * Sets the service property value. Value to use when configuring the service property of the SRV record at the DNS host.
     * @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

    /**
     * Sets the weight property value. Value to use when configuring the weight property of the SRV record at the DNS host.
     * @param int|null $value Value to set for the weight property.
    */
    public function setWeight(?int $value): void {
        $this->getBackingStore()->set('weight', $value);
    }

}
