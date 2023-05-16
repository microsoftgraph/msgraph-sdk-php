<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\PublicError;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalActivityResult extends ExternalActivity implements Parsable 
{
    /**
     * Instantiates a new ExternalActivityResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalActivityResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalActivityResult {
        return new ExternalActivityResult();
    }

    /**
     * Gets the error property value. Error information that explains the failure to process an external activity.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('error', $this->getError());
    }

    /**
     * Sets the error property value. Error information that explains the failure to process an external activity.
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

}
