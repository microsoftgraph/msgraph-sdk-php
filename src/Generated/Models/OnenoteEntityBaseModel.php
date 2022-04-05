<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenoteEntityBaseModel extends Entity 
{
    /** @var string|null $EscapedSelf The endpoint where you can get details about the page. Read-only. */
    private ?string $escapedSelf = null;
    
    /**
     * Instantiates a new onenoteEntityBaseModel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenoteEntityBaseModel
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OnenoteEntityBaseModel {
        return new OnenoteEntityBaseModel();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'self' => function (self $o, ParseNode $n) { $o->setEscapedSelf($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the self property value. The endpoint where you can get details about the page. Read-only.
     * @return string|null
    */
    public function getSelf(): ?string {
        return $this->escapedSelf;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('self', $this->escapedSelf);
    }

    /**
     * Sets the self property value. The endpoint where you can get details about the page. Read-only.
     *  @param string|null $value Value to set for the EscapedSelf property.
    */
    public function setSelf(?string $value ): void {
        $this->escapedSelf = $value;
    }

}
