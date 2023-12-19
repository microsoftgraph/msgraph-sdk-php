<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EdiscoveryReviewTag extends Tag implements Parsable 
{
    /**
     * Instantiates a new ediscoveryReviewTag and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ediscoveryReviewTag');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryReviewTag
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryReviewTag {
        return new EdiscoveryReviewTag();
    }

    /**
     * Gets the childSelectability property value. Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
     * @return EdiscoveryReviewTag_childSelectability|null
    */
    public function getChildSelectability(): ?EdiscoveryReviewTag_childSelectability {
        $val = $this->getBackingStore()->get('childSelectability');
        if (is_null($val) || $val instanceof EdiscoveryReviewTag_childSelectability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childSelectability'");
    }

    /**
     * Gets the childTags property value. Returns the tags that are a child of a tag.
     * @return array<EdiscoveryReviewTag>|null
    */
    public function getChildTags(): ?array {
        $val = $this->getBackingStore()->get('childTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EdiscoveryReviewTag::class);
            /** @var array<EdiscoveryReviewTag>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childTags'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'childSelectability' => fn(ParseNode $n) => $o->setChildSelectability($n->getEnumValue(EdiscoveryReviewTag_childSelectability::class)),
            'childTags' => fn(ParseNode $n) => $o->setChildTags($n->getCollectionOfObjectValues([EdiscoveryReviewTag::class, 'createFromDiscriminatorValue'])),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([EdiscoveryReviewTag::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the parent property value. Returns the parent tag of the specified tag.
     * @return EdiscoveryReviewTag|null
    */
    public function getParent(): ?EdiscoveryReviewTag {
        $val = $this->getBackingStore()->get('parent');
        if (is_null($val) || $val instanceof EdiscoveryReviewTag) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('childSelectability', $this->getChildSelectability());
        $writer->writeCollectionOfObjectValues('childTags', $this->getChildTags());
        $writer->writeObjectValue('parent', $this->getParent());
    }

    /**
     * Sets the childSelectability property value. Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
     * @param EdiscoveryReviewTag_childSelectability|null $value Value to set for the childSelectability property.
    */
    public function setChildSelectability(?EdiscoveryReviewTag_childSelectability $value): void {
        $this->getBackingStore()->set('childSelectability', $value);
    }

    /**
     * Sets the childTags property value. Returns the tags that are a child of a tag.
     * @param array<EdiscoveryReviewTag>|null $value Value to set for the childTags property.
    */
    public function setChildTags(?array $value): void {
        $this->getBackingStore()->set('childTags', $value);
    }

    /**
     * Sets the parent property value. Returns the parent tag of the specified tag.
     * @param EdiscoveryReviewTag|null $value Value to set for the parent property.
    */
    public function setParent(?EdiscoveryReviewTag $value): void {
        $this->getBackingStore()->set('parent', $value);
    }

}
