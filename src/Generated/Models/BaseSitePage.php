<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BaseSitePage extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new BaseSitePage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.baseSitePage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseSitePage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseSitePage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.sitePage': return new SitePage();
            }
        }
        return new BaseSitePage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'pageLayout' => fn(ParseNode $n) => $o->setPageLayout($n->getEnumValue(PageLayoutType::class)),
            'publishingState' => fn(ParseNode $n) => $o->setPublishingState($n->getObjectValue([PublicationFacet::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the pageLayout property value. The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
     * @return PageLayoutType|null
    */
    public function getPageLayout(): ?PageLayoutType {
        $val = $this->getBackingStore()->get('pageLayout');
        if (is_null($val) || $val instanceof PageLayoutType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pageLayout'");
    }

    /**
     * Gets the publishingState property value. The publishing status and the MM.mm version of the page.
     * @return PublicationFacet|null
    */
    public function getPublishingState(): ?PublicationFacet {
        $val = $this->getBackingStore()->get('publishingState');
        if (is_null($val) || $val instanceof PublicationFacet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishingState'");
    }

    /**
     * Gets the title property value. Title of the sitePage.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('pageLayout', $this->getPageLayout());
        $writer->writeObjectValue('publishingState', $this->getPublishingState());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the pageLayout property value. The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
     * @param PageLayoutType|null $value Value to set for the pageLayout property.
    */
    public function setPageLayout(?PageLayoutType $value): void {
        $this->getBackingStore()->set('pageLayout', $value);
    }

    /**
     * Sets the publishingState property value. The publishing status and the MM.mm version of the page.
     * @param PublicationFacet|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?PublicationFacet $value): void {
        $this->getBackingStore()->set('publishingState', $value);
    }

    /**
     * Sets the title property value. Title of the sitePage.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
