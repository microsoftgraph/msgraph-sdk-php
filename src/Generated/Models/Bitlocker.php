<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Bitlocker extends Entity 
{
    /** @var array<BitlockerRecoveryKey>|null $recoveryKeys The recovery keys associated with the bitlocker entity. */
    private ?array $recoveryKeys = null;
    
    /**
     * Instantiates a new bitlocker and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Bitlocker
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Bitlocker {
        return new Bitlocker();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'recoveryKeys' => function (self $o, ParseNode $n) { $o->setRecoveryKeys($n->getCollectionOfObjectValues(BitlockerRecoveryKey::class)); },
        ]);
    }

    /**
     * Gets the recoveryKeys property value. The recovery keys associated with the bitlocker entity.
     * @return array<BitlockerRecoveryKey>|null
    */
    public function getRecoveryKeys(): ?array {
        return $this->recoveryKeys;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('recoveryKeys', $this->recoveryKeys);
    }

    /**
     * Sets the recoveryKeys property value. The recovery keys associated with the bitlocker entity.
     *  @param array<BitlockerRecoveryKey>|null $value Value to set for the recoveryKeys property.
    */
    public function setRecoveryKeys(?array $value ): void {
        $this->recoveryKeys = $value;
    }

}
