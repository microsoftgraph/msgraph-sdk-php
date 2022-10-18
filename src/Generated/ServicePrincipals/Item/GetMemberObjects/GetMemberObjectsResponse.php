<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\GetMemberObjects;

use Microsoft\Graph\Generated\Models\BaseCollectionPaginationCountResponse;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetMemberObjectsResponse extends BaseCollectionPaginationCountResponse implements Parsable 
{
    /**
     * @var array<string>|null $value The value property
    */
    private ?array $value = null;
    
    /**
     * Instantiates a new getMemberObjectsResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetMemberObjectsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetMemberObjectsResponse {
        return new GetMemberObjectsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return array<string>|null
    */
    public function getValue(): ?array {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('value', $this->value);
    }

    /**
     * Sets the value property value. The value property
     *  @param array<string>|null $value Value to set for the value property.
    */
    public function setValue(?array $value ): void {
        $this->value = $value;
    }

}
