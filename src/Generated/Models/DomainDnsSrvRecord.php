<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsSrvRecord extends DomainDnsRecord implements Parsable 
{
    /**
     * @var string|null $nameTarget Value to use when configuring the Target property of the SRV record at the DNS host.
    */
    private ?string $nameTarget = null;
    
    /**
     * @var int|null $port Value to use when configuring the port property of the SRV record at the DNS host.
    */
    private ?int $port = null;
    
    /**
     * @var int|null $priority Value to use when configuring the priority property of the SRV record at the DNS host.
    */
    private ?int $priority = null;
    
    /**
     * @var string|null $protocol Value to use when configuring the protocol property of the SRV record at the DNS host.
    */
    private ?string $protocol = null;
    
    /**
     * @var string|null $service Value to use when configuring the service property of the SRV record at the DNS host.
    */
    private ?string $service = null;
    
    /**
     * @var int|null $weight Value to use when configuring the weight property of the SRV record at the DNS host.
    */
    private ?int $weight = null;
    
    /**
     * Instantiates a new DomainDnsSrvRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.domainDnsSrvRecord');
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
            'nameTarget' => function (ParseNode $n) use ($o) { $o->setNameTarget($n->getStringValue()); },
            'port' => function (ParseNode $n) use ($o) { $o->setPort($n->getIntegerValue()); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getIntegerValue()); },
            'protocol' => function (ParseNode $n) use ($o) { $o->setProtocol($n->getStringValue()); },
            'service' => function (ParseNode $n) use ($o) { $o->setService($n->getStringValue()); },
            'weight' => function (ParseNode $n) use ($o) { $o->setWeight($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the nameTarget property value. Value to use when configuring the Target property of the SRV record at the DNS host.
     * @return string|null
    */
    public function getNameTarget(): ?string {
        return $this->nameTarget;
    }

    /**
     * Gets the port property value. Value to use when configuring the port property of the SRV record at the DNS host.
     * @return int|null
    */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * Gets the priority property value. Value to use when configuring the priority property of the SRV record at the DNS host.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the protocol property value. Value to use when configuring the protocol property of the SRV record at the DNS host.
     * @return string|null
    */
    public function getProtocol(): ?string {
        return $this->protocol;
    }

    /**
     * Gets the service property value. Value to use when configuring the service property of the SRV record at the DNS host.
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Gets the weight property value. Value to use when configuring the weight property of the SRV record at the DNS host.
     * @return int|null
    */
    public function getWeight(): ?int {
        return $this->weight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('nameTarget', $this->nameTarget);
        $writer->writeIntegerValue('port', $this->port);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeStringValue('protocol', $this->protocol);
        $writer->writeStringValue('service', $this->service);
        $writer->writeIntegerValue('weight', $this->weight);
    }

    /**
     * Sets the nameTarget property value. Value to use when configuring the Target property of the SRV record at the DNS host.
     *  @param string|null $value Value to set for the nameTarget property.
    */
    public function setNameTarget(?string $value ): void {
        $this->nameTarget = $value;
    }

    /**
     * Sets the port property value. Value to use when configuring the port property of the SRV record at the DNS host.
     *  @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value ): void {
        $this->port = $value;
    }

    /**
     * Sets the priority property value. Value to use when configuring the priority property of the SRV record at the DNS host.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the protocol property value. Value to use when configuring the protocol property of the SRV record at the DNS host.
     *  @param string|null $value Value to set for the protocol property.
    */
    public function setProtocol(?string $value ): void {
        $this->protocol = $value;
    }

    /**
     * Sets the service property value. Value to use when configuring the service property of the SRV record at the DNS host.
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value ): void {
        $this->service = $value;
    }

    /**
     * Sets the weight property value. Value to use when configuring the weight property of the SRV record at the DNS host.
     *  @param int|null $value Value to set for the weight property.
    */
    public function setWeight(?int $value ): void {
        $this->weight = $value;
    }

}
