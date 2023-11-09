<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class OnenotePage extends OnenoteEntitySchemaObjectModel implements Parsable 
{
    /**
     * Instantiates a new onenotePage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onenotePage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenotePage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenotePage {
        return new OnenotePage();
    }

    /**
     * Gets the content property value. The page's HTML content.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the contentUrl property value. The URL for the page's HTML content.  Read-only.
     * @return string|null
    */
    public function getContentUrl(): ?string {
        $val = $this->getBackingStore()->get('contentUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentUrl'");
    }

    /**
     * Gets the createdByAppId property value. The unique identifier of the application that created the page. Read-only.
     * @return string|null
    */
    public function getCreatedByAppId(): ?string {
        $val = $this->getBackingStore()->get('createdByAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByAppId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'contentUrl' => fn(ParseNode $n) => $o->setContentUrl($n->getStringValue()),
            'createdByAppId' => fn(ParseNode $n) => $o->setCreatedByAppId($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'level' => fn(ParseNode $n) => $o->setLevel($n->getIntegerValue()),
            'links' => fn(ParseNode $n) => $o->setLinks($n->getObjectValue([PageLinks::class, 'createFromDiscriminatorValue'])),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getIntegerValue()),
            'parentNotebook' => fn(ParseNode $n) => $o->setParentNotebook($n->getObjectValue([Notebook::class, 'createFromDiscriminatorValue'])),
            'parentSection' => fn(ParseNode $n) => $o->setParentSection($n->getObjectValue([OnenoteSection::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'userTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUserTags($val);
            },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the level property value. The indentation level of the page. Read-only.
     * @return int|null
    */
    public function getLevel(): ?int {
        $val = $this->getBackingStore()->get('level');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'level'");
    }

    /**
     * Gets the links property value. Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only.
     * @return PageLinks|null
    */
    public function getLinks(): ?PageLinks {
        $val = $this->getBackingStore()->get('links');
        if (is_null($val) || $val instanceof PageLinks) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'links'");
    }

    /**
     * Gets the order property value. The order of the page within its parent section. Read-only.
     * @return int|null
    */
    public function getOrder(): ?int {
        $val = $this->getBackingStore()->get('order');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'order'");
    }

    /**
     * Gets the parentNotebook property value. The notebook that contains the page.  Read-only.
     * @return Notebook|null
    */
    public function getParentNotebook(): ?Notebook {
        $val = $this->getBackingStore()->get('parentNotebook');
        if (is_null($val) || $val instanceof Notebook) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentNotebook'");
    }

    /**
     * Gets the parentSection property value. The section that contains the page. Read-only.
     * @return OnenoteSection|null
    */
    public function getParentSection(): ?OnenoteSection {
        $val = $this->getBackingStore()->get('parentSection');
        if (is_null($val) || $val instanceof OnenoteSection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentSection'");
    }

    /**
     * Gets the title property value. The title of the page.
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
     * Gets the userTags property value. The userTags property
     * @return array<string>|null
    */
    public function getUserTags(): ?array {
        $val = $this->getBackingStore()->get('userTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userTags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeStringValue('contentUrl', $this->getContentUrl());
        $writer->writeStringValue('createdByAppId', $this->getCreatedByAppId());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeIntegerValue('level', $this->getLevel());
        $writer->writeObjectValue('links', $this->getLinks());
        $writer->writeIntegerValue('order', $this->getOrder());
        $writer->writeObjectValue('parentNotebook', $this->getParentNotebook());
        $writer->writeObjectValue('parentSection', $this->getParentSection());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeCollectionOfPrimitiveValues('userTags', $this->getUserTags());
    }

    /**
     * Sets the content property value. The page's HTML content.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the contentUrl property value. The URL for the page's HTML content.  Read-only.
     * @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value): void {
        $this->getBackingStore()->set('contentUrl', $value);
    }

    /**
     * Sets the createdByAppId property value. The unique identifier of the application that created the page. Read-only.
     * @param string|null $value Value to set for the createdByAppId property.
    */
    public function setCreatedByAppId(?string $value): void {
        $this->getBackingStore()->set('createdByAppId', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the level property value. The indentation level of the page. Read-only.
     * @param int|null $value Value to set for the level property.
    */
    public function setLevel(?int $value): void {
        $this->getBackingStore()->set('level', $value);
    }

    /**
     * Sets the links property value. Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only.
     * @param PageLinks|null $value Value to set for the links property.
    */
    public function setLinks(?PageLinks $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the order property value. The order of the page within its parent section. Read-only.
     * @param int|null $value Value to set for the order property.
    */
    public function setOrder(?int $value): void {
        $this->getBackingStore()->set('order', $value);
    }

    /**
     * Sets the parentNotebook property value. The notebook that contains the page.  Read-only.
     * @param Notebook|null $value Value to set for the parentNotebook property.
    */
    public function setParentNotebook(?Notebook $value): void {
        $this->getBackingStore()->set('parentNotebook', $value);
    }

    /**
     * Sets the parentSection property value. The section that contains the page. Read-only.
     * @param OnenoteSection|null $value Value to set for the parentSection property.
    */
    public function setParentSection(?OnenoteSection $value): void {
        $this->getBackingStore()->set('parentSection', $value);
    }

    /**
     * Sets the title property value. The title of the page.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the userTags property value. The userTags property
     * @param array<string>|null $value Value to set for the userTags property.
    */
    public function setUserTags(?array $value): void {
        $this->getBackingStore()->set('userTags', $value);
    }

}
