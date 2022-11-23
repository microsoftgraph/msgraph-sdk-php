<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemAzureRoleResource extends AccessReviewInstanceDecisionItemResource implements Parsable 
{
    /**
     * Instantiates a new AccessReviewInstanceDecisionItemAzureRoleResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInstanceDecisionItemAzureRoleResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemAzureRoleResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemAzureRoleResource {
        return new AccessReviewInstanceDecisionItemAzureRoleResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scope' => fn(ParseNode $n) => $o->setScope($n->getObjectValue([AccessReviewInstanceDecisionItemResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the scope property value. Details of the scope this role is associated with.
     * @return AccessReviewInstanceDecisionItemResource|null
    */
    public function getScope(): ?AccessReviewInstanceDecisionItemResource {
        return $this->getBackingStore()->get('scope');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('scope', $this->getScope());
    }

    /**
     * Sets the scope property value. Details of the scope this role is associated with.
     *  @param AccessReviewInstanceDecisionItemResource|null $value Value to set for the scope property.
    */
    public function setScope(?AccessReviewInstanceDecisionItemResource $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

}
