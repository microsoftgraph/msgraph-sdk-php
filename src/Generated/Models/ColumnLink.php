<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ColumnLink extends Entity implements Parsable 
{
    /**
     * @var string|null $name The name of the column  in this content type.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new columnLink and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ColumnLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ColumnLink {
        return new ColumnLink();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. The name of the column  in this content type.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('name', $this->name);
    }

    /**
     * Sets the name property value. The name of the column  in this content type.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
