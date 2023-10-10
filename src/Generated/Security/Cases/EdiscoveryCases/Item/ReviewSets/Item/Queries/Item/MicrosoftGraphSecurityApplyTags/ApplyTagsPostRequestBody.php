<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\Queries\Item\MicrosoftGraphSecurityApplyTags;

use Microsoft\Graph\Generated\Models\Security\EdiscoveryReviewTag;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplyTagsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new applyTagsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('tagsToAdd');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoveryReviewTag::class);
            /** @var array<EdiscoveryReviewTag>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tagsToAdd'");
    }

    /**
     * Gets the tagsToRemove property value. The tagsToRemove property
     * @return array<EdiscoveryReviewTag>|null
    */
    public function getTagsToRemove(): ?array {
        $val = $this->getBackingStore()->get('tagsToRemove');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoveryReviewTag::class);
            /** @var array<EdiscoveryReviewTag>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tagsToRemove'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('tagsToAdd', $this->getTagsToAdd());
        $writer->writeCollectionOfObjectValues('tagsToRemove', $this->getTagsToRemove());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the tagsToAdd property value. The tagsToAdd property
     * @param array<EdiscoveryReviewTag>|null $value Value to set for the tagsToAdd property.
    */
    public function setTagsToAdd(?array $value): void {
        $this->getBackingStore()->set('tagsToAdd', $value);
    }

    /**
     * Sets the tagsToRemove property value. The tagsToRemove property
     * @param array<EdiscoveryReviewTag>|null $value Value to set for the tagsToRemove property.
    */
    public function setTagsToRemove(?array $value): void {
        $this->getBackingStore()->set('tagsToRemove', $value);
    }

}
