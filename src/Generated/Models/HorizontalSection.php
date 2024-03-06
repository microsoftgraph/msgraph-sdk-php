<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HorizontalSection extends Entity implements Parsable 
{
    /**
     * Instantiates a new HorizontalSection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HorizontalSection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HorizontalSection {
        return new HorizontalSection();
    }

    /**
     * Gets the columns property value. The columns property
     * @return array<HorizontalSectionColumn>|null
    */
    public function getColumns(): ?array {
        $val = $this->getBackingStore()->get('columns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HorizontalSectionColumn::class);
            /** @var array<HorizontalSectionColumn>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columns'");
    }

    /**
     * Gets the emphasis property value. The emphasis property
     * @return SectionEmphasisType|null
    */
    public function getEmphasis(): ?SectionEmphasisType {
        $val = $this->getBackingStore()->get('emphasis');
        if (is_null($val) || $val instanceof SectionEmphasisType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emphasis'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'columns' => fn(ParseNode $n) => $o->setColumns($n->getCollectionOfObjectValues([HorizontalSectionColumn::class, 'createFromDiscriminatorValue'])),
            'emphasis' => fn(ParseNode $n) => $o->setEmphasis($n->getEnumValue(SectionEmphasisType::class)),
            'layout' => fn(ParseNode $n) => $o->setLayout($n->getEnumValue(HorizontalSectionLayoutType::class)),
        ]);
    }

    /**
     * Gets the layout property value. The layout property
     * @return HorizontalSectionLayoutType|null
    */
    public function getLayout(): ?HorizontalSectionLayoutType {
        $val = $this->getBackingStore()->get('layout');
        if (is_null($val) || $val instanceof HorizontalSectionLayoutType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'layout'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('columns', $this->getColumns());
        $writer->writeEnumValue('emphasis', $this->getEmphasis());
        $writer->writeEnumValue('layout', $this->getLayout());
    }

    /**
     * Sets the columns property value. The columns property
     * @param array<HorizontalSectionColumn>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value): void {
        $this->getBackingStore()->set('columns', $value);
    }

    /**
     * Sets the emphasis property value. The emphasis property
     * @param SectionEmphasisType|null $value Value to set for the emphasis property.
    */
    public function setEmphasis(?SectionEmphasisType $value): void {
        $this->getBackingStore()->set('emphasis', $value);
    }

    /**
     * Sets the layout property value. The layout property
     * @param HorizontalSectionLayoutType|null $value Value to set for the layout property.
    */
    public function setLayout(?HorizontalSectionLayoutType $value): void {
        $this->getBackingStore()->set('layout', $value);
    }

}
