<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LandingPageDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new LandingPageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LandingPageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LandingPageDetail {
        return new LandingPageDetail();
    }

    /**
     * Gets the content property value. Landing page detail content.
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'isDefaultLangauge' => fn(ParseNode $n) => $o->setIsDefaultLangauge($n->getBooleanValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDefaultLangauge property value. Indicates whether this language detail is default for the landing page.
     * @return bool|null
    */
    public function getIsDefaultLangauge(): ?bool {
        $val = $this->getBackingStore()->get('isDefaultLangauge');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefaultLangauge'");
    }

    /**
     * Gets the language property value. The content language for the landing page.
     * @return string|null
    */
    public function getLanguage(): ?string {
        $val = $this->getBackingStore()->get('language');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'language'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeBooleanValue('isDefaultLangauge', $this->getIsDefaultLangauge());
        $writer->writeStringValue('language', $this->getLanguage());
    }

    /**
     * Sets the content property value. Landing page detail content.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the isDefaultLangauge property value. Indicates whether this language detail is default for the landing page.
     * @param bool|null $value Value to set for the isDefaultLangauge property.
    */
    public function setIsDefaultLangauge(?bool $value): void {
        $this->getBackingStore()->set('isDefaultLangauge', $value);
    }

    /**
     * Sets the language property value. The content language for the landing page.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

}
