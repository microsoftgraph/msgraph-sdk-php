<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryReviewSet extends DataSet implements Parsable 
{
    /**
     * Instantiates a new EdiscoveryReviewSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ediscoveryReviewSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryReviewSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryReviewSet {
        return new EdiscoveryReviewSet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'queries' => fn(ParseNode $n) => $o->setQueries($n->getCollectionOfObjectValues([EdiscoveryReviewSetQuery::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the queries property value. Represents queries within the review set.
     * @return array<EdiscoveryReviewSetQuery>|null
    */
    public function getQueries(): ?array {
        return $this->getBackingStore()->get('queries');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('queries', $this->getQueries());
    }

    /**
     * Sets the queries property value. Represents queries within the review set.
     *  @param array<EdiscoveryReviewSetQuery>|null $value Value to set for the queries property.
    */
    public function setQueries(?array $value): void {
        $this->getBackingStore()->set('queries', $value);
    }

}
