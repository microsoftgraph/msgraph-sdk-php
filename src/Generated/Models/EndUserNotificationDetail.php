<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EndUserNotificationDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new EndUserNotificationDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EndUserNotificationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EndUserNotificationDetail {
        return new EndUserNotificationDetail();
    }

    /**
     * Gets the emailContent property value. Email HTML content.
     * @return string|null
    */
    public function getEmailContent(): ?string {
        $val = $this->getBackingStore()->get('emailContent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailContent'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailContent' => fn(ParseNode $n) => $o->setEmailContent($n->getStringValue()),
            'isDefaultLangauge' => fn(ParseNode $n) => $o->setIsDefaultLangauge($n->getBooleanValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'sentFrom' => fn(ParseNode $n) => $o->setSentFrom($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDefaultLangauge property value. Indicates whether this language is default.
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
     * Gets the language property value. Notification language.
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
     * Gets the locale property value. Notification locale.
     * @return string|null
    */
    public function getLocale(): ?string {
        $val = $this->getBackingStore()->get('locale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locale'");
    }

    /**
     * Gets the sentFrom property value. The sentFrom property
     * @return EmailIdentity|null
    */
    public function getSentFrom(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('sentFrom');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentFrom'");
    }

    /**
     * Gets the subject property value. Mail subject.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('emailContent', $this->getEmailContent());
        $writer->writeBooleanValue('isDefaultLangauge', $this->getIsDefaultLangauge());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeObjectValue('sentFrom', $this->getSentFrom());
        $writer->writeStringValue('subject', $this->getSubject());
    }

    /**
     * Sets the emailContent property value. Email HTML content.
     * @param string|null $value Value to set for the emailContent property.
    */
    public function setEmailContent(?string $value): void {
        $this->getBackingStore()->set('emailContent', $value);
    }

    /**
     * Sets the isDefaultLangauge property value. Indicates whether this language is default.
     * @param bool|null $value Value to set for the isDefaultLangauge property.
    */
    public function setIsDefaultLangauge(?bool $value): void {
        $this->getBackingStore()->set('isDefaultLangauge', $value);
    }

    /**
     * Sets the language property value. Notification language.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the locale property value. Notification locale.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the sentFrom property value. The sentFrom property
     * @param EmailIdentity|null $value Value to set for the sentFrom property.
    */
    public function setSentFrom(?EmailIdentity $value): void {
        $this->getBackingStore()->set('sentFrom', $value);
    }

    /**
     * Sets the subject property value. Mail subject.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
