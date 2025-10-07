<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use DateTime;
use Microsoft\\Graph\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Article extends Entity implements Parsable 
{
    /**
     * Instantiates a new Article and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Article
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Article {
        return new Article();
    }

    /**
     * Gets the body property value. The body property
     * @return FormattedContent|null
    */
    public function getBody(): ?FormattedContent {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || $val instanceof FormattedContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when this article was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([FormattedContent::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'imageUrl' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
            'indicators' => fn(ParseNode $n) => $o->setIndicators($n->getCollectionOfObjectValues([ArticleIndicator::class, 'createFromDiscriminatorValue'])),
            'isFeatured' => fn(ParseNode $n) => $o->setIsFeatured($n->getBooleanValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getObjectValue([FormattedContent::class, 'createFromDiscriminatorValue'])),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the imageUrl property value. URL of the header image for this article, used for display purposes.
     * @return string|null
    */
    public function getImageUrl(): ?string {
        $val = $this->getBackingStore()->get('imageUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageUrl'");
    }

    /**
     * Gets the indicators property value. Indicators related to this article.
     * @return array<ArticleIndicator>|null
    */
    public function getIndicators(): ?array {
        $val = $this->getBackingStore()->get('indicators');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ArticleIndicator::class);
            /** @var array<ArticleIndicator>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'indicators'");
    }

    /**
     * Gets the isFeatured property value. Indicates whether this article is currently featured by Microsoft.
     * @return bool|null
    */
    public function getIsFeatured(): ?bool {
        $val = $this->getBackingStore()->get('isFeatured');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFeatured'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. The most recent date and time when this article was updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the summary property value. The summary property
     * @return FormattedContent|null
    */
    public function getSummary(): ?FormattedContent {
        $val = $this->getBackingStore()->get('summary');
        if (is_null($val) || $val instanceof FormattedContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'summary'");
    }

    /**
     * Gets the tags property value. Tags for this article, communicating keywords, or key concepts.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Gets the title property value. The title of this article.
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
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('imageUrl', $this->getImageUrl());
        $writer->writeCollectionOfObjectValues('indicators', $this->getIndicators());
        $writer->writeBooleanValue('isFeatured', $this->getIsFeatured());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeObjectValue('summary', $this->getSummary());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the body property value. The body property
     * @param FormattedContent|null $value Value to set for the body property.
    */
    public function setBody(?FormattedContent $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when this article was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the imageUrl property value. URL of the header image for this article, used for display purposes.
     * @param string|null $value Value to set for the imageUrl property.
    */
    public function setImageUrl(?string $value): void {
        $this->getBackingStore()->set('imageUrl', $value);
    }

    /**
     * Sets the indicators property value. Indicators related to this article.
     * @param array<ArticleIndicator>|null $value Value to set for the indicators property.
    */
    public function setIndicators(?array $value): void {
        $this->getBackingStore()->set('indicators', $value);
    }

    /**
     * Sets the isFeatured property value. Indicates whether this article is currently featured by Microsoft.
     * @param bool|null $value Value to set for the isFeatured property.
    */
    public function setIsFeatured(?bool $value): void {
        $this->getBackingStore()->set('isFeatured', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The most recent date and time when this article was updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the summary property value. The summary property
     * @param FormattedContent|null $value Value to set for the summary property.
    */
    public function setSummary(?FormattedContent $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

    /**
     * Sets the tags property value. Tags for this article, communicating keywords, or key concepts.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the title property value. The title of this article.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
