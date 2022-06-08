<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersistentBrowserSessionControl extends ConditionalAccessSessionControl implements Parsable 
{
    /**
     * @var PersistentBrowserSessionMode|null $mode Possible values are: always, never.
    */
    private ?PersistentBrowserSessionMode $mode = null;
    
    /**
     * Instantiates a new persistentBrowserSessionControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersistentBrowserSessionControl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersistentBrowserSessionControl {
        return new PersistentBrowserSessionControl();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mode' => function (ParseNode $n) use ($o) { $o->setMode($n->getEnumValue(PersistentBrowserSessionMode::class)); },
        ]);
    }

    /**
     * Gets the mode property value. Possible values are: always, never.
     * @return PersistentBrowserSessionMode|null
    */
    public function getMode(): ?PersistentBrowserSessionMode {
        return $this->mode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('mode', $this->mode);
    }

    /**
     * Sets the mode property value. Possible values are: always, never.
     *  @param PersistentBrowserSessionMode|null $value Value to set for the mode property.
    */
    public function setMode(?PersistentBrowserSessionMode $value ): void {
        $this->mode = $value;
    }

}
