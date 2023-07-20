<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\IdentityGovernance\Workflow;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeletedItemContainer extends Entity implements Parsable 
{
    /**
     * Instantiates a new deletedItemContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeletedItemContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeletedItemContainer {
        return new DeletedItemContainer();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'workflows' => fn(ParseNode $n) => $o->setWorkflows($n->getCollectionOfObjectValues([Workflow::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the workflows property value. Deleted workflows that end up in the deletedItemsContainer.
     * @return array<Workflow>|null
    */
    public function getWorkflows(): ?array {
        $val = $this->getBackingStore()->get('workflows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Workflow::class);
            /** @var array<Workflow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflows'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('workflows', $this->getWorkflows());
    }

    /**
     * Sets the workflows property value. Deleted workflows that end up in the deletedItemsContainer.
     * @param array<Workflow>|null $value Value to set for the workflows property.
    */
    public function setWorkflows(?array $value): void {
        $this->getBackingStore()->set('workflows', $value);
    }

}
