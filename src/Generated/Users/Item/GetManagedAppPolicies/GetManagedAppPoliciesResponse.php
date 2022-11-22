<?php

namespace Microsoft\Graph\Generated\Users\Item\GetManagedAppPolicies;

use Microsoft\Graph\Generated\Models\BaseCollectionPaginationCountResponse;
use Microsoft\Graph\Generated\Models\ManagedAppPolicy;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetManagedAppPoliciesResponse extends BaseCollectionPaginationCountResponse implements Parsable 
{
    /**
     * Instantiates a new getManagedAppPoliciesResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetManagedAppPoliciesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetManagedAppPoliciesResponse {
        return new GetManagedAppPoliciesResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getCollectionOfObjectValues([ManagedAppPolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return array<ManagedAppPolicy>|null
    */
    public function getValue(): ?array {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('value', $this->getValue());
    }

    /**
     * Sets the value property value. The value property
     *  @param array<ManagedAppPolicy>|null $value Value to set for the value property.
    */
    public function setValue(?array $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
