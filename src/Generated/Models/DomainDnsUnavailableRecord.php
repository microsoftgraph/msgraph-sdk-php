<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsUnavailableRecord extends DomainDnsRecord implements Parsable 
{
    /**
     * @var string|null $description Provides the reason why the DomainDnsUnavailableRecord entity is returned.
    */
    private ?string $description = null;
    
    /**
     * Instantiates a new DomainDnsUnavailableRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainDnsUnavailableRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainDnsUnavailableRecord {
        return new DomainDnsUnavailableRecord();
    }

    /**
     * Gets the description property value. Provides the reason why the DomainDnsUnavailableRecord entity is returned.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
    }

    /**
     * Sets the description property value. Provides the reason why the DomainDnsUnavailableRecord entity is returned.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

}
