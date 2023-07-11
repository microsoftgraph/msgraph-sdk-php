<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemIdResolver extends UrlToItemResolverBase implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new itemIdResolver and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalConnectors.itemIdResolver');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemIdResolver
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemIdResolver {
        return new ItemIdResolver();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'urlMatchInfo' => fn(ParseNode $n) => $o->setUrlMatchInfo($n->getObjectValue([UrlMatchInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the itemId property value. Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets.
     * @return string|null
    */
    public function getItemId(): ?string {
        $val = $this->getBackingStore()->get('itemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemId'");
    }

    /**
     * Gets the urlMatchInfo property value. Configurations to match and resolve URL.
     * @return UrlMatchInfo|null
    */
    public function getUrlMatchInfo(): ?UrlMatchInfo {
        $val = $this->getBackingStore()->get('urlMatchInfo');
        if (is_null($val) || $val instanceof UrlMatchInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urlMatchInfo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('urlMatchInfo', $this->getUrlMatchInfo());
    }

    /**
     * Sets the itemId property value. Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->getBackingStore()->set('itemId', $value);
    }

    /**
     * Sets the urlMatchInfo property value. Configurations to match and resolve URL.
     * @param UrlMatchInfo|null $value Value to set for the urlMatchInfo property.
    */
    public function setUrlMatchInfo(?UrlMatchInfo $value): void {
        $this->getBackingStore()->set('urlMatchInfo', $value);
    }

}
