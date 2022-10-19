<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\Queries\Item\ApplyTags;

use Microsoft\Graph\Generated\Models\Security\EdiscoveryReviewTag;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplyTagsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<EdiscoveryReviewTag>|null $tagsToAdd The tagsToAdd property
    */
    private ?array $tagsToAdd = null;
    
    /**
     * @var array<EdiscoveryReviewTag>|null $tagsToRemove The tagsToRemove property
    */
    private ?array $tagsToRemove = null;
    
    /**
     * Instantiates a new applyTagsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyTagsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplyTagsPostRequestBody {
        return new ApplyTagsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'tagsToAdd' => fn(ParseNode $n) => $o->setTagsToAdd($n->getCollectionOfObjectValues([EdiscoveryReviewTag::class, 'createFromDiscriminatorValue'])),
            'tagsToRemove' => fn(ParseNode $n) => $o->setTagsToRemove($n->getCollectionOfObjectValues([EdiscoveryReviewTag::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the tagsToAdd property value. The tagsToAdd property
     * @return array<EdiscoveryReviewTag>|null
    */
    public function getTagsToAdd(): ?array {
        return $this->tagsToAdd;
    }

    /**
     * Gets the tagsToRemove property value. The tagsToRemove property
     * @return array<EdiscoveryReviewTag>|null
    */
    public function getTagsToRemove(): ?array {
        return $this->tagsToRemove;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('tagsToAdd', $this->tagsToAdd);
        $writer->writeCollectionOfObjectValues('tagsToRemove', $this->tagsToRemove);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the tagsToAdd property value. The tagsToAdd property
     *  @param array<EdiscoveryReviewTag>|null $value Value to set for the tagsToAdd property.
    */
    public function setTagsToAdd(?array $value ): void {
        $this->tagsToAdd = $value;
    }

    /**
     * Sets the tagsToRemove property value. The tagsToRemove property
     *  @param array<EdiscoveryReviewTag>|null $value Value to set for the tagsToRemove property.
    */
    public function setTagsToRemove(?array $value ): void {
        $this->tagsToRemove = $value;
    }

}
